<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'ootd');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$s="SELECT * FROM `reg` WHERE username='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    echo"<script>
    alert('Username Already Taken ');
    window.location.href='account.php';
    </script>";
}
else{
    $re="INSERT INTO `reg`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
    mysqli_query($con,$re);
    echo"<script>
    alert('Registration successful ');
    window.location.href='account.php';
    </script>";
}
?>