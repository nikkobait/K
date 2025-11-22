
    @if($errors->any())
        <div style="color:red">
            @foreach ($errors->all() as $error )
                <p>[{{$error}}]</p>   
            @endforeach
        </div>
    @endif
    <form  action="{{route('register')}}" method="POST">
        @csrf
        <p>Name</p>
        <input  type="text" name ="name" required>
        <p>Email</p>
        <input type="email" name="email" required>
        <p>password</p>
        <input type="password" name="password"required>
        <p>password_confirmation</p>
        <input type="password" name="password_confirmation"required>
        <input type="submit">
    </form>
