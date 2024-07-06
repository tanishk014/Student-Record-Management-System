 
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
    
 
    
     
  
    $t_password=$_POST['password'];


    $sql2="UPDATE user SET  password='$t_password' WHERE username='$name' ";

    $result2=mysqli_query($data,$sql2);
 
 
if($result)
{
    echo "<script type='text/javascript' >
    alert('Your Password is Updated Successfully');
    </script>";
}

else
{
   echo "Upload Failed";
}
}

 



?>


 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <title>student Dashboard</title>
 
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
    border-radius: 6em;
}

.teacher
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

 
</style>
 



    </head>
<body>

 <?php 
 
 include 'student_sidebar.php'
 
 
 ?>


<div class="content">

<center> 
<h1 class="teacher">Change Password</h1>
<br><br>

 <form action="#" method="POST">

 <div class="div_deg">

  
 
    
    <div>
        <label> Old Password</label>
        <input type="text" name="password" value="<?php  echo"{$info['password']}" ?>">
    </div>

    <div>
        <label> New Password</label>
        <input type="text" name="password" placeholder="Enter Your New Password Here" required>
    </div>


    <div>
         
        <input type="submit" class="btn btn-sucess" name="update_profile" value="Update Password">
    </div>

    </div>
 </form>
 </center>
</div>



</body>
</html>

