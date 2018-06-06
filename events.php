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
.tabela {
    margin: 50px 50px 50px 50px;
    width: 80%;
    overflow: hidden;
    background-color:rgba(255, 255, 255, 0.4);
    color: #024457;
    border: 3px solid 	#008B8B;
}
.tabela tr {
	
    border: 1px solid		#008B8B;
}
.tabela tr:hover{
    background-color:	#008B8B;
    color: white;
}
.tabela th {
    display: none;
    background-color:	#008B8B;
    color: #FFF;
height:30px;
 
}
.tabela td {
    display: block;
    word-wrap: break-word;
    
}
@media (min-width: 480px) {
    .tabela td {
        border: 1px solid 	#008B8B;
    }
}
.tabela th, .tabela td {
    text-align: center;
    margin: .5em 1em;
}
@media (min-width: 480px) {
    .tabela th, .tabela td {
        display: table-cell;
       
    }
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
<table class="tabela" cellspacing="2" cellpadding="16">

        <tr>
            <th>Name of the event</th>
            <th>Location</th>
            <th>Date</th>
            <th>Hour</th>
            <th>Number of participants</th>
            <th>Telephone</th>
            <th>Price</th>
        </tr>

        <tr>
            <td>Bears Park Visit</td>
            <td>Prishtina</td>
            <td>11/06/2018</td>
            <td>11:00</td>
            <td>54</td>
            <td>044-123-456</td>
            <td>3</td>
        </tr>

        <tr>
            <td>Zoo Visit</td>
            <td>Prizren</td>
            <td>13/06/2018</td>
            <td>10:00</td>
            <td>60</td>
            <td>044-178-903</td>
            <td>5</td>
        </tr>

        <tr>
            <td>Animal Adopting Kosova</td>
            <td>Podujeve</td>
            <td>15/06/2018</td>
            <td>12:00</td>
            <td>70</td>
            <td>044-678-432</td>
            <td>5</td>
        </tr>

        <tr>
            <td>Zoo Visit</td>
            <td>Peje</td>
            <td>16/06/2018</td>
            <td>10:00</td>
            <td>46</td>
            <td>044-178-903</td>
            <td>5</td>
        </tr>

        <tr>
            <td>Veterinary Day</td>
            <td>Prishtine</td>
            <td>20/06/2018</td>
            <td>09:30</td>
            <td>73</td>
            <td>044-123-678</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Zoo Visit</td>
            <td>Rahovec</td>
            <td>21/06/2018</td>
            <td>13:30</td>
            <td>67</td>
            <td>044-178-903</td>
            <td>5</td>
        </tr>
    </table>
                    
</body>

</html>