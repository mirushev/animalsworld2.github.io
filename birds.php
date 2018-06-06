<!DOCTYPE html>

<html>
<head>
<title> Birds </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="birds.css">
<style type="text/css">

    .sorting {
    font-size:1em;
    font:bold;
    margin-top:25em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;  
    }

    .numeric1 {
    font-size:1em;
    font:bold;
    margin-top:5em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;    
    }

    .numeric {
    font-size:1em;
    font:bold;
    margin-top:5em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;
    }
	
	 .eagle {
    font-size:1em;
    font:bold;
    margin-left: 60em;
	margin-top: 2em;
    float:left;
    width: 230px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;
	position: absolute;
	padding: 0.5em ;
    }
	
	
	




</style>
<body>
<header>
<nav>
<div id='active'>
            <ul>
			<li ><a href='index.php'><span>Home</span></a></li>
            <li ><a href="mammals.php"><span>Mammals</span></a></li>
            <li ><a href="insects.php"><span>Insects</span></a></li>
            <li ><a href="birds.php"><span>Birds</span></a></li>
		    <li ><a href="seaanimals.php"><span>Sea Animals</span></a></li>
		    <li ><a href="reptiles.php"><span>Reptiles</span></a></li>
			<li ><a href="contacts.php"><span>Contacts</span></a></li>
            <li ><a href="login.php"><span>Log In</span></a></li>
            </ul>
			</div>
</nav>
</header>
<section>

<hr>
</section> 

<!--ANIMACIONI-->
			<div class="animacion2">
			<img src="images\eagle1.png" width=400 height=300> 
			</div>

<!--Artikujt-->
<article>
<div class="Birds">
			        <alt="birds"><h3>Eagle</h3>
                    <img src="images\Eagle.jpg" width=400 height=200> 
                    <p>
<!--Qasje ne Variabla me GLOBAL arrays-->
<?php
$x = 40;
$y = 20; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo 'When you think of eagles, you probably think of the bald eagle, a symbol of pride in America. Over '.$z.' species of eagles live on the earth and only two of them live in the United States. Most eagles live in Eurasia and Africa. Nine species live in Central and South America and three species are found in Australia. The bald eagle, loved for its majestic appearance and flight, was common in America three hundred years ago. By the 20th century, it had been hunted almost to extinction. The bald eagle has been protected since 1967 and is slowly making a comeback – good news for a beloved American bird.' ;
?>
                    </p>    
                    </div>
					
					
<div class="Birds">
			        <alt="birds"><h3>Ostriches</h3>
                    <img src="images\Ostriches.jpg" width=400 height=200> 
                    <p>
                    When you think of 
<?php
//PERDORIMI I PREG_REPLACE
echo preg_replace('/mammals: /', "", "birds");
?>, 
you probably think of the small, charming birds chirping in your backyard.
					The ostrich, though, is bigger than your dad! Ostriches are the largest birds. They can grow 9 feet 
					tall and weigh over 350 pounds. Ostriches live in the African savannah. They can’t fly, but they’re 
					fast runners. They can run up to 43 miles per hour for short periods. Most of the time, they run at 
					around 
 <!--Built-in math function-->
    <?php
    $number = 29.55776232;
    echo
        round($number) . "<br/>"; 
    ?> 
                    miles per hour. Ostriches eat seeds, plants and grain. They also munch on insects and small animals.
                    </p>    
                    </div>
					
<div class="Birds">
			        <alt="birds"><h3>Parrot</h3>
                    <img src="images\Parrot.jpg" width=400 height=200> 
                    <p> You probably recognize large talking parrots found in some pet stores as parrots, 
					but did you know parakeets, cockatiels and cockatoos are also types of parrots? There 
					are over 
<!--Variabla superglobale $_SESSION-->
<?php

session_start();

$_SESSION['test'] = 350;
$test = 43;
echo $_SESSION['test'];

?>
                    kinds of parrots and they all live in warm places.Parrots live in rainforests 
					and woodlands in Africa, Australia, Asia, Central America, and South America. Parrots have 
					a special talent –they can imitate human speech. They’re not talking to communicate, but they 
					can say words and even sing.

                    </p>  
                    </div>
</article>

			
					<aside>
<!--Sort-->
				
<div class="sorting">
<?php

echo "<h4>&bullet; 5 Of The Coolest Birds In The World</h4><br>";
$coolest = array("- The Rainbow Lorikeet", "- The Golden Pheasant", "- The Quetzal", "- The Hoopoe","- The Bali Bird of Paradise");
rsort($coolest); //nese kodojme vetem sort atehere behet sortimi sipas radhes alfabetike

$clength = count($coolest);
for($x = 0; $x < $clength; $x++) {
    echo $coolest[$x];
    echo "<br>";
}
?>
</div> 


<!--Numeric (Indexed) Arrays--> 
<span class ="numeric1">
<?php
$variabla="Extinct";
$birds = array("<br>- Giant ibis", "<br>- California condor", "<br>- Kakapo", "<br>- Kagu", "<br>- Bengal florican"); 
echo "<h4>&bullet; 5 Birds In Danger Of Becoming $variabla</h4>" . $birds[0] . ", " . $birds[1] . ", " .$birds[2] . ", " .$birds[3] . ", " . $birds[4] . ".";
?>
</span> 


 
<div class="numeric">


<?php    
$i = 5; 
DO { 
  print "<h4>&bullet; " . $i . " Birds That Are Now Extinct </h4><br>"; 
  $i--; 
} WHILE ($i > 8);

         $numbers[0] = "- Dodo";
         $numbers[1] = "- Tasmanian Emu";
         $numbers[2] = "- Carolina Parakeet";
         $numbers[3] = "- Arabian Ostrich";
         $numbers[4] = "- Bachman's Warbler";
         
         foreach( $numbers as $value ) {
            echo "$value<br />";
         }
?>
</div>

</aside>

<!--Get and Set--> 

<div class="eagle">
<?php 

class eagle
{
private $length;


public function setlength($length)
{
if ($length > 200)
{
$this->length= $length;
}
}

public function getLenght()
{
echo "The length of an eagle's open wings is: " . $this->length . " cm";
}

}

$eagle1= new eagle;

$eagle1->setLength(220);

$eagle1->getLenght();

?>
</div>




				
</body>

</html>