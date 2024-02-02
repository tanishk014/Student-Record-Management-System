<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
$message=$_SESSION['message'];

echo "<script type='text/javascript'>  

alert('$message');

</script>";

}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM teacher";

$result=mysqli_query($data, $sql);

?>




<!DOCKTYPE html>
<html>
<head>
<meta charset="utf-8">
   <title>Student Record Management System</title>
   <style>

    
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('homepage3.jpg') center/cover no-repeat;
        }

        
        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
          font-size: 25px;
        }

        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .buttons {
            margin-top: 20px;
            color:black;
        }

        .buttons button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            cursor: pointer;
            background-color: greenyellow;
        }

        .contact button{
            background-color:black;
            color: white;
        }
        
        main {
            margin: 20px;
            text-align: center;
            color: #333;
        }

        .logo
{
    font-size: 35px;
    position: center; 
    left: 5%;
    color: black;
    font-weight: bold;
    line-height: 70px;
}

nav
{
    position: fixed;
    background-color: #938c00;
    height: 70px;
    width: 100%;
    z-index: 1;
}




   .div_deg
{
    background-color:#219d9d;
 width: 1000px;
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

.input_deg
{
    width: 10%;
    height: 70px;
    border-radius: 25px;
    border: 1px solid black;
}

.maintitle_deg
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

.btn
{
width: 100%;
height: 45px;
background: white;
border: black;
outline:none ;
border-radius: 6px;
cursor: pointer;
font-size: 1em;
color: black;
font-weight: 500;
}

 

</style>
        
       
       <link rel="stylesheet" type="text/css" href="style.css"
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>


<!--This is main header section-->
      <nav> 
       <center> <label class="logo">Student Record Management System </label></center>

        <main>
        <div class="container">
            <h2>Welcome to the Student Record Management System </h2>
            <p>This is the homepage of the Student Record Management System.</p>
            <div class="buttons">
                <button onclick="location.href='login.php'">Login</button>
                <button onclick="location.href='register.php'">Register</button>
             
            </div>
        </div>
    </main>
       </nav> 


        
<!--This is footer section-->
<footer>
&copy; 2023 Student Record Management System
</footer>

</body>
</html>



