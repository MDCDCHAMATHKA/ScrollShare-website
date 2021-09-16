<?php

session_start();
header('location: Login.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'user_registration');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$s= "SELECT * FROM registration where  Email='$email'";

$result= mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    
   echo "This email is already registered";

}
else{
    $reg="INSERT INTO registration(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
    mysqli_query($con,$reg);

    echo "Registration successful";
}
?>