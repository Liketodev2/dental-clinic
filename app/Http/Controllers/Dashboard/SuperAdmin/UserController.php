<?php

namespace App\Http\Controllers\Dashboard\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::paginate(20);

        return view('dashboard.super_admin.users.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.super_admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'name' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => (new BcryptHasher())->make($request->get('password')),
            'role' => $request->role
        ]);

        return redirect()->back()->with('success', 'User is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.super_admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'nullable|min:8',
            'name' => 'required',
            'role' => 'required'
        ]);

        $user = User::find($id);

        if($request->email != $user->email){
            $this->validate($request, [
                'email' => 'required|unique:users'
            ]);
        }

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
        ]);

        if($request->password){
            $user->update([
                'password' => (new BcryptHasher())->make($request->get('password'))
            ]);
        }


        return redirect()->back()->with('success', 'User is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();

        return redirect()->back();
    }
}
