<?php
include("demo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newforgot.css">
</head>
<body>
    <!-- <h2>Bhai Passward Ka Screenshot Hoga dekh le?</h2> -->
    <div class="wrapper2">
        <form method="POST">
        <h4>FORGET PASSWORD</h4>
        <div class="input-text">
            
            <input type="text" name="pass" required>
            <label> New Passward</label>
            
        
        </div>
        <div class="input-text">
            
            <input type="text" name="passward" required>
            <label>Confirm Passward</label>
            
        
        </div>
        <!-- <div class="input-text">
      
            <input type="text" placeholder="New Passward" required>
        </div>
        <div class="input-text">
        
            <input type="text" placeholder="Confirm Passward" required>
        </div> -->
        <br>
        <div class="button">
            <button class="btn" name="submit">Reset</button>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
          <div class="register-link">
         <a href="#">Want to Try with Other option?</a>
          </div>
    </form>
    </div>
    <?php
if(isset($_POST['submit'])){
    if(mysqli_query($conn,"UPDATE login SET passward='$_POST[passward]' WHERE username='$_POST[pass]'")){
        if(!empty($passward)){
            echo "<script type='text/javascript'> alert('Updated')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Try Again')</script>";
        }
    }
    if(mysqli_query($conn,"UPDATE login SET confirmpassward='$_POST[passward]' WHERE username='$_POST[pass]'")){
        // if(!empty($passward)){
        //     echo "<script type='text/javascript'> alert('Updated')</script>";
        // }
        // else{
        //     echo "<script type='text/javascript'> alert('Try Again')</script>";
        // }
    }
}
?>
</body>
</html>