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


?>



<!DOCTYPE html>
<html>
    <head>
      <style>
 

 .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .card {
      background-color: palevioletred;
      border-radius: 1em 2em ;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 10px;
      padding: 20px;
      flex: 1;
      min-width: 300px;
      color: white;
    }

    .card2 {
      background-color:paleturquoise;
      border-radius: 1em 2em ;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 10px;
      padding: 20px;
      flex: 1;
      min-width: 300px;
      color: white;
    }


    @media (max-width: 600px) { 
      .container {
        flex-direction: column;
      }
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

 include'admin_sidebar.php';

?>

  
<center> 
 <div class="container">
<h1>Admin Dashboard</h1>
 
<!---First card section--->
<div class="container">
    <div class="card">
      <h2>Admissions</h2>
      <a href="">Click here to see Admission</a>
       
</div>

    <div class="card">
      <h2>Students</h2>
      <a href="">Click here to see Students</a>
    </div>

    <div class="card">
      <h2>Attendance</h2> 
      <a href="">Click here to see Attendance</a>
    </div>
<!---second card section--->
    <div class="card2">
      <h2>Subjects</h2> 
      <a href="">Click here to see Subjects</a>
    </div>

    
    <div class="card2">
      <h2>Courses</h2> 
      <a href="">Click here to see Courses</a>
    </div>


    
    <div class="card2">
      <h2>Sections</h2> 
      <a href="">Click here to see Sections</a>
    </div>


  </div>
  </center>


</div>
</body>
</html>
