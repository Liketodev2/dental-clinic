<div class="p-4">
    <div class="flash-messages-area">
        @if ($flash = session('success'))
            <div id="flash-message" class="alert alert-success">
                {{ $flash }}
            </div>
        @endif

        @if ($flash = session('error'))
            <div id="flash-message" class="alert alert-danger">
                {{ $flash }}
            </div>
        @endif
    </div>
</div>
