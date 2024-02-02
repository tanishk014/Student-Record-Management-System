
<html>
<head>
<meta charset="utf-8">
   <title>Student Admission Form</title>
   <style>

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
    width: 40%;
    height: 30px;
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
    
}
.register-link
    {
        background-color: white;
        font-size:medium;
        border-radius: 6em;
        padding-top: 10px;
        padding-bottom:10px ;
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
<nav> 
        <label class="logo">Student Record Management System </label>

        <ul>
          
          <li><a href="index.php" class="btn btn-success">Home</a> </li>
        </ul>
       </nav> 

 <br>
 <br>
 <br>

 <!--This admission form section-->
<div>  
  <center>
   
   <h1 class="maintitle_deg"> Student Admission Form </h1>
 


<div align=center class="div_deg">

          <Form action="data_check.php" method="POST" >
   
             <div class="adm_int"  >
                  <label  for="name" class="label_text">Name</label>
                  <input class="input_deg"  id="name" type="text" name="name" required>
             </div>
 
            <div class="adm_int" >
                  <label   for="email"  class="label_text">Email</label>
                  <input class="input_deg"  id="email"  type="text" name="email" required>
            </div>
 
 <div class="adm_int">
		    <label  for="course" class="label_text">Course</label>
		    <select name="course" class="input_deg" id="course" required>
		    	<option>Select</option>
		    	<option >Diploma</option>
		    	<option >Btech</option>
		    	<option >Be</option>
             <option >Mtech</option>
		    	<option  >Me</option>
             <option >MBA</option>
		    	 </select>
	  	</div>
             
             <div class="adm_int">
		    <label  for="class" class="label_text">Class</label>
		    <select name="class" class="input_deg" id="class" required>
		    	<option>Select</option>
		    	<option >Fy</option>
		    	<option >Sy</option>
		    	<option >Ty</option>
		    	 </select>
	  	</div>
 
             <div class="adm_int"  >
                  <label    for="phone"  class="label_text">Phone</label>
                  <input  class="input_deg" type="tel"   id="phone" pattern="[0-9]{10}" placeholder="Enter 10-digit phone number" name="phone" required>
             </div>
 
             <div class="adm_int"  >
                 <label    for="password" class="label_text">Create Password</label>
                 <input class="input_deg"   id="password"  name="password"  pattern=".{5,}" title="Password must be at least 5 characters" >
             </div>

             <div class="error" id="error-message"></div>

             <div class="adm_int">
          <input  class="btn btn-primary"  id="submit" type="submit" value="apply" name="apply"  onclick="validateForm()">
             </div>
<br>
             <div>
                    <label>  Already Have An Accound ?<a href="login.php" class="btn btn-primary">Login Here</a></label>
                 </div>
             </center>
</Form>
 
<script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");

            errorMessage.innerHTML = "";

            if (name === "" || email === "" || phone === "" || password === "") {
                errorMessage.innerHTML = "All fields are required";
                return;
            }

            // Email validation using a simple regex
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errorMessage.innerHTML = "Invalid email format";
                return;
            }

            // Phone number validation using a simple regex
            var phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(phone)) {
                errorMessage.innerHTML = "Invalid phone number format (10 digits)";
                return;
            }

            // Password validation (at least 8 characters)
            if (password.length < 5) {
                errorMessage.innerHTML = "Password must be at least 5 characters";
                return;
            }

            // If all validation passes, you can submit the form or perform further actions
            alert("Registration successful!");
        }
    </script>

</body>
</div>
</div>
