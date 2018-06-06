<!DOCTYPE html>
<!--Create a cookie-->
<?php
$cookie_name = "mammal";
$cookie_value = "Sheep";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<head>
<title> Mammals </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="mammals.css">

<!--jQuery Callback-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("code").hide("slow", function(){
            alert("The information is now hidden");
        });
    });
});
</script>

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
            <div class="Mammals">
		<alt="mammals">
<!--Here we check if we have a cookie named mammal-->
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "<h3>"."This '".$cookie_name . "' is not defined!"."</h3>";
} else {
     echo "<h3>".$_COOKIE[$cookie_name]."</h3>";
}
?>

<!--Delete the cookie mammal-->
<?php
// set the expiration date to one hour ago
setcookie("mammal", "", time() - 3600);
?>

                    <img src="images\Sheep.jpg" width=400 height=200> 
                    <p><cite>Sheep</cite> are mammals. They are herbivores meaning plant eater. Sheep mostly graze on grass. 
					There are over 1 billion sheep in the world. Sheep live in most nations around the world.
                    There are hundreds of different species of sheep. Baby sheep are called lambs.
                    Mother sheep give birth to between 1-3 lambs. Lambs are between 5-8 pounds when they are born.
                    Sheep are very social animals. The live in groups called herds or flocks. Most sheep live on farms or ranges.
                    Sheep have excellent hearing and good memories. Sheep can see behind themselves without moving their heads.
                    The lifespan for a sheep is between 6-11 years. A sheep is covered in a thick fleece.
                    Some sheep have their fleece cut or sheared in the Spring to make wool for clothing.
                    Fat from a sheep called tallow is sometimes used to make soap and candles.
                    Sheep milk is higher in fat, protein and calcium than cows or goat milk.
<!--Here we check if the cookie named mammal is deleted-->
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "This wasn't all about this ".$cookie_name;
} else {
     echo "This was all about this ".$cookie_name." named ".$_COOKIE[$cookie_name].".";
}
?>
                    </p>    
            </div>
					
            <div class="Mammals">
			        <alt="mammals"><h3>Dolphin</h3>
                    <img src="images\Dolphin.jpg" width=400 height=200> 
                    <p> Dolphins are sometimes thought of as the dogs of the sea because they are usually playful and friendly.
They’re also among the smartest animals on Earth. Dolphins are water mammals. 
Scientists believe they’re as smart as chimpanzees or dogs. They live in rivers and oceans, but they must come up to breathe air.
A Dolphin is a cetacean mammal, related to whales and porpoises. 
Though people sometimes think ‘dolphin’ and ‘porpoise’ are the same 
thing, porpoises are not considered dolphins and have different physical
 features (Porpoises have a shorter beak and spade-shaped teeth) and they also behave 
in different way than a dolphin does. 
Porpoises and dolphins share a common ancestry, being of the Delphinidae mammal family.

                    </p>    
            </div>
					
		    <div class="Mammals">
			        <alt="mammals"><h3>Bat</h3>
                    <img src="images\Bat.jpg" width=400 height=200> 
                    <p> A long time ago people used to think that bats were <abbr title="Birds without feathers ">BWF</abbr> . 
                    But now we know that there is no such thing as a featherless bird.  
                    We know that bats are mammals, just like people. Bats are warm blooded and they have fur. 
					Bats nurse their babies with milk. But bats are very special mammals.They are the only mammals that can fly (without an airplane!)  
                    Flying squirrels are mammals too, but they don't really fly. They jump from high in a tree glide through the air like a kite.
                    Bats flap their wings and fly like a bird.
                    </p>             
					</div>
<div class="Mammals">
<!--Check if there are any cookies enabled in this page-->
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled in this page.";
} else {
    echo "Cookies are disabled in this page.";
}
?>
</div>
          
</article>



</body>

</html>