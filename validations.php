<?php
if (!preg_match("/^[a-zA-Z ]*$/",$firstname))  {
  echo '<h4 class="heading">First Name must have only characters!</h4><br>';
}

else if (strlen($firstname)<3)
{
	 echo '<h4 class="heading">First Name must have at least 3 characters !</h4><br>';
}

if (!preg_match("/^[a-zA-Z ]*$/",$lastname))  {
  echo '<h4 class="heading">Last Name must have only characters !</h4><br>';
}

else if (strlen($lastname)<3)
{
	 echo '<h4 class="heading">Last Name must have at least 3 characters !</h4><br>';
}

else if (strlen($username)<6)
{
	echo '<h4 class="heading">Username must have at least 6 characters !</h4><br>';
}

else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password))  {
  echo '<h4 class="heading">Passwordi must have at least :<br>
  <li>8 characters</li>
  <li>An uppercase character</li>
  <li>A number</li>
   </h4><br>';
}

else if (!($password == $confirmpassword))
{
	echo '<h4 class="heading">Password is not confirmed !</h4><br>';
}

else if (!preg_match("/^([a-z0-9_\.-]+){4}@([a-z]+){3}\.([a-z\.]{2,6})$/",$email))  {
  echo '<h4 class="heading">Invalid e-mail !</h4><br>';
}

else if (!preg_match("/(0[1-9]|[12][0-9]|3[01])[-| \/.](0[1-9]|1[012])[-| \/.](19|20)\d\d/",$birthday))  {
  echo '<h4 class="heading"> Birthday must be dd/mm/yyyy from !</h4><br>';
}

else if (!preg_match("/^[a-zA-Z ]*$/",$vendbanimi))  {
  echo '<h4 class="heading">Vendbanimi duhet t&#235; p&#235;rmbaj&#235; vet&#235;m shkronja !</h4><br>';
}

else if($rez>0)
{
    echo '<h4 class="heading">Username-i "'.$username.'" is in database!</h4><br>';
}
//ketu duhet kodi per lidhjen me DBMS mirepo fajlli i tille akoma nuk eshte krijuar


?>