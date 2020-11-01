<?php
session_start();
include 'dbConnection.php';
if(isset($_SESSION['email'])){

}else{
    if(isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $linked=htmlentities($_POST['linked'],ENT_QUOTES);
        $pwd=$_POST['pwd'];
        $dob=$_POST['dob'];

        $qry="insert into emp(name,email,linkedin,password,date) values('$uname','$email','$linked','$pwd','$dob')";
        if(mysqli_query($conn,$qry)){
            echo "New record created successfully"; 
            $_SESSION['email']=$email;
            echo "<script> window.open('welcome.php','_self')</script>";
        }else {
            echo "Error: " . $qry . "<br>" . mysqli_error($conn);
          }    
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>   
  <body>
    <?php include'includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
            <form action="signup.php" method="post">
                <div class="form-group">
                    <label for="uname">Enter Your Name</label>
                    <input type="text" class="form-control" name="uname" aria-describedby="emailHelp" placeholder="Enter Your Name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>  
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email-Id">
                </div>
                <div class="form-group">
                    <label for="linked">LinkedIn Profile</label>
                    <input type="text" class="form-control" name="linked" placeholder="LinkedIn Profile">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input type="date" class="form-control" name="dob" placeholder="Date-of-Birth">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 