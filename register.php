<?php

$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,'test');

$username =mysqli_real_escape_string($con,$_POST['user']);
$password = mysqli_real_escape_string($con,$_POST['pass']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$confirmpass = mysqli_real_escape_string($con,$_POST['cpass']);

if ($password==($confirmpass)) {
  $sql = "INSERT INTO users(Username,Email,Password) VALUES ('$username','$email','$password')";
  if ($con->query($sql)===TRUE) {

    echo "<script>alert('Values have been inserted')</script>";
    include('login.php');
  }
  else {
    echo "<script>alert('Values did not insert')</script>";
  }

}
else {
    echo "<script>alert('The password does not match')</script>";
    include('signup.php');
}



?>
