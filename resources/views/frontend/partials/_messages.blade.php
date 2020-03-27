@if(Session::has('success'))
    <div class="alert alert-success d-block notification">
        {!! Session::get('success') !!}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning d-block notification">
        {!! Session::get('warning') !!}
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif