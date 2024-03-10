<?php
session_start();
include ("demo.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(!empty($username) && !empty($password))
  {
    $query ="select * from login where username='$username' limit 1";
    $result = mysqli_query($conn, $query);
    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data=mysqli_fetch_assoc($result);
        if($user_data['passward']==$password)
        {
          header("location:index.php");
          die;
        }
      }
    }
    echo "<script type='text/javascript'>alert('wrong username or passward plzz correct it and try again')</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>     </head> -->

</head>
<body>
    <link href="back.css" rel="stylesheet" type="text/css">
     <div class="wrapper">
      <form method="POST">
        <h1>Login</h1>
        <div class="input-box">
          <input type="text" placeholder="" name="username" required>
          <label >Username</label>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password"
          placeholder="" name="password" required>
          <label >Passward
          </label>
          <i class='bx bxs-lock'></i>
        </div>
        <div class=" remember-Forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="Forgotpass.php">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <!-- <button href="cc.html" class="btn"> chetan</button> -->
        <!-- <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a> -->
        <!-- <a href="cc.html" class="btn" tabindex="-1" role="button" aria-disabled="true">Login</a> -->
        <div class="register-link">
          <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
      </form>

     </div>

    
</body>
</html>
