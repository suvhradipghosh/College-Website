<?php
if(isset($_POST['email']))
{

$email=$_POST['email'];


$password=$_POST['psw'];

$cp=$_POST['cpwd'];


$a=mysqli_connect("localhost","root","","login");

$ins="INSERT INTO login SET email='$email',password='$password',cp='$cp'";

$a->query($ins);

header("location:signup.php");

}
else
{
    echo "<h1>Access Denied</h1>";
}

?>