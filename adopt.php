<!-- 
    <?php
/*
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$email=$_POST['email'];
$number=$_POST['number'];
$type=$_POST['type'];
$gender=$_POST['gender'];
$picture=$_POST['picture'];


*/
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>ADOPT, DON'T SHOP.</title>
		<style>
		.adopting {
		}

		.butoni {
                width: 65%;
                height: 30px;
                background: #2690ff;
                box-sizing: border-box;
                border-radius: 5px;
                font-family: Montserrat;
                border: 1px solid #2060e1;
                color: #fff;
                font-weight: bold;
                font-size: 13px;
                cursor: pointer;
                margin-left: 45px;}

          .formati {
                position: relative;
                background: #fff;
                }


			
		</style>
</head>


<body style="background-image: url(images/catcat.jpg);">


<div class="adopting">
<form name="adoptform" action="adopt.php" method="POST" style="width: 400px; margin: 20px auto;">
      <fieldset style="padding: 35px 30px;">
        <legend><h4>ADOPT, DON'T SHOP.</h4></legend>

        <b>Name:</b>
        <br><input type="text" name="name" placeholder="Name" required="required"autofocus><br><br>

        <b>Street Address:</b>
        <br><input type="text" name="address" placeholder="Street Address" required="required"><br><br>

        <b>City:</b>
        <br><input type="text" name="city" placeholder="City" required="required"><br><br>

        <b>Email:</b>
        <br><input type="email" name="email" placeholder="Email" required="required"><br><br>

        <b>Phone Number:</b>
        <br><input type="text" name="number" placeholder="Phone Number" required="required"><br><br>

        <b>Type of animal:</b>
        <br><input type="text" name="type" placeholder="Type of animal"  required="required"><br><br>

        <i>Gender of animal you're looking for:</i>
        <input type="radio" name="gender" value="female"><b>F</b>
        <input type="radio" name="gender" value="male"><b>M</b><br><br>

        <b>Your Picture:</b>
        <br><input type="file" name="picture" required="required"><br><br>
         
           <input class="butoni" type="submit" name="adopt" value="ADOPT">
           </div>

   
     </fieldset>		
    </form>


</body>
</html>