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