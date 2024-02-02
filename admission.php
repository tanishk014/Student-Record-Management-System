 
 <?php


session_start();

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

$sql=" SELECT * from admission";

$result=mysqli_query($data,$sql);


?>



<!DOCTYPE html>
<html>
    <head>
      <style>

.table_td
{
    padding: 20px;
    background-color: skyblue;
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
        </style>
        <meta charset="utf-8">
         <title>Admin Dashboard</title>

          <?php

            include 'admin_css.php';

           ?>

    </head>
<body>

           <?php

              include 'admin_sidebar.php';

            ?>


 <div class="content">
    <center>
      <h1 class="main-title">Applied For Admission</h1>
 <br><br>

      <table border="1px">
         <tr > 
            <th    style="padding: 20px; font-size: 15px;">Name</th>
            <th   style="padding: 20px; font-size: 15px;">Email</th>
            <th    style="padding: 20px; font-size: 15px;">Course</th>
            <th    style="padding: 20px; font-size: 15px;">Class</th>
            <th    style="padding: 20px; font-size: 15px;">Phone</th>
            <th    style="padding: 20px; font-size: 15px;">Password</th>
            <th    style="padding: 20px; font-size: 15px;">Add Student</th>
        </tr>

        <?php
         while($info=$result->fetch_assoc())

         {
        ?>


        <tr>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['name']}"; ?> </td>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['email']}"; ?> </td>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['course']}"; ?> </td>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['class']}"; ?> </td>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['phone']}"; ?> </td>
            <td class="table_td" style="padding: 20px;">   <?php echo "{$info['password']}"; ?> </td>
            <td class="table_td"> <?php  echo"<a  class='btn btn-primary' href='add_student.php?student_id={$info['id']}'>Add Student</a>"; ?>
</td>

        </tr>

          <?php
         }
           ?>

      </table>


</center>
 </div>


</body>
</html>

