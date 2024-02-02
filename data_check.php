<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if($data==false)
{
die("connection error");

}


if(isset($_POST['apply']))
{
$data_name=$_POST['name'];
$data_email=$_POST['email'];
$data_course=$_POST['course'];
$data_class=$_POST['class'];
$data_phone=$_POST['phone'];
$data_password=$_POST['password'];

$sql="INSERT INTO admission(name,email,course,class,phone,password) VALUES('$data_name','$data_email','$data_course','$data_class','$data_phone','$data_password')";

$result=mysqli_query($data,$sql);

if($result)
{
    $_SESSION['message']="Your Application Submitted Successfuly";
    header("location:register.php");
}

else
{
echo"Apply Failed";
}

}


?>