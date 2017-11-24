<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
            <body>
                <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand">College Management System</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li><a href="/">Home</a></li>
                      <li><a href="/login">Login</a></li>
                      <li><a href="/sign_up">Signup</a></li>
                      <li><a href="">About</a></li>
                    </ul>
                  </div>
                </nav>
                <div class="container" style="max-width:75%;">
                    @section('content')
                    This is Home page
                    @show
                </div>
                <script>
                    $(".nav a").on("click", function(){
                       $(".nav").find(".active").removeClass("active");
                       $(this).parent().addClass("active");
                    });
                </script>
            </body>
            <footer class="fixed-footer">
                @section('footer')
                  CONTUS
                @show
            </footer>
        </div>
</html>