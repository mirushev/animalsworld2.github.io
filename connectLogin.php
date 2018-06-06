<?php

define("DBHOST","localhost");
define("DBNAME","users");
define("DBUSER","root");
define("DBPASS","password");

$lidhja = mysqli_connect(DBHOST, DBUSER,DBPASS,DBNAME);

if(!$lidhja){

	die("Lidhja nuk mund te krijohet");

}


$user = $_POST['user'];
$pass = $_POST['pass'];
$query = "Select * from students5 where emri = '".$user."' and mbiemri = '".$pass."'";

$rez = mysqli_query($lidhja,$query);

if($rez)

 {
        if(isset($_POST['remember']))
        {
          setcookie('emri',$user,time()+40);
          setcookie('mbiemri',$pass,time()+40);
        }

          $_SESSION['emri']=$user;
          setcookie('emri',"$user",0);
          setcookie('mbiemri',"$pass",0);
          
         header('Location:gallery.php');
 

  }
  else { echo '<h4 class="heading">Keni shtypur gabim userin ose passwordin</h4><br>';}
  
 if($username==''&&$password=='')
  {
    echo '<h3 class="heading">Shkruani te gjitha fushat </h3><br>';
  }
  
mysqli_close($lidhja);

?>