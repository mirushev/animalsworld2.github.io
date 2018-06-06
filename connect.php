<?php
$connect_error="Gabim ne lidhjen me databaze!";
try {
	$con=mysqli_connect('localhost','root','123456789','AnimalsWorld');  //te dhenat per me u lidh me db (root, password, etj.)
} 
catch (Exception $e) {
	echo $connect_error;
}


?>