<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
    <link rel="stylesheet" type="text/css" href = "style.css">
    <script src="js/sc.js"></script>
</head>
<body>

    <center>
      <div class="header">
        <h2>Log in</h2>
      </div>
    <div class ="form">
    <form  action = "process.php" method="POST">
    <p>
     <label>Username</label>
     <input type="text" name="user" id="user"/>
     <p>
     <?php
      if (isset($password_error)) {
       echo $name_error;
      }
      ?>
    </p>
      <label id="userlabel" style="color: red; visibility: hidden;">Invalid</label>
     </p>
    <p>
     <label>Password</label>
     <input type="password" name="pass" id="pass"/>
     <p>
     <?php
      if (isset($password_error)) {
       echo $password_error;
      }
      ?>
    </p>
       <label id="passlabel" style="color: red; visibility: hidden;">Username</label>
     </p>
     <input type="submit"  name="login" id="btn" value="login"/>
     <p>
     Already have an account? <a href="signup.php">Sign Up</a>
   </p>
     </form>
     </center>
    </div>
</body>
</html>
