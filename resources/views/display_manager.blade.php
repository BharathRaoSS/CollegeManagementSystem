<!DOCTYPE html>
<?php $count=1; ?>
<html>
<head>
	<title>Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="text-align: center;">
	<h4>Student Details List</h4>
					@if(!$student_details->isEmpty())  {{--Checking whether there is a record --}}
	<div class="container-fluid">
		<div class="col-md-12"><br><br>
		<form method='GET' action='/search' class='navbar-form navbar-center' role='search'> {{--This is used for Search --}}
			{{csrf_field()}}
	            <div class="input-group custom-search-form">
	                <input type="text" class="form-control" name="search" placeholder="Search...">
	                <input type="hidden" name="user" value="Manager"> {{--Authentication for displaying Search results--}}
	                <span class="input-group-btn">
			    		<button class="btn btn-default-sm" type="submit">
			        	<i class="fa fa-search">Search</i>
			    		</button>
					</span>
				</div>
		    </form>
			<table class="table table-bordered" style="overflow-x: scroll;">
				<thead>
					<th>S.No</th>
					<th>Name</th>
					<th>D.O.B</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Skills</th>
					<th>Image_URL</th>
					<th>Description</th>
				</thead>
				<tbody>
					@foreach($student_details as $student_data)   {{--Displaying Records--}}
					<tr>
						<td>{{$count++}}</td>
						<td>{{$student_data->name}}</td>
						<td>{{$student_data->dob}}</td>
						<td>{{$student_data->age}}</td>
						<td>{{$student_data->gender}}</td>
						<td>{{$student_data->skills}}</td>
						<td>{{$student_data->image}}</td>
						<td>{{$student_data->description}}</td>
					</tr>				
					@endforeach	
					@else
						<h4>No Records Found!</h4>
					@endif
				</tbody>
			</table>
			<a href="{{url('/')}}">Click Here to Logout</a>
		</div>
	</div>
</body>
</html>