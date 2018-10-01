

<!DOCTYPE html>

<?php

ini_set( "display_errors", 0);
?>



<html lang="en">
<head>



<?php
session_start();

$nameErr = $emailErr = $genderErr = $cityErr= $lastErr = " ";
$name = $email = $gender = $city = $lastName = "" ;
$_SESSION["flag"]=0;

if(isset($_POST['submit'])){

if(empty($_POST['FirstName']))
	{
	$nameErr = "Name is required";
	$_SESSION["flag"]=1;
	}
	
else {
	$name=$_POST['FirstName'];
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	$nameErr = "Only letters and white space allowed";
	$_SESSION["flag"]=1;
	}
}
if(empty($_POST['Email_ID']))
	{
	$emailErr = "Email is required";
	$_SESSION["flag"]=1;
	}
	
else 
	$email=$_POST['Email_ID'];

if(empty($_POST['LastName']))
	{
	$lastErr = "LastName is required";
	$_SESSION["flag"]=1;
	}
else 
	$lastName=$_POST['LastName'];

if(empty($_POST['gender']))
	{
	$genderErr = "Gender is required";
	$_SESSION["flag"]=1;
	}
else
	$gender=$_POST['gender'];


if(empty($_POST['City']))
	{
	 $cityErr = "city is required";
	 $_SESSION["flag"]=1;
	}
	
else
	$city=$_POST['City'];
	 


}



if(isset($_POST['submit']))
{
	
if($_SESSION["flag"]==0){

$FirstName = $_POST['FirstName'];

$LastName = $_POST['LastName'];

$Email_ID = $_POST['Email_ID'];



$Gender = $_POST['Gender'];

$DateOfBirth = $_POST['DateOfBirth'];

$Country = $_POST['Country'];

$BloodGroup = $_POST['BloodGroup'];


$Mobile = $_POST['Mobile'];

$City = $_POST['City'];

$MedicalHistory = $_POST['MedicalHistory'];    
    
    $abc="SELECT  Email_ID from information where Email_ID='$Email_ID' LIMIT 1";
    $check=mysqli_query($con,$abc);
	$match=mysqli_fetch_row($check);
    

   
            $data= "INSERT INTO information (FirstName,LastName,Email_ID,Gender,DateOfBirth,Country,BloodGroup,Mobile,MedicalHistory,City)VALUES('$FirstName','$LastName','$Email_ID','$Gender','$DateOfBirth','$Country','$BloodGroup',$Mobile,'$MedicalHistory','$City');";
            $result=mysqli_query($con,$data);
			
			
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			
            window.alert('You have registered successfully.')
			window.location.href='MainPage.php';
            </SCRIPT>");
			
       
session_unset();
session_destroy(); 
}
}	
	


?>

<style>


img.a{
	height:200px;
	width:130px;
	box-shadow: 0 0 20px #bbbbbb;
	
}



div.book1{
	position:absolute;
	animation: moving 32s linear -4s infinite;
	
}

div.book2{
	position:absolute;
	animation: moving 32s linear -8s infinite;
	
}

div.book3{
	position:absolute;
	animation: moving 32s linear -12s infinite;
	
}


div.book4{
	position:absolute;
	animation: moving 32s linear -16s infinite;
	
}


div.book5{
	position:absolute;
	animation: moving 32s linear -20s infinite;
	
}


div.book6{
	position:absolute;
	animation: moving 32s linear -24s infinite;
	
}


div.book7{
	position:absolute;
	animation: moving 32s linear -28s infinite;
	
}

div.book8{
	position:absolute;
	animation: moving 32s linear -32s infinite;
	
}


@keyframes moving{
    from {
		top:1550px;
		left: 0%}
    to {
		top:1550px;
		left: 100%}
}

img.mySlides{
	opacity: 0.5;
	width:100%;
	height:680px;
	margin-top:0px;
}

h4.heading {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 200px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 400px;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;

	
}

h4.content {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 50px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 900px;
	left: 450px;
	position: absolute;
	
}
h4.content3 {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 50px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 1350px;
	left: 200px;
	position: absolute;
	
}

h4.content2 {	
	font-family: 'CoreCircus', sans-serif;
	font-size: 20px;
	text-align: center;
	line-height: 2;
	margin: 0;
	top: 1050px;
	left: 20px;
	position: absolute;
	color: gray;
	
}

h4.content4 {	
	font-family: 'CoreCircus', sans-serif;
	font-size: 20px;
	line-height: 1.5;
	margin: 0;
	position: absolute;
	color: gray;
	
}

/* Set a style for all buttons */


/* Center the image and position the close button */

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



span.psw {
    float: right;
    padding-top: 16px;
}


.bac
{
	margin-top:-20px;
	
}

.footer_position

{
	position:absolute;
	top:3150px;
	width:100%
}
#myBtn {
position:absolute;
margin-left:45%;
  top:2850px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  padding: 15px;
  border-radius: 4px;
}

.error {color: #FF0000;}


</style>
  <title>theElixir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
 	</script>
 	<link rel="stylesheet" type="text/css" href="css/index.css">
 	<script type= "text/javascript" src = "js/countries.js"></script>
 	<script src="js/check.js"></script>
  
  
  
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Welcome to theElixir.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		
        
		
		
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		
		
		<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</a></li>-->
        
					<li>
					<a href="#" data-toggle="modal" data-target="#myModal">
						<span class="icon-tint">
						</span>
						LogIn
					</a>
		</li>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
	              				<div class="modal-header">
	              					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              						&times;
	              					</button>
	              					<h4 class="modal-title" id="myModal">
	              						Information
	              					</h4>
	              				</div>
	              				<div class="modal-body">
	              					<div class="container">
										<div class="row">
	  										<div class="col-sm-1 col-md-1 col-xs-3">
	  										</div>
											<div class="col-sm-4 col-md-4 col-xs-12">
												<center>
													<h1>
														Information											
													</h1>
												</center>
												<br>
												<br>
											<form name="signupform" id="signupform" method="POST" enctype="multipart/form-data" action=#>
			    	
  					<div class="form-group">
    					<label class="sr-only" for="Email_ID">Email ID:</label>
    					<input type="email"  class="form-control " placeholder="Enter Email ID" name="Email_ID" required >
						<span class="error">* <?php echo $emailErr;?></span>
  					</div>
    					<br>
  					
    					
    					
			    	<button type="submit" name="submit" class="btn btn-block btn-primary btn-lg" style = "background-color : red;">LogIn</button>
			    </form>	
		    									
	       						</div>
	       					</div>
	       				</div>
	       			</div>
					</div>
					</div>
					</div>
		
					<li>
						<a href="MainPage2.php"> 
							<span class="icon-tint">
							</span>
							Search for Patients
						</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="icon-tint">
							</span>
							Add Patient
						</a>
					</li>
					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
	              				<div class="modal-header">
	              					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              						&times;
	              					</button>
	              					<h4 class="modal-title" id="myModal">
	              						Information
	              					</h4>
	              				</div>
	              				<div class="modal-body">
	              					<div class="container">
										<div class="row">
	  										<div class="col-sm-1 col-md-1 col-xs-3">
	  										</div>
											<div class="col-sm-4 col-md-4 col-xs-12">
												<center>
													<h1>
														Information											
													</h1>
												</center>
												<br>
												<br>
											<form name="signupform" id="signupform" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			    	<div class="form-group">
    					<label class="sr-only" for="FirstName">Firstname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Firstname" name="FirstName" value="<?php echo $name?>">
						<span class="error">* <?php echo $nameErr;?></span>
  					</div>
    					<br>
						
  					<div class="form-group">
    					<label class="sr-only" for="LastName">Lastname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Lastname" name="LastName" value="<?php echo $LastName?>">
						<span class="error">* <?php echo $lastErr;?></span>
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="Email_ID">Email ID:</label>
    					<input type="email"  class="form-control " placeholder="Enter Email ID" name="Email_ID" value="<?php echo $email?>">
						<span class="error">* <?php echo $emailErr;?></span>
  					</div>
    					<br>
  					
    					
    					<br>
  						<label class="sr-only" for="Gender">Gender:</label>
  						<label class="radio-inline"><input type="radio" name="Gender" value="male">Female</label>
						<?php if (isset($gender) && $gender == "female") echo "checked=\"checked\""; ?> 
						<label class="radio-inline"><input type="radio" name="Gender" value="female">Male</label>
						<?php if (isset($gender) && $gender == "male") echo "checked"; ?>
						<label class="radio-inline"><input type="radio" name="Gender" value="other">Other</label>
						<br><br>
					<div class="form-group">
						<input type="text" name="DateOfBirth"  class="form-control  " placeholder="Enter your Date of Birth" 
						onfocus="(this.type='date')" onblur="(this.type='text')">
					</div>	
						<br>
					<div class="form-group">
						<select id="country" class="form-control  " placeholder="Enter your Country" name ="Country">
							<option value="" disabled selected hidden>Country</option>
						</select>
						<script language="javascript">populateCountries("country");</script>
					</div>
						
					<div class="form-group">
					<br>
						<label class="sr-only" for="Semester">Blood group:</label>
						<select class="form-control" placeholder="Blood group" name="BloodGroup">
						  <option value="" disabled selected hidden>Blood group</option>
						  <option value="A+">A+</option>
						  <option value="A-">A-</option>
						  <option value="B+">B+</option>
						  <option value="B-">B-</option>
						  <option value="AB+">AB+</option>
						  <option value="AB-">AB-</option>
						  <option value="O+">O+</option>  
						  <option vlaue="O-">O-</option>
						  <option vlaue="HH">HH</option>
						</select>
						</div>
							<br>
							<div class="form-group">
    					<label class="sr-only" for="FirstName">Medical History:</label>
    					<input type="text"  class="form-control " placeholder="Medical History" name="MedicalHistory">
  					</div>
    					<br>
						
						<div class="form-group">
    					<label class="sr-only" for="FirstName">City:</label>
    					<input type="text"  class="form-control " placeholder="City" name="City" value="<?php echo $city?>">
						<span class="error">* <?php echo $cityErr;?></span>
  					</div>
    					<br>
							
					<div class="form-group">	
			    		<input type="int" class="form-control  " placeholder="Enter Mobile Num" name="Mobile">
			    	</div>
			    		<br><br>
			    	<button type="submit" name="submit" class="btn btn-block btn-primary btn-lg" style = "background-color : red;">Send</button>
			    </form>	
		    									
	       						</div>
	       					</div>
	       				</div>
	       			</div>
					</div>
					</div>
					
					
					
					
					
						
		<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup</button>
</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<h4 class="heading" contenteditable data-heading="Piece of Cake">The Elixir</h4>

 <div class="bac">

  <img class="mySlides" src="one.jpg">
  <img class="mySlides" src="two.jpg">
  <img class="mySlides" src="three.jpg">
</div>




<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}


var h1 = document.querySelector("h1");

h1.addEventListener("input", function() {
  this.setAttribute("data-heading", this.innerText);
});




// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>



<center>

<h4 class="content" contenteditable data-heading="Piece of Cake">WELCOME TO THE ELIXIR </h4>



<h4 class="content2" contenteditable data-heading="Piece of Cake">The dedicated teams of doctors and nurses delivers the message of hope to their patients in the hospitals. All over the world, hospitals are built to treat and cure thousands of the sick patients. As these hospitals, there are very well-equipped facilities and expert doctors. These hospitals are considered the best places for effective treatment.

The doctors and nurses works effortlessly in doing their duties to the patients. The atmosphere in the hospitals should be pleasant so the the patient can feel comfortable.</h4>

</center>		




<div style="background-color:; height:650px; width:100%; top:1500px; position:absolute; text-align:justify">
<center><h1 style="font-family:Verdana,Helvetica,sans-serif"> Hospitals are one of the most important pillars of any society. They are the physical execution of one of the pillars that form the infrastructure of a nation: healthcare. 
</h1></center>

<div style="background-color:#FFFFFF; width:350px; height:450px; box-shadow: 0 0 20px #bbbbbb; top:140px; left:100px; position:absolute">
<center>
<img  src="images.jpg" style="height:150px; width:150px; top:30px; left:100px; position:absolute">
</center>
<h4 class="content4" contenteditable data-heading="Piece of Cake" style="top:220px; position:absolute;text-align:justify;padding:20px;text-transform:uppercase;">
An adequate number of hospitals in a country, with proper equipment and facilities, denote the kind of care and concern the government has for its citizens.</h4>
</div>

<div style="background-color:#FFFFFF; width:350px; height:450px; box-shadow: 0 0 20px #bbbbbb; top: 140px; left:550px; position:absolute">
<center>
<img  src="images.png" style="height:180px; width:180px; position:absolute; top:10px; left:80px">
</center>
<h4 class="content4" contenteditable data-heading="Piece of Cake" style="top:220px; position:absolute;text-align:justify;padding:20px;text-transform:uppercase;">
 Hospitals are equipped with medical equipment that aids in the diagnosis and treatment of the most serious patients. 
</h4>
</div>

<div style="background-color:#FFFFFF; width:350px; height:450px; box-shadow: 0 0 20px #bbbbbb; top:140px; left:1000px; position:absolute">
<center>
<img  src="images2.jpg" style="height:180px; width:180px; position:absolute; top:10px; left:80px">
 
</center>
<h4 class="content4" contenteditable data-heading="Piece of Cake" style="top:220px; position:absolute;text-align:justify;padding:20px;text-transform:uppercase;"> 
If there had been no hospitals, we would have to look for specialist doctors in their respective offices for our particular illness.
</h4>
</div>

</div>




</body>
</html>





