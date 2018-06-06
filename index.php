<!--Create a session-->
<?php
session_start();
?>

<!DOCTYPE html>

<html manifest="manifest.appcache">
    <head>
        <title>Animals Website</title>
        <meta charset="utf-8">
		
		<link rel="stylesheet" href="stili.css">
		<style type="text/css">
			
    .adopt{
	font-size:1em;
	font:bold;
	margin-top: 71em;
    margin-left: -12px;
	float:left;
    width: 280px;
    background-color:rgba(224, 224, 209, 0.7);
    border: 3px solid #f5f5f0;
	border-radius: 8px;	
			}

	.twitter{
	font-size:1em;
	font:bold;
	margin-top: 87em;
	float:left;
    width: 280px;
    background-color:rgba(224, 224, 209, 0.7);
    }


.all {
  width: 251px;
  height:75px;
  font-size: 1em;
  font-weight:bold;
  background: rgba(140, 217, 140, 0.7);
  position:relative;
  margin-top:3em;
  margin-bottom:1.5em;
  padding-top:2em;
  padding-bottom:0.2em;
  text-align: center;
  border:solid 1px #669999;
}
		</style>
    </head>
	
	

    <body>
	
        <header>
            <a href="index.php"></a>
           <nav> 
		   <div id="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mammals.php">Mammals</a></li>
                    <li><a href="insects.php">Insects</a></li>
                    <li><a href="birds.php">Birds</a></li>
					<li><a href="seaanimals.php">Sea Animals</a></li>
				    <li><a href="reptiles.php">Reptiles</a></li>
					<li><a href="contacts.php">Contacts</a></li>
					<li><a href="login.php">Log In</a></li>
                </ul>
				</div>
           </nav>
        </header>

	
 <article>	
            <section>
            
            <hr>
<!--Konstante ne PHP-->
<?php
define("WELCOME", "<h2>Random Animals!</h2>");

function myTest() {
    echo WELCOME;
} 
myTest();
?> 
            </section> 
	
    	
            <div class="text">
			        <alt="animalsworld"><h3>Chameleon</h3>
                    <?php
// Set session variables
$_SESSION["tree_chameleon"] = "green";
$_SESSION["desert_chameleon"] = "brown";
?>
                    <img src="images\chameleon.jpg" width=400 height=200  
                    <span class="animals"><i><a href="reptiles.php" target="_blank">Type: Reptiles</a> </i></span>
                    <p>A chameleon sits motionlessly on a tree branch.The chameleon’s swift eating style 
					is just one of its many features that’ll leave you tongue-tied.Chameleons mostly live in the rain forests and deserts of Africa.
					The color of their skin helps them blend in with their habitats. Chameleons that hang out in trees are usually 
<?php
// Echo session variables that were set before
echo $_SESSION["tree_chameleon"];
?>. Those that live in deserts are most often 
<?php
// Echo session variables that were set before
echo $_SESSION["desert_chameleon"].".</br></br>";
?>
<!-- leximi i vlerave te ruajtura ne session-->
<?php
print_r($_SESSION);
?>

<!--ndryshimi dhe leximi i vlerave te ruajtura ne session-->
<?php 
$_SESSION["desert_chameleon"] = "black";
echo "</br>";
print_r($_SESSION);
?>

<!--Fshirja e sessions-->
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
?>

                    </p>    
            </div>
			

            <div class="text">
			    <alt="animalsworld"><h3>Koala</h3>
                <img src="images\koala.jpg" width=400 height=200
                <span class="animals"><i><a href="mammals.php" target="_blank">Type: Mammals</a> </i></span>
                <p>
                The Koala is a small to medium sized mammal that is found inhabiting a variety of different 
				types of forest in south-eastern Australia. Despite its appearance and the fact that it is also 
				known as the Koala Bear, Koalas are in fact marsupials but are so distinctive amongst this specially 
				adapted family of mammals that they are classified in a scientific group of their own.</p> 	
            </div>
  
		
            <div class="text">
			    <alt="animalsworld"><h3>Penguin</h3>
                <img src="images\penguin.jpg" width=400 height=200
                <span class="animals"><i><a href="birds.php" target="_blank">Type: Birds</a> </i></span>
                <p>
                The penguin is found pretty much only in the Southern Hemisphere, only a handful of penguins though are 
				in the far south. The emperor penguin inhabits the icy lands of Antarctica.Despite what many think, 
				the penguin is not only found in arctics, one species of penguin lives as far north as the Galapagos
				Islands.
               </p>      
            </div>
            
            <div class="text">
			    <alt="animalsworld"><h3>Piranha</h3>
                <img src="images\piranha.png" width=400 height=200
                <span class="animals"><i><a href="seaanimals.php" target="_blank">Type: Sea Animal</a> </i></span>
                <p>The piranha is a type of freshwater fish found in the rivers of the South American jungles. The piranha 
				can be found in nearly every country in South America and the piranha have been appearing more recently 
				in the south of the USA.The piranha fish has a single row of razor-sharp teeth with the piranha being most 
				commonly known for their taste for blood.
             </p>
                
            </div>
            
            <div class="text">
			    <alt="animalsworld"><h3>Cockroach</h3>
                <img src="images\cockroach.png" width=400 height=200
                <span class="animals"><i><a href="insects.php" target="_blank">Type: Insect</a> </i></span>
                <p>
                The cockroach, also known as the roach, is found worldwide in every environment and every habitat with the 
				exception of water. The cockroach is one of the most commonly known pests to humans of the insects world but
				plays a vital role in the ecosystem ingesting decomposing materials.There are thought to be around 4,000 known
				species of cockroach in existence but only about 30 of the different species of cockroach are the ones that 
				humans come into contact with.</p>      
            </div>
		</article>	
			

    

<!--OTHER ANIMALS -->
            <div id="otheranimals">
                <section>
				
                <h2>Other interesting animals</h2>
<!--Perdorimi i preg_split-->				
<?php
    $sentence="<h3>Click on the photo to watch a documentary about those animals </h3> ";
    $result=preg_split ('/  /',$sentence);
    foreach ($result as $content)
    {echo $content."<br>" ;
        
    }
?>                </section>
                <table cellpadding="5">
                    <tr>
                        <td><a href="https://www.youtube.com/watch?v=7kMv5reu1oo" target="_blank"><img src="images\lion.jpg" width=110 height=200 alt="Lion" ></a></td>
                        <td><a href="https://www.youtube.com/watch?v=nVVN_7zZNf4&t=962s" target="_blank"><img src="images\cat.jpg" width=110 height=200  alt="Cat"></a></td> 
                        <td><a href="https://www.youtube.com/watch?v=8MQ6aHPO7PQ&t=14s" target="_blank"><img src="images\horse.jpg" width=110 height=200 alt="Horse"></a></td>
                        <td><a href="https://www.youtube.com/watch?v=iOfTG3uT7Do" target="_blank"><img src="images\dog.jpg" width=110 height=200 alt="Dog"></a></td> 
                    </tr>
                    <tr>
                        <th><font size="5" color="white">Lion</font></th>
                        <th><font size="5" color="white">Cat</font></th>
                        <th><font size="5" color="white">Horse</font></th>
                        <th><font size="5" color="white">Dog</font></th>
                    </tr>
                </table>

                <!--Perdorimi i funksionit per lexim nga fajllat-->
<?php
$myfile = fopen("BearPark.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("BearPark.txt"));
fclose($myfile);
?>


<!--Perdorimi i funksionit per shkrim ne fajlla-->
<?php
$myfile = fopen("FileWrite.txt", "w") or die("Unable to open file!");
$txt = "The number of participants in our events is:\n";
fwrite($myfile, $txt);
$txt = "60\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

            </div>
        </div>	
<aside>
		
<!--Ora-->
		<div class="all">
       
        <?php
        echo "*Today is " . date("Y/m/d") . "<br>";
        echo "*Today is " . date("l");
        ?>
		</div>
		
<!--Fade ne jQuery-->
	
<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#picOne').fadeIn(1500).delay(3500).fadeOut(1500);
    $('#picTwo').delay(5000).fadeIn(1500);
});
</script>




<div id="pics">
<img src="images/firstPic.gif" width="255" height="255" id="picOne" />
<img src="images/secondPic.gif" width="255" height="255" id="picTwo" />
</div>		
		
		
            <h2>POLLS</h2> 
			
            <div id="Sondazhi">           
            <div class="poll">
                <h4>For which of the categories listed in our website are you more interested in?</h4>
                <form>
                <input type="checkbox" name="q1" value="checked">Mammals<br/>
                <input type="checkbox" name="q1" value="checked" checked>Reptiles and amphibians<br/>
                <input type="checkbox" name="q1" value="checked">Birds<br/>
                <input type="checkbox" name="q1" value="checked">Under the sea animals<br/>
				<input type="checkbox" name="q1" value="checked">Birds<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>
            <div class="poll">
                <h4>Which from the above is your favorite animal?</h4>
                <form>
                <input type="radio" name="q2" value="1">Cat<br/>
                <input type="radio" name="q2" value="2" checked>Dog<br/>
                <input type="radio" name="q2" value="3">Lion<br/>
                <input type="radio" name="q2" value="4">Horse<br/>
				<input type="radio" name="q2" value="5">Other<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>      
            <div class="poll">
                <h4>Which of the animals listed above is the most dangerous?</h4>
                <form>
                <input type="radio" name="q3" value="1">Black Mamba<br/>
                <input type="radio" name="q3" value="2">Piranha<br/>
                <input type="radio" name="q3" value="3">Lion<br/>
                <input type="radio" name="q3" value="3">Crocodile<br/>
                <br/>
                <button onclick="window.alert('Your vote has been sent')">Vote</button>
                </form>
            </div>           
            </div>

<!--Switch dhe Multidimensional Arrays-->
<div class="adopt">
    <?php
$pets = array
  (
  array("<b>Dogs:</b>",22,18),
  array("<b>Cats:</b>",15,13),
  array("<b>Rabits:</b>",5,2),
  array("<b>Others:</b>",1754,46)
  );
  
echo $pets[0][0]."<br>Free to adopt: ".$pets[0][1].", adopted: ".$pets[0][2].".<br>";
echo $pets[1][0]."<br>Free to adopt: ".$pets[1][1].", adopted: ".$pets[1][2].".<br>";
echo $pets[2][0]."<br>Free to adopt: ".$pets[2][1].", adopted: ".$pets[2][2].".<br>";
echo $pets[3][0]."<br>Free to adopt:".$pets[3][1].", adopted: ".$pets[3][2].".<br>";
?>
<br>

<?php
$adoptions = 10000;
while ($adoptions <= 1000)
  {
 echo "The number of animal adoptions on this page is already " . $adoptions . ". You can adopt now!. <br>";
 $adoptions = $adoptions + 1;
  }

echo "<h6>The number of animal adoptions on this page is already " . $adoptions . ". You can adopt NOW!</h6>";
?>
<p><a href="contacts.php" target="_blank">Contact Here!</a><p>
<br>
</div>
				
				
	
<!--Slider-->	
				<div id="slider1">
				<div class="slider">
            <div class="slide">
                  <img src="images/littlekitten.jpg" class="slide-img">
                  
            </div>
            <div class="slide">
                  <img src="images/luani.jpg" class="slide-img">
                  
            </div>
            <div class="slide">
                  <img src="images/ketri.jpg" class="slide-img">
                  
            </div>
            <button class="prev" onclick="pindahslider(-1)">&#10094;</button>
            <button class="next" onclick="pindahslider(+1)">&#10095;</button>
        </div>
				<script> 
				window.onload = function() {
    slider();
    t;
}

var nomerslider = 0;
var t = setInterval (time, 2500);

function slider() {
        var i;
        var slide = document.getElementsByClassName("slide");
        for (i = 0; i < slide.length; i++ ) {
            slide[i].style.display = "none";
        }
        if (nomerslider >= slide.length) {
            nomerslider = 0;
        }
        if (nomerslider < 0) {
            nomerslider = slide.length-1;
        }
        slide[nomerslider].style.display = "block";
    }
    
function time() {
    nomerslider++;
    slider();
}

function pindahslider(n) {
        nomerslider = nomerslider + n;
        clearInterval(t);
        t = setInterval(time, 2500);
        t;
        slider();
}      
				
				
				</script>	
                </div>			


<!--Listat-->				
			<div id="listat">

                <ul>
                    <h4><li>5 Animals In Danger Of Becoming Extinct</h4></li>
                    <ol>
                        <li>Giant tortoise</li>
                        <li>Great white shark</li>
                        <li>Red panda</li>
                        <li>Polar bear</li>
                        <li>African elephant</li>
                    </ol>
                    </li>
                    <h4><li>5 Animals That Are Now Extinct</li></h4>
                        <ol>
                            <li>West African Black Rhinoceros</li>
                            <li>Tasmanian Tiger</li>
                            <li>Passenger Pigeon</li>
                            <li>Sea Mink</li>
                            <li>Caribbean Monk Seal</li>
                        </ol>
                    </li>
                    <h4><li>5 Of The Coolest Animal Species In The World</li></h4>
                        <ol>
                            <li>Liger</li>
                            <li>The Maned Wolf</li>
                            <li>Leaf Deer</li>
                            <li>Japanese Spider Crab</li>
                            <li>Red Panda</li>
                        </ol>
                    </li>
                </ul>
                </div>
				

					
<!--Follow Us-->			
        <div id="followus">
            <section>
            <h3><em>Follow us:</em></h3>
            <ul>
                <li><a href="https://www.facebook.com/" target="_blank"><img src="images\Facebook.png" alt="Facebook"></a></li>
                <li><a href="https://www.twitter.com/" target="_blank"><img src="images\Twitter.png" alt="Twitter"></a></li>
                <li><a href="https://plus.google.com/" target="_blank"><img src="images\Google+.png" alt="Google Plus"></a></li>
                <li><a href="https://www.yahoo.com/" target="_blank"><img src="images\Yahoo.png" alt="Yahoo"></a></li>
				<li><a href="https://www.pinterest.com/" target="_blank"><img src="images\Pinterest.png" alt="Pinterest"></a></li>    				
            </ul>
            </section>
        </div>

<!--Web API me twitter-->
<div class="twitter">
<div class="twitterapi">
<?php
$variable = "seeing";

switch ($variable) {
    case "seeing":
        echo "<i>● • Click <a href='twitter.php' target='_blank'>here</a> to see our posts on twitter! • ● </i>";
        break;
    case "notseeing":
        echo "Don't click the link to see our posts on twitter!";
        break;
    default:
        echo "This is our magazine on twitter!";
}
?>
</div>
</div>

</aside>
	
    </body>


</html>
