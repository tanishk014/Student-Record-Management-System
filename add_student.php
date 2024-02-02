 
<?php


session_start();
error_reporting(0);

if(!isset($_SESSION['username']))
{
 header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
    
    header("location:login.php");

}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT * FROM admission WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result-> fetch_assoc();


if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_course=$_POST['course'];
    $user_class=$_POST['class'];
    $user_roll=$_POST['roll'];
    $user_fees=$_POST['fees'];
    $user_password=$_POST['password'];
    $usertype="student";
    



    $check="SELECT * FROM admission WHERE name='$name'";

    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {   
        
        echo "<script type='text/javascript' >
        alert(' Username Already Exist.Try Another one');
        </script>";

    }

    else
    {

    

    $sql="INSERT INTO user(username,email,phone,course,class,roll,fees,usertype,password) VALUES ('$username','$user_email','$user_phone','$user_course', '$user_class','$user_roll','$user_fees','$usertype','$user_password')";
   
    $result=mysqli_query($data,$sql);


    if($result)
    {
        echo "<script type='text/javascript' >
        alert('Data Upload Success');
        </script>";
    }
    
    else
    {
       echo "Upload Failed";
    }
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
         <title>Admin Dashboard</title>

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
        width: 400px;
        padding-top: 70px;
        padding-bottom: 70px;
      }

.label_text
{

    display: inline-block;
    width: 100px;
    text-align: right;
    padding-right: 10px;
}

 
.adm_int
{
    background-color: skyblue;
    padding-top: 10px;

}


</style>



         <?php

           include 'admin_css.php';

          ?>

    </head>
<body>

<?php

 include'admin_sidebar.php';

?>

  

 <div class="content">

 <center> 
<h1>Add Student</h1>
 
        <div class="div_deg">

          <form action="#" method="POST">

          <div>
          <label>Username</label>
          <input type="text" name="name"  value="<?php  echo "{$info['name']}"; ?>" required>
          </div>

          <div>
          <label> Email</label>
          <input type="email" name="email"  value="<?php  echo "{$info['email']}"; ?>" required>
          </div>

          <div>
          <label>Phone</label>
          <input type="numbers" name="phone" value="<?php  echo "{$info['phone']}"; ?>" required>
          </div>
           
          <div>
		    <label>Course</label>
		    <input type="text" name="course"  value="<?php  echo "{$info['course']}"; ?>" required>
	  	</div>
             

            
          <div class="adm_int">
		    <label  >Class</label>
		    <input type="numbers" name="class"  value="<?php  echo "{$info['class']}"; ?>" required>
	  	</div>


          <div>
          <label>Roll.No</label>
          <input type="numbers" name="roll"  value="<?php  echo "{$info['roll']}"; ?>" placeholder="Create Student Roll No" required>
          </div>

   <div>
          <label>Add Student Fee</label>
          <input type="text" name="fees"  required>
          </div>


          <div>
          <label>Password</label>
          <input type="text" name="password"   value="<?php  echo "{$info['password']}"; ?>"required>
          </div>

          <div>
          
          <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
          </div>
              
              </form>


           </div>

           </center>
 </div>


</body>
</html>
