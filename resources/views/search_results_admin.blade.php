<!DOCTYPE html>
<?php $count=1; ?>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="text-align: center;">
	<h4>Search Results</h4>
				@if(!$student_details->isEmpty())    {{--Checking whether there is a record --}}
	<div class="container-fluid">
		<div class="col-md-12"><br><br>
			<form method='GET' action='/search' class='navbar-form navbar-center' role='search'>
			{{csrf_field()}}
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" name="search" placeholder="Search...">   {{--This is used for Search --}}
                <span class="input-group-btn">
		    		<button class="btn btn-default-sm" type="submit">
		        	<i class="fa fa-search">Search
		    		</button>
				</span>
			</div>
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
					<th>Edit</th>
					<th>Delete</th>

				</thead>
				<tbody>
					@foreach($student_details as $student_data)    {{--Displaying Records--}}
					<tr>
						<td>{{$count++}}</td>
						<td>{{$student_data->name}}</td>
						<td>{{$student_data->dob}}</td>
						<td>{{$student_data->age}}</td>
						<td>{{$student_data->gender}}</td>
						<td>{{$student_data->skills}}</td>
						<td><img src="{{$student_data->image}}" width="40px" height="40px">{{$student_data->image}}</td>
						<td>{{$student_data->description}}</td>
						<td><a href="{{url('/edit_student')}}/{{$student_data->id}}" target='new_window' style="cursor:pointer"class='glyphicon glyphicon-pencil'></a></td>
						<td><a href="{{url('/delete_student')}}/{{$student_data->id}}" onclick="return confirm('Are you sure you want to delete this item?');" class='glyphicon glyphicon-remove' style="cursor:pointer"></a></td>
					</tr>				
					@endforeach	
					@else
						<h4>No Records Found!</h4>    {{--Displaying no records if not found--}}
					@endif
				</tbody>
			</table>
		</div>
	</div>
	<center>{{ $student_details->links() }}</center>
				<a href="{{url('/admin')}}">Click Here to go back to view all students</a>
</body>
</html>