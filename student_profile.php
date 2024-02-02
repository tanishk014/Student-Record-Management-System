 
<?php

session_start();

if(!isset($_SESSION['username']))
{
 header("location:login.php");
}


elseif($_SESSION['usertype']=='admin')
{
    
    header("location:login.php");

}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";


$data=mysqli_connect($host,$user,$password,$db);

$name=$_SESSION['username'];

$sql="SELECT * FROM user WHERE username='$name' ";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);


if(isset($_POST['update_profile']))

{
    $s_name=$_POST['username'];
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_course=$_POST['course'];
    $s_class=$_POST['class'];
    $s_roll=$_POST['roll'];
    
    $s_password=$_POST['password'];


    $sql2="UPDATE user SET username='$s_name',email='$s_email', phone='$s_phone',course='$s_course',class='$s_class', roll='$s_roll', password='$s_password' WHERE username='$name' ";

    $result2=mysqli_query($data,$sql2);

if($result2)
{
   header('location:student_profile.php');
}
    

}



?>


 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <title>Student Dashboard</title>
 
         <?php 
 
 include 'student_css.php'
 
 
 ?>


<style type="text/css">

label
{
    display: inline-block;
    text-align: right;
    width: 100px;
   padding-top: 10px;
   padding-bottom: 10px;
}


.div_deg
{
    background-color: skyblue;
    width: 500px;
    padding-top: 70px;
    padding-bottom: 70px;
    border-radius: 10em;
}

.main-title
{

  background-color:#eb185b;
    color: white;
    text-align: center;
    font-weight: bold;
    width: 400px; 
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
    border-radius: 6em;
}

.fees
{
    background-color: cadetblue;
    
}

</style>
 



    </head>
<body>

 <?php 
 
 include 'student_sidebar.php'
 
 
 ?>


<div class="content">

<center> 
<h1 class="main-title"  >Student Profile</h1>
<br><br>

 <form action="#" method="POST">

 <div class="div_deg">

  

 <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php  echo"{$info['username']}" ?>">
    </div>
    
    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php  echo"{$info['email']}" ?>">
    </div>

    
    <div>
        <label>Phone</label>
        <input type="numbers" name="phone" value="<?php  echo"{$info['phone']}" ?>">
    </div>


    <div>
        <label>Course</label>
        <input type="text" name="class" value="<?php  echo"{$info['course']}" ?>">
    </div>

    <div>
        <label>Class</label>
        <input type="numbers" name="class" value="<?php  echo"{$info['class']}" ?>">
    </div>

    <div>
        <label>Roll No</label>
        <input type="numbers" name="roll" value="<?php  echo"{$info['roll']}" ?>">
    </div>

   
    <div>
        <label>Password</label>
        <input type="text" name="password" value="<?php  echo"{$info['password']}" ?>">
    </div>

    <div>
         
        <input type="submit" class="btn btn-primary" name="update_profile" value="Update profile">
    </div>

    </div>
 </form>
 </center>
</div>



</body>
</html>

