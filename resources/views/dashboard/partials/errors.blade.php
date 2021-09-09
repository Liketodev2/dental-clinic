@if ($errors->any())
    <div class="p-4">
        @foreach ($errors->all() as $error)
            <div class="error text-danger">{{$error}}</div>
        @endforeach
    </div>
@endif
