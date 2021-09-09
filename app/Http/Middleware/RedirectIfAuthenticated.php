<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                $role = Auth::user()->role;

                switch ($role) {
                    case 'super_admin':
                        return redirect('dashboard/index');
                        break;
                    case 'coordinator':
                        return redirect('coordinator/index');
                        break;
                    case 'accounting':
                        return redirect('accounting/index');
                        break;
                    case 'dental_assistant':
                        return redirect('dental_assistant/index');
                        break;
                    case 'travel_coordinator':
                        return redirect('travel_coordinator/index');
                        break;
                    case 'media_relations':
                        return redirect('media_relations/index');
                        break;
                    case 'operation_manager_and_doctor':
                        return redirect('operation_manager_and_doctor/index');
                        break;
                    default:
                        return redirect('/');
                }
            }
        }

        return $next($request);
    }
}
