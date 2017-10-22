<?php

class database {
	//creds
	private $dbn = 'mysql:dbname=sessions;host=localhost;';
	private $user = 'root';
	private $password = '';

	public $db;

 
    // get the database connection
    public function getConn(){
        $this->db = null;
        try{
 		  $this->db = new PDO($this->dbn, $this->user, $this->password);
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
          echo "Connection error: " . $exception->getMessage();
        }
        return $this->db;
    }
}



?>