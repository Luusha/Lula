<?php
session_start();
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,'test');

$username = $_POST['user'];
$password = $_POST['pass'];

if (empty($username)) {
$name_error ='Please enter your username';
}
if (empty($password)) {
$password_error ='Please enter your password';
}
if (empty($name_error) && empty($password_error)) {
  $result = mysqli_query($con,"select * from users where Username = '$username' and Password = '$password'")
           or die("Failed to query database".mysqli_error());
 $row = mysqli_fetch_array($result);
if ($row['Username']==$username && $row['Password']==$password) {
  $_SESSION['Username']=$username;
include('teams.php');
}
else {
    include('login.php');
    echo "<script>alert('Username or password is incorrect')</script>";
}

}

?>
