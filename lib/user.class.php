<?php


class user 
{
	protected $UserForm;
	protected $PassForm;
	protected $Userarr;

	protected $User;


	public function __construct($db,$username,$password) 
	{
		$this->db = $db;
		$this->UserForm = $username;
		$this->PassForm = $password;
	}


	public function _CheckCred()
	{
		$q = "SELECT * FROM users WHERE user = ? AND pass  = ? limit 0,1";
		$sql = $this->db->prepare($q);
		$sql->bindParam(1, $this->UserForm);
		$sql->bindParam(2, $this->PassForm);
		$sql->execute();
			
		
		if($sql->rowCount() > 0)
		{
			$Userarr = $sql->fetch(PDO::FETCH_ASSOC);
			return $Userarr;
			//$submitted_pass = sha1($this->Pass);
			//if($submitted_pass == $userarr['pass'])
			//{
				//return $userarr;
			//}

		}
				//return false;
	}


	public function Login()
	{
		$Userarr = $this->_CheckCred();
		if($Userarr) {

		$this->Userarr = $Userarr; 
			
		$_SESSION['User_ID'] = $Userarr['id']; 
		$_SESSION['User_Name'] = $Userarr['user'];
		return $Userarr['id'];
		
		}
		return false;

	}

	public function GetUser()
	{
		return $this->Userarr;
	}



}



?>