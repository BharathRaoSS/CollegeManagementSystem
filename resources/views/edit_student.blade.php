<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{url('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">     
        function ageCalculate(){  //Logic for Calculating age based on given D.O.B
               var birthDate =document.getElementById('dob').value;
               var mdate = birthDate.toString();
               var yearThen = parseInt(mdate.substring(0,4), 10);
               var monthThen = parseInt(mdate.substring(5,7), 10);
               var dayThen = parseInt(mdate.substring(8,10), 10);
               var today = new Date();
               var birthday = new Date(yearThen, monthThen-1, dayThen);
               var differenceInMilisecond = today.valueOf() - birthday.valueOf();          
               var year_age = Math.floor(differenceInMilisecond / 31536000000);
               document.getElementById("age").value= year_age;  
               return true;
        }  
    </script>
</head>
<body>   
    <form action="{{url('/edit_student/')}}/{{$student_details->id}}" onsubmit="return ageCalculate()"  method="POST" enctype="multipart/form-data" > {{--Calculating The Age in Background--}}
        {{csrf_field()}}
			<h3>Edit the Student Details</h3>
			<div class="container form-signup">
    			<h3>Student</h3><br>
                <label>Name:</label><br>
                <input type="text" name="name" class="form-control input-sm chat-input" placeholder="Enter student Name!" required value="{{$student_details->name}}"><br> @foreach($errors->get('name') as $name_errors)
                    <span class="alert alert-danger"> * {{$name_errors}}</span>
                @endforeach
                <br>

                <label>D.O.B:</label><br>
                <input type="date" name="dob" class="form-control input-sm chat-input" id="dob" value="{{$student_details->dob}}" required><br>   
                <input type="hidden" name="age" id="age"> 
                @foreach($errors->get('dob') as $dob_errors)
                    <span class="alert alert-danger"> * {{$dob_errors}}</span>
                @endforeach
                <br>

                <label>Gender:</label><br>
                @if($student_details->gender=='male')
                <input type="radio" name="gender" value="male" class="radio-inline" checked required>&nbsp;Male
                <input type="radio" name="gender" value="female" class="radio-inline" required>&nbsp;Female<br>
                @else       
                <input type="radio" name="gender" value="male" class="radio-inline"  required>&nbsp;Male
                <input type="radio" name="gender" value="female" class="radio-inline" checked  required>&nbsp;Female<br>
                @endif
                @foreach($errors->get('gender') as $gender_errors)
                    <span class="alert alert-danger"> * {{$gender_errors}}</span>
                @endforeach
                <br><br>

                <label>Select Skills:</label><br>
                <input type="checkbox" name="skills[]" value="JAVA"> JAVA
                <input type="checkbox" name="skills[]" value="C">C
                <input type="checkbox" name="skills[]" value="C++">C++
                @foreach($errors->get('skills') as $skills_errors)
                    <span class="alert"> * {{$skills_errors}}</span>
                @endforeach
                <br><br>

                <label>Upload Picture:</label>
                <input type="file" name="image" class="form-control btn-default" src="{{$student_details->image}}"><img src="{{$student_details->image}}" width="35px" height="35px">This is Previously Uploaded Image<br>
                @foreach($errors->get('image') as $image_errors)
                    <span class="alert alert-danger"> * {{$image_errors}}</span>
                @endforeach            
                <br>

                <label>Enter Description:</label><br>
                <textarea rows="4" name="description" style="resize: none; width: 100%;" placeholder="Student Description">{{$student_details->description}}</textarea><br>
                @foreach($errors->get('description') as $description_errors)
                    <span class="alert alert-danger"> * {{$description_errors}}</span>
                @endforeach<br>
                <br>
                <center>        
                    <input type="submit" class="btn btn-primary"><br><br>
                </center>
            </div>
    </form>
</body>
</html>