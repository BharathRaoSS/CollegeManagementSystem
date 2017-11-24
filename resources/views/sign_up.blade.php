@extends('Layouts.master_page')
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>


@section('content')
	<div class="form-signup">
		<form action="{{url('/sign_up')}}" method="POST">
				{{csrf_field()}}
				<h3>Sign Up</h3><br>
				<label>Name:</label><br>
				<input type="text" name="name" class="form-control input-sm chat-input" placeholder="Enter Your Name!" required><br>		
				@foreach($errors->get('name') as $name_errors)
		     		<span class="alert alert-danger"> * {{$name_errors}}</span>
		    	@endforeach
		    	<br>

				<label>Email:</label><br>
				<input type="email" name="email" class="form-control input-sm chat-input" placeholder="Enter Your Email!" required><br>		
				@foreach($errors->get('email') as $email_errors)
		     		<span class="alert alert-danger"> * {{$email_errors}}</span>
		    	@endforeach
		    	<br>

		    	<label>Password:</label><br>
				<input type="password" name="password" class="form-control input-sm chat-input" placeholder="Enter Your Password!" required><br>	
				@foreach($errors->get('password') as $password_errors)
		     		<span class="alert alert-danger"> * {{$password_errors}}</span>
		    	@endforeach
		    	<br>

		    	<label>Confirm Password:</label><br>
				<input type="password" name="confirm_password" class="form-control input-sm chat-input" placeholder="Confirm Password!" required><br>
				@foreach($errors->get('confirm_password') as $confirm_password_errors)
		     		<span class="alert alert-danger"> * {{$confirm_password_errors}}</span>
		    	@endforeach
		    	<br>

		        <label>Select the User Type:</label><br>
		    	<select name="user_type" class="drop-down btn btn-default">
				  <option value="Admin">Admin</option>
				  <option value="Manager">Manager</option>
				</select><br>
				@foreach($errors->get('user_type') as $user_type_errors)
		     		<span class="alert alert-danger"> * {{$user_type_errors}}</span>
		    	@endforeach

				<center><input type="submit" class="btn btn-primary"></center>
		</form>
	</div>
@endsection
@section('footer')
@parent
@endsection

</body>
</html>