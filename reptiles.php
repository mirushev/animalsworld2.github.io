<!DOCTYPE html>

<html>
<head>
<title> Reptiles </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="reptiles.css">
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
<div class="reptiles">
			        <alt="reptiles"><h3>Lizard</h3>
                    <img src="images\Lizard.jpg" width=400 height=200> 
                    <p>In Central America lives one of the most interesting lizards on earth – the green basilisk lizard. 
This lizard is sometimes called a double-crested basilisk. It is bright green and has a fringe on its back. It has a long, long tail.
Green basilisks spend most of their time in trees, but they always live near water. If they sense danger, 
they drop to the water to make their escape.
                    </p>    
</div>
					
					
<div class="reptiles">
			        <alt="reptiles"><h3>Crocodile</h3>
                    <img src="images\Crocodile.jpg" width=400 height=200> 
                    <p>
                    Crocodiles are reptiles like snakes and lizards, but did you know they’re more closely related to birds and extinct dinosaurs? It’s true.
Crocodiles are about the closest we’ll get to the ancient dinosaurs. 

<!--Exception-->
<?php
    $years_number = 55;
    
    try{
        
        if( !is_numeric($years_number) ){
           throw new InvalidArgumentException('The variable must be a number!'); 
        }
        
        if( ($years_number < 1) || ($years_number > 100) ){
           throw new OutOfRangeException('The variable must be a valid day of month: can e from 1 to 100.'); 
        }
        
        echo 'Crocodiles have been around for '. $years_number;
        
    }catch( Exception $e ){
        die( $e->getMessage() );
    }
?>
 million years. 
They live in rivers, lakes and wetlands in many warm parts of the world.
The crocodilian family includes alligators, crocodiles, caimans, and gharials. All these lizards have long snouts,  sharp teeth and keen hunting skills. There are a few differences, though.

                    </p>    
</div>
					
<div class="reptiles">
			        <alt="reptiles"><h3>Turtle</h3>
                    <img src="images\Turtle.jpg" width=400 height=200> 
                    <p> Have you ever wondered what the difference is between a tortoise and a turtle? Both animals are reptiles; both lay eggs and both have hard, bony shells. Tortoises live on land, in deserts, grasslands and forests.
Turtles have webbed feet and live in rivers, lakes or even the ocean. They only leave the water to lay their eggs. 
A terrapin is a turtle that spends time both in and out of the water. It always lives close to water, though, and can be found in swamps and wetlands.
Whatever you call them, turtles are interesting animals. Their bony shell is covered in scales. It is attached to their backbone and can’t be removed. Some turtles can duck their head and limbs inside their shell for protection. Not all turtles can do this. 

<!--Exception-->
<?php
//create function with an exception
function checkNum($number) {
  if($number>50) {
    throw new Exception(" turtles can live about 70 years.");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(70);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 50 or below.';
}

//catch exception
catch(Exception $e) {
  echo 'According to the San Diego Zoo ' .$e->getMessage();
}
?>
                    </p>    
					</div>
					

</article>
					

</script>
</div>


					
					
</body>

</html>