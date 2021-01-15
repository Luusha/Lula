<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link rel="stylesheet" type="text/css" href = "style.css">
</head>
<body>

    <center>
      <div class="header">
        <h2>Sign up</h2>
      </div>
    <div class ="form">
    <form action = "register.php" method="POST">
    <p>
     <label>Username</label>
     <input type="text" name="user" id="user" required/>
     <p>
       <?php
         if (isset($name_error)) {
           echo $name_error;
         }
        ?>
     </p>
   </p>
     <p>
      <label>Email</label>
      <input type="text" name="email" id="email" required />
      <p>
        <?php
          if (isset($email_error)) {
            echo $email_error;
          }
         ?>
      </p>
      </p>
    <p>
     <label>Password</label>
     <input type="password" name="pass" id="pass" required/>
     <p>
       <?php
         if (isset($password_error)) {
           echo $password_error;
         }
        ?>
     </p>
     </p>
     <label>Confirm Password</label>
     <input type="password" name="cpass" id="cpass" required/>
     <p>
       <?php
         if (isset($cpassword_error)) {
           echo $cpassword_error;
         }
        ?>
     </p>
     </p>
     <input type="submit" id="btn" value="Sign up"/>
     <p>
       Have an account?
   <a href="login.php">Login</a>
   </p>
     </form>
     </center>
    </div>
</body>
</html>
