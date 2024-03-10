<?php
session_start();
include ("demo.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $firstname = $_POST['firstname'];
  //$middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
 // $email = $_POST['email'];
  $Username =$_POST['Username'];
  $passward = $_POST['passward'];
  $confirmpassward = $_POST['confirmpassward'];
  if(!empty($Username) && !empty($passward) && !empty($confirmpassward) && ($passward == $confirmpassward))
  {
    $query = "INSERT INTO login (firstname, lastname,Username,passward, confirmpassward) VALUES ('$firstname', '$lastname','$Username','$passward', '$confirmpassward')";
    mysqli_query($conn, $query);
    echo"<script type='text/javascript'> alert('Successfully Register')</script>";

  }
    else if($passward !== $confirmpassward){
     echo "<script type='text/javascript'> alert('The Confirmpassward you entered is not valid plzz try again later')</script>";
    }
//   if(!empty($Username) && !empty($passward) && !empty($confirmpassward)){
//     echo"<script type='text/javascript'> alert('Successfully Register')</script>";
    else{
        echo "<script type='text/javascript'> alert('Enter The Valid Data')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="signup.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>
    <div class="signup">
        <form method="POST">
        <h1>Sign Up</h1>
    <div class="input-item-box">
        <input type="first" placeholder="" name="firstname" required>
        <label> Firstname</label>
    </div><br>
    <!-- <div class="input-item-box">
        <input type="text" placeholder="Middle Name*" name="middlename">
    </div><br> -->
    <div class="input-item-box">
        <input type="last" placeholder="" name="lastname" required>
        <label> lastname</label>
    </div><br>
    <!-- <div class="input-item-box">
        <input type="text" placeholder="Email*"  name="email">
    </div><br> -->
    <div class="input-item-box">
        <input type="username" placeholder=""  name="Username" required>
        <label> Username</label>
    </div><br>
    <div class="input-item-box">
        <input type="pass" placeholder="" name="passward" required>
        <label> Passward</label>
    </div><br>
    <div class="input-item-box">
        <input type="conpass" placeholder="" name="confirmpassward" required> 

        <label>Confirm passward</label>
    </div>
    <div class=" remember-Forgot">
        <!-- <label><input type="checkbox">Remember me</label> -->
        <p>Already Sign up?
        <a href="login.php">Login</a></p>
    </div>

    <button type="submit" class="btn">Submit</button>
    </form>
</div>

    

</body>
</html>