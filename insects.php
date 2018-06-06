<!DOCTYPE html>

<html>
<head>
<title> Insects </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="insects.css">
<style type="text/css">
.ajax  {
    font-size:1em;
    font:bold;
    margin-top:3em;
    margin-left:5em;
    padding-left:1em; 
    float:left;
    width: 255px;
    background-color:rgba(255, 194, 102, 0.7);
    border-radius: 10px;  
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
<hr>

<article>
<div class="Insects">
			        <alt="insects"><h3>Dragonflies</h3>
                    <img src="images\Dragonfly.jpg" width=400 height=200> 
                    <p> Of all the flying insects, dragonflies just might be the most charming. They don’t sting or bite. They don’t carry diseases or germs. And they have bright colors and an amazing way of flying. Dragonflies live in most parts of the world, but they prefer to live near ponds or streams.
Dragonflies and their smaller cousins, damselflies, spend most of their life as larva, or baby dragonflies. 
They hatch from eggs under water and feed on water insects, tiny fish and even tadpoles. 
They can stay in the larval stage for up to two years, depending on the species. 
Then they leave the water and come ashore. Their hard exoskeleton cracks and their abdomen, or bottom part, expands. Their wings harden and they become adults. Unfortunately, most adult dragonflies live only a few weeks.
                    </p>    
                    </div>
					
<div class="Insects">					
					<alt="insects"><h3>HoneyBees</h3>
                    <img src="images\HoneyBee.jpg" width=400 height=200> 
                    <p> Honeybees are flying insects, and close relatives of wasps and ants. 
They are found on every continent on earth, except for Antarctica.
Bees of all varieties live on nectar and pollen. Without bees, pollination 
would be difficult and time consuming - it is estimated that one-third of the 
human food supply depends on insect pollination. Bees have a long, straw-like tongue 
called a probiscus that allows them to drink the nectar from deep within blossoms. 
Bees are also equipped with two wings, two antennae, and three segmented body 
parts (the head, the thorax, and the abdomen).  
Honeybees are social insects that live in colonies.  
The hive population consists of a single queen, a few hundred drones, and thousands 
of worker bees. Worker bees are the most familiar-looking member of the honeybee hive, 
as they  make up about 99% of each colony's population. Worker bees are all female, 
and they do almost everything for the hive. From birth to her death 45 days later,
 the worker bee is given different tasks to do during different stages of her life.
 Worker bees are responsible for everything from feeding the larvae (the baby bees),
 to tending to the queen, to cleaning the hive, to collecting food, to guarding the colony,
 to building honeycomb.

<?php
//how fast can a housefly fly
$honeybee1 = new HoneyBee(10);
unset($honeybee1);

class HoneyBee {
    public $speed = 120;
    
    function __construct ($speed) {
        $this -> speed = $speed;
    }
    
    function __destruct() { //__destruct thirret automatikisht kur ne fshijme nje objekt te caktuar
        print ("They're capable of flying 20 miles per hour!"); //fshihet objekti dhe printohet ky mesazh
    }
}
?>
                    </p>    
                    </div>
			
<div class="Insects">
					<alt="insects"><h3>Spiders</h3>
                    <img src="images\Spiders.jpg" width=400 height=200> 
                    <p> There are many animals on the planet that are truly scary, but spiders aren’t one of them. 
In fact, spiders do much more good than harm. Most people are afraid of spiders because they bite. 
But only two kinds of spiders in the U.S. – the black widow and the brown recluse – are venomous to people.
In the whole world, only 25 species of spiders can harm humans, out of over 37,000 species.
So what’s so great about spiders? First, they eat insects – and lots of them. One spider can eat 
over 2,000 insects a year. Without them, your home and garden would be overrun with flies, mosquitoes and beetles.
Spiders also have several fancy tricks that make them different than any other animal.

                    </p>    
                    </div>
					</div>

					<script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>

                  

<div class="ajax">
<h4> <br>   Please let us know what you think about our website!</h4>

<form id="my_form" onsubmit="submitForm(); return false;">
  <p><input id="n" placeholder="Name" required></p><br>
  <p><input id="e" placeholder="Email Address" type="email" required></p><br>
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
  <p><input id="mybtn" type="submit" value="Submit Form"> <span id="status"></span></p>
</form>

                   
                    </div>

					


</body>
</html>