<?php
$username = "example_user";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Forgot.css">
</head>
<body>
    <!-- <h2>Bhai Passward Ka Screenshot Hoga dekh le?</h2> -->
    <div class="wrapper2">
        <form action="newforgot.php"method="GET">
        <h4>FORGET PASSWORD</h4>
        <div class="input-text">
            
            <input type="text" name="username" required>
            <label> Enter your Username</label>
            
        
        </div>
        <!-- <div class="input-text">
      
            <input type="text" placeholder="New Passward" required>
        </div>
        <div class="input-text">
        
            <input type="text" placeholder="Confirm Passward" required>
        </div> -->
        <br>
        <div class="button">
            
               <a href="newforgot.php" class="button1">Next</a>
            
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
    </form>
    </div>
</body>
</html>