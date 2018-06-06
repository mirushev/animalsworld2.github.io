<?php

define("DBHOST","localhost");
define("DBNAME","test");
define("DBUSER","root");
define("DBPASS","");

$lidhja = mysqli_connect(DBHOST, DBUSER,DBPASS,DBNAME);

if(!$lidhja){

	die("Lidhja nuk mund te krijohet");

}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$country = $_POST['country'];
$city = $_POST['city'];
$query = "Select *
from signup10 where firstname = '".$firstname."'and lastname='".$lastname."'and username = '".$username."' and passwordi = '".$password."'and confirmpassword='".$confirmpassword."'and country='".$country."'and city='".$city."'";

$rez = mysqli_query($lidhja,$query);

if($rez){

    
     header('Location:login.php');
					

	}
else{

	}
mysqli_close($lidhja);

?>