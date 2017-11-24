@extends ('Layouts.master_page')
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
@section('content')
<div class="border">
    <form action="{{url('/login')}}" method="POST" enctype="multipart/form-data" >

            {{csrf_field()}}
            <h3>Login</h3><br>
            <h4><center>{{Session::get('invalid_password')}}{{Session::get('invalid_email')}}</center></h4>
            <label>Email:</label><br>
            <input type="email" name="email" class="form-control input-sm chat-input" placeholder="Enter Your Email!" required>     
            @foreach($errors->get('email') as $email_errors)
                <span class="alert alert-danger"> * {{$email_errors}}</span>
            @endforeach
            <br>

            <label>Password:</label><br>
            <input type="password" name="password" class="form-control input-sm chat-input" placeholder="Enter Your Password!" required>    
            @foreach($errors->get('password') as $password_errors)
                <span class="alert alert-danger"> * {{$password_errors}}</span>
            @endforeach
            <br>

            <center>        
                <input type="submit" class="btn btn-primary"><br><br>
            </center>

    </form>
    <center><a href="/sign_up">Not registered? Click here for Signup</a></center>
</div>
@endsection
</body>
</html>