<!DOCTYPE html>
 <?php

 if(isset($_COOKIE['emri']))
{
     header("Location:gallery.php") ;
}


?>
<html>
<head>
<title> Log In </title>
<meta charset="utf-8">

</head>
<link rel="stylesheet" href="login.css">

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

<form action='connectLogin.php' method="post">

<div id="login">
            <h1><u>Please Log In to continue</u></h1>

			<p>Username</br>
            <input type="text" name='user' placeholder="Username" class="ngjyra" id="Username" required="required">

			<p>Password</br>
			<input type="password" name='pass' placeholder="Password" class="ngjyra" id="Password" required="required">	
			
			<p><small> Don't have an account? <a href="signup.php">Sign Up</a> </small></p>
					
            <br><button input type="submit" value="Log In" />Log In</button></br>
		
</form>			
</div>


</body>
</html>