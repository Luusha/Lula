<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout page</title>
  </head>
  <body>


  </body>


  </html>
<?php
session_start();
session_unset();
session_destroy();
?>
 <p>You have been logged out. <a href="login.php">Login again.</a></p>

 
