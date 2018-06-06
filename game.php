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
.game {
    font-size:1em;
    font:bold;
    margin-top:2em;
    margin-left: 35%;
    padding-left: 20px;
    float:left;
    width: 400px;
    height: 500px;
    background-color:rgb(192, 192, 192,0.7);
    border-radius: 10px; 
margin-bottom:3em; 
    }
</style>
<title> User </title>
<meta charset="utf-8">
</head>

</style>
<body background="test.jpg">
<header>
<nav>
<div id='active'>
            <ul>
			<li ><a href='gallery.php'><span>Gallery</span></a></li>
            <li ><a href="events.php"><span>Events</span></a></li>
            <li ><a href="game.php"><span>Game</span></a></li>
            <li ><a href="logout.php"><span>Log Out</span></a></li>
            </ul>
			</div>
</header>
</nav>
<div class="game">
<?php
session_start();
$number1 = mt_rand(1,3);
$number2 = mt_rand(1,3);
$number3 = mt_rand(1,3);

//perdorimi i preg_match
$string ="Animals like lions, tigers, jaguars, sharks, and grizzly bears inspire plenty of fear. ";
if (preg_match ('/Animals/',$string)){
    echo "<pre><h2>  Animals Game<br></h2></pre>";
}
else{
    echo 'match not found';
}

echo '<img src="images/'.$number1.'.jpg" />';
echo '?  <img src="images/'.$number2.'.jpg" />';
echo '?  <img src="images/'.$number3.'.jpg" />';
if(!isset($_SESSION['currencies']) OR isset($_GET['restart']))
{
	$_SESSION['currencies'] = 1000;
}
if($_SESSION['currencies']>=100)
{
	if($number1==$number2 AND $number1==$number3)
	{
		echo "<br><pre>      You won!</pre><hr>";
		$_SESSION['currencies']=$_SESSION['currencies']*2;
	}
	else
	{
		$_SESSION['currencies']=$_SESSION['currencies']-100;
		echo "<br><pre>      You lost!</pre><hr>";
	}
}
else
{
	echo "<br><pre><i>     You lost!!!</i></pre>";	
}
echo "<br><br>My currencies are:".$_SESSION['currencies'];

echo '<br><a href="game.php">Play</a>';

echo '<br><br><br><a href="game.php?restart=1">Restart</a><br>';

echo "<hr><pre><h2>Rules</h2></pre><hr>";
echo "You click the play button.When all three images match it means you won!Otherwise you get the message You Lost!<br>";
echo " At the beggining your currencies will be 0.Each time you win the number of currencies will get doubled!While,each time you lose,you lose 100 of your currencies!<br>";
echo "If you want to continue the game from the beggining click Restart!";
	
?>
</div>
                    
</body>

</html>