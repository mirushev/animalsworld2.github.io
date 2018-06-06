
<html>
<head>
<title> Contacts </title>
<meta charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide(1000);
    });
	
	$("#show").click(function(){
    $("p").show(1000);
});
});
</script>

</head>
<link rel="stylesheet" href="contacts.css">

<body> 
<header>
<nav>
<div id='active'>
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


<hr>
<script type="text/javascript">

function multipleparameters (first, second) {
   document.write("Here are our "+ first + " if you want to contact " + second + ".");
}

multipleparameters("E-mails", "us");

</script>
<b><p>If you want to read more click here: <a href="#aboutus">About Us</a></p></b>


<table style="width:50%; height: 10%">

  <tr>
    <th> Name of admins </th>
    <th> E-mail </th>
  </tr>

  <tr>
    <td> Adonis Deliu </td>
    <td><address> <a href="mailto:adonisdeliu@gmail"> adonisdeliu@gmail.com </a></address> </td>
  </tr>

  <tr>
    <td> Rreze Sadikaj </td>
	<td><address> <a href="mailto:rrezesadikaj@hotmail.com"> rrezesadikaj@hotmail.com </a></address> </td>
  </tr>

  <tr>
    <td> Mirushe Vu&ccedil;it&euml;rna </td>
	<td><address> <a href="mailto: mirushe1v@gmail"> mirushe1v@gmail.com </a></address> </td> 
  </tr>

  <tr>
    <td> Er&euml;blina Zogjani </td>
    <td><address> <a href="mailto:zereblina@gmail"> zereblina@gmail.com</a></address> </td>
  </tr>
  
  <tr>
    <td> Mirjet&euml; Hajdari </td>
	<td><address> <a href="mailto:mirjete.h@hotmail.com"> mirjete.h@hotmail.com </a></address> </td>
  </tr>
  
</table>


<hr>


<figure>
<div class="map">
<img src="images\map.png" title="map" alt="map photo" width=300 height=300>
<figcaption>
<pre><strong> Note:</strong>This is our location.</pre>
</figcaption>
<figure>

<div class ="dragzone">
<script src="js/jsquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL7ohhiyIpatW5G21_MXri5ZGYdI33F2g &callback=initMap"></script>
<script>
     x=navigator.geolocation;
     x.getCurrentPosition(success, failure);
     function success(position){
      var mylat = position.coords.latitude;
      var mylong =  position.coords.longitude;

      var coords= new google.maps.LatLng(mylat, mylong);

      var mapOptions = {
        zoom:16,
        center:coords,
        mapTypeid: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map"),mapOptions);
      var marker = new google.maps.Marker({map: map, position:coords});
     }
function failure(){
  $('#lat').php("<p>It didnt work. Coordinates not available.</p>");
}
</script>
<div id="map"></div>
<div id="lat"></div>
<div id="long"></div>

</div>
<div class="info">
<hr>
<h3 id="aboutus">About Us</h3>

<!--Associative Arrays-->
<p> 
  <?php
$members = array("FIEK"=>"5", "FIM"=>"7", "FNA"=>"10");
echo "We are " .$members['FIEK'] . " students of computer engineering and we worked together on building this website. All of us are great animal lovers and thought there are other people who'd like to see pictures and informations about different animals in one place.Hopefully we achieved our goal to create a decent website with great information about our topic. We have put a lot of work and dedication to make it as great as possible. In the making of this website we were inspired specifically from this quote 'Unity is strength... when there is teamwork and collaboration, wonderful things can be achieved.' .";
?>
</p>

<mark> Thank You </mark>
<br/>
<button id="hide">Hide</button>

<button id="show">Show</button>
</div>
</nav>
</body>
</html>