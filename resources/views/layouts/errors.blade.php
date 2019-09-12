@if($errors->any())
    <div class="alert black mt-0" role="alert">
        <h3 class="red">Please Enter Valid Data</h3>
        <ol>
            @foreach($errors->all() as $error)
                <li class="mt-2 h6 text-center text-white">{{$error}}</li>
            @endforeach
        </ol>
    </div>
@endif
