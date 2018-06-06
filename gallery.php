<?php
if(isset($_COOKIE['emri']))
{}
else
{
	header("Location:login.php");
}
?>

<!DOCTYPE html>

<html>
<head>
<style>
header{
    width: 100%;
    height:253px;
    background:#06a4ac; 
	background: url(background.png);    
}
    
}
header nav{
    display: inline;
    position: relative;
    float: left;
    margin: 0.7em 0em 0 0;
}
header ul{
    list-style-type: none;
    margin:0em 0 ;
    padding:12em 0 0 0.2em;
	
}
header li{
   display: inline;
    padding: 0.5em 2em;
    font-family: sans-serif;
    font-weight: bold;
	border: solid 1px #ffffff;
	background-color: rgba(255, 255, 255, 0.3);
	
}
header li a{
    color: black;
    text-decoration:none;
	margin: 0.5em 0.5em;
	
}
header li a:hover{
    color:#99ff99;
}
header form{
    padding-top:0em;
    margin-bottom: 70em;
}
</style>
<title> User </title>
<meta charset="utf-8">
</head>
<style>
body {
	 background-repeat:no-repeat;
	 background-attachment: fixed;
}
</style>
<body background="test.jpg">
<header>
<nav>
<div id='active'>
            <ul>
	    <li ><a href="gallery.php"><span>Gallery</span></a></li>
            <li ><a href="events.php"><span>Events</span></a></li>
            <li ><a href="game.php"><span>Game</span></a></li>
            <li ><a href="logout.php"><span>Log Out</span></a></li>
            </ul>
			</div>
</header>
</nav>
<style>
.floating-box {
    float: left;
    margin-top: 1em;
	margin-left: 5em;
	margin-bottom: 3em;
	margin-right: 0;
	border: solid 3px #ffffff;
	background-color: rgba(255, 255, 255, 0.3);
	

}
p{
	
	margin-left: 13em;
	font-family: sans-serif;
    font-weight: bold;
	font-size: 50px;
	margin-top: 0;
	margin-bottom: 0;
	margin-right: 0;
	
	
	
}

</style>

<hr>
<p>Photos</p>
<hr>
<div class="floating-box"><img src="images\monkey.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\cow.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\crocodile1.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\rhino.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\cat1.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\dog1.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\elephant.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\lion1.jpg" width=400 height=300></div>
<div class="floating-box"><img src="images\horse1.jpg" width=400 height=300></div>

                    
</body>

</html>