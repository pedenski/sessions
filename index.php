<?php
session_start();
include_once('lib/database.class.php');
include_once('lib/user.class.php');

if(isset($_SESSION['User_ID'])) 
{
	echo "this session id ".$_SESSION['User_ID'];
	echo "this session name ".$_SESSION['User_Name'];
}	
else 
{
	echo "no active session";
}




?>

<form id='login' action='submit_login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>

<a href="destroy.php"> Destroy Session </a>