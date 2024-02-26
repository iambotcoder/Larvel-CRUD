
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Portfolio Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            
        }
        .icon-black {
            background: #333;
            color: wheat;
            margin-top: auto;
            
            text-align: center;
            padding: 20px 0;
        }
        .full-height-container {
            min-height: 79vh;
        }
    </style>
    <script>
        
import { Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Ripple });
    </script>
</head>
<body>
      
    <div class="navbar-container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                {{-- <a class="navbar-brand" href="#">ShowcaseMe</a> --}}
              </div>
              <ul class="nav navbar-nav">
                
                  
                    
              </ul>
              <ul class="nav navbar-nav navbar-right" style="margin-left: 75%;">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> User_name</span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          
    </div>
    <div class="container full-height-container">
        <div class="form-container">
            <!-- Form content goes here -->
            @yield('content')
        </div>
    </div>
    
<!-- Bootstrap JS (optional, only needed if you use Bootstrap JS components) -->
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
<div class="footer container">
    <footer class="text-center">
        <!-- Grid container -->
        
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-5 icon-black">
          © 2020 Copyright:
          <a class="text-body" href="">IamBot</a>
        </div>
        <!-- Copyright -->
      </footer>
</div>
</body>
</html>
