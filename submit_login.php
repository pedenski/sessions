<?php
session_start();

if(isset($_POST['Submit'])) 
{
	include_once('lib/database.class.php');
	include_once('lib/user.class.php');

	$db = new database();
	$user = new user($db->getConn(), $_POST['username'],$_POST['password']);



		if($UserID = $user->Login()) //if true
		{
			
			$UserData = $user->GetUser();

			echo "Logged In: ".$UserID.". Hello ".$UserData['user'];
			echo "<br> <a href='index.php'>Index</a>";
		} 

		else 
		{
			echo "No such User";
		}





}//end isset
?>
