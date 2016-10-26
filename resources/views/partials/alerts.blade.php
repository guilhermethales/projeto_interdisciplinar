@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('success'))
    <br>
    <div class="alert alert-success">{!! Session::get('success') !!}</div>
@endif