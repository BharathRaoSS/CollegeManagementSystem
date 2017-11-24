<!DOCTYPE html>
<html>
<head>
	<title>Enter Student Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function ageCalculate(){
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
    <form action="{{url('/enter_student_details')}}" onsubmit="return ageCalculate()" method="POST" enctype="multipart/form-data" >
        {{csrf_field()}}
			<h3 >Enter the Student Details &nbsp;&nbsp;<a href="/" style="text-align: right;">Logout</a></h3><br>
			<div class="container form-signup" style="margin-top: 2%">
    			<h3>Student</h3>
                <label>Name:</label><br>
                <input type="text" name="name" class="form-control input-sm chat-input" placeholder="Enter student Name!" required><br> @foreach($errors->get('name') as $name_errors)
                    <span class="alert alert-danger"> * {{$name_errors}}</span>
                @endforeach
                <br>

                <label>D.O.B:</label><br>
                <input type="date" name="dob" class="form-control input-sm chat-input" id="dob" required><br>   
                <input type="hidden" name="age" id="age"> 
                @foreach($errors->get('dob') as $dob_errors)
                    <span class="alert alert-danger"> * {{$dob_errors}}</span>
                @endforeach
                <br>

                <label>Gender:</label><br>
                <input type="radio" name="gender" value="male" class="radio-inline" size="2" required>&nbsp;Male
                <input type="radio" name="gender" value="female" class="radio-inline"  required>&nbsp;Female<br>
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
                <input type="file" name="image" class="form-control btn-default"><br>
                @foreach($errors->get('image') as $image_errors)
                    <span class="alert alert-danger"> * {{$image_errors}}</span>
                @endforeach            
                <br>

                <label>Enter Description:</label><br>
                <textarea rows="4" name="description" style="resize: none; width: 100%;" placeholder="Student Description"></textarea><br>
                @foreach($errors->get('description') as $description_errors)
                    <span class="alert alert-danger"> * {{$description_errors}}</span>
                @endforeach<br>
                <br>

                <center>        
                    <input type="submit" class="btn btn-primary"><br><br>
                </center>
                <h4 style="text-align: center;"><a href="/admin">Click here to view the students records</a></h4>
            </div>
    </form>
</body>
</html>