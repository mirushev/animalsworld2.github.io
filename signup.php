<!DOCTYPE html>

<html>
<head>
<title> Sign Up </title>
<meta charset="utf-8">

</head>
<link rel="stylesheet" href="signup.css">

<!--jQuery Events-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script> 
<script src="jquery-3.2.1.min.js"></script> 
<script>
$(document).ready(function() {


$("input").focus(function() {
$(this).css("background-color", " #ffffff"); 
});


$("input").blur(function() {
$(this).css("background-color", "#ffcc66"); 
});   

});
</script>



<body>
<header>
<nav>
<div id='active'>
            <ul>
			<li><a href='index.php'><span>Home</span></a></li>
            <li><a href="mammals.php"><span>Mammals</span></a></li>
            <li><a href="insects.php"><span>Insects</span></a></li>
            <li><a href="birds.php"><span>Birds</span></a></li>
		    <li><a href="seaanimals.php"><span>Sea Animals</span></a></li>
		    <li><a href="reptiles.php"><span>Reptiles</span></a></li>
			<li><a href="contacts.php"><span>Contacts</span></a></li>
            <li><a href="login.php">Log In</a></li>
            </ul>
			</div>
</nav>
</header>
<hr>



<div id="signup">

	<form action='connectSignup.php' method='post'>
            <h1><u>Sign Up</u></h1>

			<p>First Name</br>
            <input type="text" name='firstname' placeholder="First Name" class="ngjyra" required="required">

			<p>Last Name</br>
            <input type="text" name="lastname" placeholder="Last Name" class="ngjyra" required="required">

            <p>Username</br>
            <input type="text" name="username" placeholder="Username" class="ngjyra" required="required">
			
			<p>Password</br>
			<input type="password" name="password" placeholder="Password" class="ngjyra" required="required">

			<p>Confirm Password</br>
			<input type="password" name="confirmpassword" placeholder="Confirm Password" class="ngjyra" required="required">
			
			<p>Country</br>
			<input type="text" name="country" placeholder="Country" class="ngjyra" required="required">	

			<p>City</br>
			<input type="text" name="city" placeholder="City" class="ngjyra" required="required">

			<p><small><a href="login.php">Log In</a> here!</small></p>
					
            <br><button type="submit" value="submit">Sign Up</button></br>
		
</form>			
</div>
</body>
</html>