<!DOCTYPE html>
<?php
            if(isset($_COOKIE['username'])and $_COOKIE['roli']=='1')
{}
else
{
    header("Location:identifikimi.php") ;
}

?>
<html>
<head>
<title> Users </title>
<meta charset="utf-8">
</head>
<link rel="stylesheet" href="style.css">

<style>
    table {
    	color:rgb(5, 51, 89);;
    }

    input[type=button], input[type=submit], input[type=reset] {
    
    background-color: #4C8CAF;
    color: white;
    padding: 5px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 7px 2px;
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 2px 2px 2px  #5252c2;

}
#menuja a {
 
  font-size: 23px;

  }
		</style>

<body>
<header>
<nav>
<div id='active'>
            <ul>
			<li ><a href='indexU.php'><span>Data</span></a></li>
            <li ><a href="notificationU.php"><span>Notifications</span></a></li>
            <li ><a href="users.php"><span>Users</span></a></li>
		    <li ><a href="adoptingSH.php"><span>Adopt</span></a></li>
		    <li ><a href="contacts.php"><span>Contacts</span></a></li>
			<li ><a href="logout.php"><span>Log Out</span></a></li>
            </ul>
			</div>
</nav>
</header>
<hr>
<article>
	<div class="Mammals">
<div style="padding: 20px 10px;">      

<div id="tablediv" style="border:6px solid #5f68e0;">
	
	<h3 style="text-align:center;margin-top:40px;color:rgb(5, 51, 89);">Mir&#235; se erdh&#235;t:</h3>
             <?php
               echo "<p style='text-align:center;color:rgb(5, 51, 89);'>".$_COOKIE['username'] . "</p>";
                                                 
   
						?>
</div>

<h2 style="color: rgb(5, 51, 89);margin-left:235px;margin-bottom: 50px">T&#235; dh&#235;nat personale</h2>
<h2 style="color: rgb(5, 51, 89);margin-left:650px;margin-top:-85px">Nd&#235;rro fjal&#235;kalimin</h2>
<div  style="border:6px solid #5f68e0; width: 350px; height:155px;margin-left:610px;background-color:#e9eafb;">
	
 <form method="POST" action="nderro_fjalekalimin.php">
                                                <table  cellspacing="15px" ><tr>
                                                        <th>Fjal&#235;kalimi i ri :</th><td> <input type="password" name="fjalekalimiri" required="true"><br></td></tr>
                                                    <tr>
                                                        <th>Konfirmo :</th><td> <input type="password" name="fjalekalimiri2" required="true"></td></tr>
                                                </table>
                                            <input type="submit" value="Nd&#235;rro" style="margin-left:140px" >
                                            </form>
<?php
                                            if(isset($_GET['Nderrimimesukses']))
                                            {
                                            if ($_GET['Nderrimimesukses']==1)
                                            {
                                            echo "<div>";
                                              echo"  <h4 style='color:rgb(5, 51, 89);margin-top:40px;'>Fjal&#235;kalimi &#235;sht&#235; nd&#235;rruar me sukses !</h4>";
                                            echo "</div>";
                                            }
                                              if ($_GET['Nderrimimesukses']==2)
                                            {
                                            echo "<div>";
                                              echo"  <h4 style='color:rgb(5, 51, 89);margin-top:30px;margin-bottom:15px'>Ju lutem sh&#235;noni fjal&#235;kalimin e njejt&#235; n&#235; t&#235; dy hapsirat !</h4>";
                                            echo "</div>";
                                            }
                                               if ($_GET['Nderrimimesukses']==3)
                                            {
                                            echo "<div>";
                                              echo"  <h4 style='color:rgb(5, 51, 89);margin-top:40px;'>Fjal&#235;kalimi duhet t&#235; p&#235;rmbaj&#235; s&#235; paku :
                                                                           8 karaktere,
                                                                           Nj&#235; shkronj&#235; t&#235; madhe,
                                                                          Nj&#235; num&#235;r !
                                                     </h4>";
                                            echo "</div>";
                                            }
                                        }
                                            ?>
	</div>
<h2 style="color: rgb(5, 51, 89);margin-left:650px;margin-top:80px">&#199;regjistrohuni</h2>
	<div  style="border:6px solid #5f68e0; width: 350px; height:155px;margin-left:610px; margin-top:30px;background-color:#e9eafb;">

	<form method="POST" action="cregjistrimi.php">
                                                <table  cellspacing="15px" ><tr>
                                                        <th>Fjal&#235;kalimi :</th><td> <input type="password" name="fjalekalimi1" required="true"><br></td></tr>
                                                    <tr>
                                                        <th>Konfirmo :</th><td> <input type="password" name="fjalekalimi2" required="true"></td></tr>
                                                </table>
                                            <input type="submit" value="&#199;regjistrohuni" style="margin-left:140px" >
                                            </form>
                                            <?php
                                            if(isset($_GET['Cregjistrohu']))
                                            {
                                            if ($_GET['Cregjistrohu']==1)
                                            {
                                             echo "<div>";
                                              echo"  <h4 style='color:rgb(5, 51, 89);margin-top:40px;margin-bottom:40px'>Ju lutem sh&#235;noni fjal&#235;kalimin e njejt&#235; n&#235; t&#235; dy hapsirat !</h4>";
                                            echo "</div>";
                                            }
                                              
                                        }
                                            ?>
	</div>
<div  style="margin-left:200px;margin-top:-477px;margin-bottom:60px;border:6px solid #5f68e0; width: 350px; height:467px;background-color:#e9eafb;">
	<?php

     include 'konektimi.php';
     $usernameSH= $_COOKIE['username'];
                                            $sql="Select * from shfrytezuesit where Username='$usernameSH'";


                                            $rez=mysqli_query($con,$sql);

                                            
                                            
                                            $shfrytezuesi= mysqli_fetch_assoc($rez);
                                            
                                            echo "<table style='padding:40px;text-align: left' cellspacing='15px' >";
                                            echo "<tr>";
                                            echo"<th class='a'>Emri:</th>";
                                            echo"<td>".$shfrytezuesi['Emri']."</td>";
                                                    echo"</tr>";
                                                    echo"<th class='a'>Mbiemri:</th>";
                                            echo"<td>".$shfrytezuesi['Mbiemri']."</td>";
                                                    echo"</tr>";
                                                           echo"<th class='a'>Email:</th>";
                                            echo"<td>".$shfrytezuesi['Email']."</td>";
                                                   echo"</tr>";
                                                   echo"<th class='a'>Dat&#235;lindja:</th>";
                                            echo"<td>".$shfrytezuesi['Datelindja']."</td>";
                                                                     
                                                    echo"<tr>";
                                             echo"<th class='a'>Vendbanimi:</th>";
                                            echo"<td>".$shfrytezuesi['Vendbanimi']."</td>";
                                            echo"</tr>";
                                          
                                            echo"</table>";
                                            

	?>

</div>

</div>
            <div class="Mammals">
	
    
            </div>
					
            <div class="Mammals">
			       
            </div>
					
		    <div class="Mammals">
			        
          
</article>



</body>

</html>