<!DOCTYPE html>

<html>
<head>
<title> Sea Animals </title>
<meta charset="utf-8">

</head>
<link rel="stylesheet" href="seaanimals.css">
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
<script> 
function changeimg(){
var currentTime = new Date().getHours();
if ( currentTime> 6 && currentTime<9) {
document.getElementById('sec1').style.backgroundImage="url(images/sunrise.jpg)";
}
else if ( currentTime>= 9 && currentTime<20) {
document.getElementById('sec1').style.backgroundImage="url(images/daytime.jpg)";
}
else if ( currentTime> 20 && currentTime<24) {
document.getElementById('sec1').style.backgroundImage="url(images/sunset.jpg)";
}
else {
document.getElementById('sec1').style.backgroundImage="url(images/nighttime.jpg)";
}
}
</script>
</header>
<hr>
<section id="sec1">
<article>
<div class="seaanimals">
			        <alt="seaanimals"><h3>Starfish</h3>
                    <img src="images\Starfish.jpg" width=400 height=200> 
                    <p>You probably know sea stars as starfish, the name sea stars are commonly known by. 
					But sea stars aren’t really fish. Sea stars, like sea urchins and sand dollars, do not 
					have backbones, which makes them part of a group called invertebrates. Fish have backbones,
					which makes them vertebrates. Got it? Most sea stars sport spiny skin and five arms, 
					although some can grow as many as 50 arms. The arms are covered with pincerlike organs and 
					suckers that allow the animal to slowly creep along the ocean floor. Light-sensitive eyespots 
					on the tips of the arms help the sea star find food. 
Favorites on the menu include mollusks such as clams, oysters, and snails. The sea star eats by attaching to prey
 and extending its stomach out through its mouth. Enzymes from the sea star’s stomach digest the prey. The digested
 material enters the sea star’s stomach. Tiny organisms can be swallowed whole. Sea stars occupy every type of habitat,
 including tidal pools, rocky shores, sea grass, kelp beds, and coral reefs. Some sea stars even live in sands as deep 
 as 20,530 feet (9,000 meters). 
Sea stars aren’t social creatures, but they will congregate in large groups during certain times of the year to feed.

                    </p>    
</div>
<div class="animacion1">
<img src="images\urchin.png" width=350 height=350> 
</div>
					
					
<div class="seaanimals">
			        <alt="seaanimals"><h3>Seahorse</h3>
                    <img src="images\Seahorse.jpg" width=400 height=200> 
                    <p>
                    Seahorses are tiny fishes that are named for the shape of their head, which looks like 
					the head of a tiny horse. There are at least 25 species of seahorses. You’ll find them 
					in the world’s tropical and temperate coastal waters, swimming upright among seaweed and 
					other plants. Seahorses use their dorsal fins (back fins) to propel slowly forward. 
					To move up and down, seahorses adjust the volume of air in their swim bladders, which is an air
					pocket inside their bodies. 
Tiny, spiny plates cover seahorses' bodies all the way down to their curled, flexible tails. The tail can grasp objects, 
helpful when seahorses want to anchor themselves to vegetation. 
A female seahorse lays dozens, sometimes hundreds, of eggs in a pouch on the male seahorse’s abdomen. Called a brood pouch,
 it resembles a kangaroo’s pouch for carrying young. Seahorse young hatch after up to 45 days in the brood pouch. The baby seahorses, 
 each about the size of a jelly bean, find other baby seahorses and float together in small groups, clinging to each other using their tails.
 Unlike kangaroos, baby seahorses do not return to the pouch. They must find food and hide from predators as soon as they’re born.
                    </p>    
</div>
					
<div class="seaanimals">
			        <alt="seaanimals"><h3>Octopus</h3>
                    <img src="images\Octopus.jpg" width=400 height=200> 
                    <p> Octopuses are sea animals famous for their rounded bodies, bulging eyes, 
					and eight long arms. They live in all the world’s oceans but are especially 
					abundant in warm, tropical waters. Octopuses, like their cousin, the squid, 
					are often considered “monsters of the deep,” though some species, or types,
					occupy relatively shallow waters.
Most octopuses stay along the ocean’s floor, although some species are pelagic, which means they
 live near the water’s surface. Other octopus species live in deep, dark waters, rising from below 
 at dawn and dusk to search for food. Crabs, shrimps, and lobsters rank among their favorite foods, 
 though some can attack larger prey, like sharks. Octopuses typically drop down on their prey from 
 above and, using powerful suctions that line their arms, pull the animal into their mouth. The octopus
 performs its famous backward swim by blasting water through a muscular tube on the body called a siphon. 
 Octopuses also crawl along the ocean’s floor, tucking their arms into small openings to search for food. 
 Seals, whales, and large fish prey on octopuses. 
If threatened, octopuses shoot an inky fluid that darkens the water, confusing the aggressor. 
The octopus can also change to gray, brown, pink, blue, or green to blend in with its surroundings. 
Octopuses may also change color as a way to communicate with other octopuses. Octopuses are solitary 
creatures that live alone in dens built from rocks, which the octopus moves into place using its powerful arms.
 Octopuses sometimes even fashion a rock “door” for their den that pulls closed when the octopus is safely inside.
                    </p>  

		</div>	
		<div class="seaanimals">
			        <alt="funfacts"><h4>Fun stuff and facts about Sea Animals!</h4>
                    <p> Let's see an array about sea animals.</br>
					<?php
$str = "Sea Animals are beautiful";
print_r (explode(" ",$str));
?> </br>
Now let's take that array and form it in a full sentence.</br>
 <?php
$arr = array('Sea','Animals','are','beautiful.');
echo implode(" ",$arr);
?> </br>
<?php
echo "There's a shark named Tasseled wobbegong. But since the name is quite weird and not easily stuck in mind 
you can also refer to it as ";
$str = "Tasseled wobbegong.";
echo trim($str,"Tasseled wob!");
?>
</br>
<?php
$number = 228450;
$str = "in the world";
printf("There are %u sea species known %s, ",$number,$str);
?>
<?php
echo substr("And 2 other million are still unknown.",4);
?>	
</br>
<?php
echo "The lauwiliwilinukunuku'oi'oi, a Hawaiian butterfly fish, is beautiful. But it's name is ";
echo strlen("lauwiliwilinukunuku'oi'oi");
echo " characters long.";
?>				
                    </p>  

		</div>	
<div class="seaanimals">
			        <h5>A song for little kids.</h5>
                    
                    <p> 
<?php


abstract class Animal
{
  public $type;
  public $name;
  public $sound;

  
  public function __construct($aType, $aName, $aSound)
  {
    $this->type = $aType;
    $this->name = $aName;
    $this->sound = $aSound;
  }

 
  public static function compare($a, $b)
  {
    if($a->name < $b->name) return -1;
    else if($a->name == $b->name) return 0;
    else return 1;
  }


  public function __toString()
  {
    return "$this->name the $this->type goes $this->sound";
  }
}

?>
<?php

class Dog extends Animal{
  public function __construct($name){
    parent::__construct("Dog", $name, "woof!");
  }
}

class Cat extends Animal{
  public function __construct($name){
    parent::__construct("Cat", $name, "meeoow!");
  }
}

class Bird extends Animal{
  public function __construct($name){
    parent::__construct("Bird", $name, "chirp chirp!!");
  }
}


$animals = array(
  new Dog("Fido"),
  new Bird("Celeste"),
  new Cat("Mia"),
  new Dog("Brad"),
  new Bird("Kiki"),
  new Cat("Abraham"),
  new Dog("Jawbone")
);


usort($animals, array("Animal", "compare"));


foreach($animals as $animal) echo "$animal<br>\n";

?>					
                    </p>  </div>
<button id="btn1" onclick="changeimg()"> Click here to change the background! </button>
</article>

</section>


</body>
</html>