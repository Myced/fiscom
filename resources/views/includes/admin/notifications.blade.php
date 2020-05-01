@if($flash = session('info'))
    <br>
    <div class="alert alert-primary dark" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('success'))
    <br>
    <div class="alert alert-success dark" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('error'))
    <br>
    <div class="alert alert-danger dark" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('danger'))
    <br>
    <div class="alert alert-danger dark" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('warning'))
    <br>
    <div class="alert alert-warning dark" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif
