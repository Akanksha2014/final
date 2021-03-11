<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ootd');
$username=$_POST['username'];
$password=$_POST['password'];
$s="SELECT * FROM `reg` WHERE username='$username' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    echo"<script>
    alert('Login Successful');
    window.location.href='index.php';
    </script>";
}
else{
    echo"<script>
    alert('Wrong Username or Password ');
    window.location.href='account.php';
    </script>";
}
?>