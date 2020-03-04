@if(Session::has('success'))
    <div class="alert alert-success d-block successful-update">
        {!! Session::get('success') !!}
    </div>
@endif

@if(Session::has('invoice-customize'))
    <div class="alert alert-success d-block successful-update">
        {!! Session::get('invoice-customize') !!}
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif