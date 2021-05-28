<?php 
include("connect.php"); 
//include("validation.php"); 
error_reporting(0);
//if(isset($_POST['Register Now'])){
 // echo htmlspecialchars($_POST['UserName']);
  //echo htmlspecialchars($_POST['Email']);
  //echo htmlspecialchars($_POST['pass']);
  //echo htmlspecialchars($_POST['cpass']);
?>
<!DOCTYPE html>
<html lang ="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/bootstrap.css">
     <style>
body {
  background-image: url('wh_1.jpg');
}
</style>
     <title>CSE Aspirants</title>
</head>
<!--<body style="background:#CCC">-->
     <!-- <h2 class="display-4">We are working in Php</h2> -->
     <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="register.php"><strong><mark>Registration</mark></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/LoginPro/index2.php"><mark><strong>Back To Home Page</strong></mark></a>
      </li>
   <!-- <li class="nav-item">
        <a class="nav-link" href="http://localhost/LoginPro/index2.php#modules"><mark>Modules</mark></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LoginPro/index2.php#you%20tube%20channel"><mark>You Tube Channel</mark></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LoginPro/index2.php#our%20core%20team"><mark>Our Core Team</mark></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/LoginPro/index2.php#contact%20us"><mark>Contact Us</mark></a>
      </li></ul> -->
   <!--   <a href="register.php"><button class="btn btn-secondary btn-lg">Register</button></a> -->
      <!--<button type="button" class="btn btn-primary">Register</button>-->
      </div>
</nav>
  <!--  <nav class="navbar navbar-expand-sm navbar-light bg-light">
       <div class="container">
           <a href="index2.php"class="navbar navbar-brand"><h4><strong>CSE Aspirants</strong></h4></a>
           <ul class="navbar-nav mr-auto">
               <li class="nav-item"> 
                   <a href="http://localhost/LoginPro/index2.php" class="nav-link"><strong>Home</strong></a>
                </li>
               <li class="nav-item"> 
                     <a href="http://localhost/LoginPro/index2.php#modules" class="nav-link"><strong>Modules</strong></a>
                </li>
                <li class="nav-item"> 
                     <a href="http://localhost/LoginPro/index2.php#you%20tube%20channel" class="nav-link"><strong>You Tube Channel</strong></a>
                </li>
                <li class="nav-item"> 
                   <a href="http://localhost/LoginPro/index2.php#our%20core%20team" class="nav-link"><strong>Our Core Team</strong></centre></a>
                </li>
                
               <li class="nav-item"> 
                   <a href="http://localhost/LoginPro/index2.php#contact%20us" class="nav-link"><strong>Contact Us</strong></a>
                </li>
           </ul>
                <div class="btn-toolbar">-->
                 <!--   <a href="login.php"><button class="btn btn-danger mr-1">Login</button></a>   -->
                  <!--  <a href="register.php"><button class="btn btn-success">Register</button></a> -->
             <!--   </div>   
        </div>
    </nav> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5 py-2">
                    <div class="card-title">
                         <h2 class="text-center mt-2"> Registration Form </h2>
                         <hr>
                    </div>
                     <div class="card-body">
                     <!--   <p><span class="error">* required field</span></p> -->
                      <!--   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                         User Name: <input type="text" name="UserName" placeholder="User Name" class="form-control py-2 mb-2">
                         <span class="error">* <?php echo $UserNameErr;?></span>
                         <br><br>
                         Email: <input type="text" name="Email" placeholder="Email" class="form-control py-2 mb-2">
                         <span class="error">* <?php echo $EmailErr;?></span>
                         <br><br> 
                         Password: <input type="text" name="pass" placeholder="Password" class="form-control py-2 mb-2">
                         <span class="error">*<?php echo $passErr;?></span>
                         <br><br>
                         Confirm Password: <input type="text" name="cpass" placeholder="Confirm Password" class="form-control py-2 mb-2">
                         <span class="error">*<?php echo $cpassErr;?></span>
                         <br><br>
                         <input type="submit" name="submit" value="Submit">  
                         </form> -->
                         <!--<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">-->
                         <form> 
                         <input type="text" name="UserName" placeholder="User Name" class="form-control py-2 mb-2" required>
                         <input type="email" name="Email" placeholder="Email" class="form-control py-2 mb-2" required>
                         <input type="password" name="pass" placeholder="Password" class="form-control py-2 mb-2" required>
                         <input type="password" name="cpass" placeholder="Confirm Password" class="form-control py-2 mb-2" required>
                         <button class="btn btn-success float-right"> Submit </button>
                         </form>  
                         
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
<html> 
<?php
error_reporting(0);
$un = $_GET['UserName']; 
$em = $_GET['Email'];
$pa = $_GET['pass'];
$cp = $_GET['cpass'];
echo "$un";
echo "$em";
echo "$pa";
echo "$cp";
//$slquery = "SELECT 1 FROM registration WHERE email = '$email'";
//$selectresult = mysql_query($slquery);
//if(mysql_num_rows($selectresult)>0)
  //  {
    //     $msg = 'email already exists';
    //}
    //elseif($pa != $cp){
      //   $msg = "passwords doesn't match";
    //}
    
    $query = "INSERT INTO registration VALUES('$un','$em','$pa','$cp')";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        
        //echo "Data inserted into database";
    }      
else
{ 
echo "failed to insert data into database";
}
?> 


