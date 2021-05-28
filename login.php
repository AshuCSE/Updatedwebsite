<!DOCTYPE html>
<html lang ="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap.css">
     <title>CSE Aspirants</title>
</head>
<body style="background:#CCC">
     <!-- <h2 class="display-4">We are working in Php</h2> -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
       <div class="container">
           <a href="index.php"class="navbar navbar-brand"><h3>CSE Aspirants</h3></a>
           <ul class="navbar-nav mr-auto">
               <li class="nav-item"> 
                   <a href="#" class="nav-link">Home </a>
                </li>
               <li class="nav-item"> 
                   <a href="#" class="nav-link">Modules</a>
                </li>
               <li class="nav-item"> 
                   <a href="#" class="nav-link">Contact Us</a>
                </li>
           </ul>
                <div class="btn-toolbar">
                    <a href="login.php"><button class="btn btn-danger mr-1">Login</button></a>   
                    <a href="register.php"><button class="btn btn-success">Register</button></a>
                </div>   
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5 py-2">
                    <div class="card-title">
                         <h2 class="text-center mt-2"> Login Form </h2>
                         <hr>
                    </div>
                      <div class="card-body">
                          <input type="email" name="UEmail" placeholder="User Email" class="form-control py-2 mb-2">
                          <input type="password" name="UPass" placeholder="Password" class="form-control py-2 mb-2">
                          <button class="btn btn-dark float-right"> Login </button>
                      </div>
                      <div class="card-footer">
                          <input type ="checkbox" name="remember"> <span> Remember Me </span>
                          <a href="forget.php" class="float-right">Forget Password </a>
                      </div>
                </div>
            </div>
        </div>
    </div> 

</body>
<html> 
