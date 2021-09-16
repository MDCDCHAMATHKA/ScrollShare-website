<?php

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'user_registration');

$email=$_POST['email'];
$password=$_POST['password'];

$s= "SELECT * FROM registration where  Email='$email' && Password='$password'";

$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['email']=$name;
  header('location: Home.html');
}
else{
    header('location: login.html');
}
?>