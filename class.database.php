<?php
class dbConnection {
	protected $dbConn ;
	public $dbUser ="root";
	public $dbName ="todo"; 
	public $serverName ="localhost";
	public $password ="";
	
	function connect(){
		
		try{
			 
			 $this ->dbConn =
			  new PDO("mysqli:host = $this->serverName;dbName = $this->dbName ",$this ->dbUser, $this->password);
			return $this ->dbConn;
		}
		catch(PDOException $e){
			return $e->getMessage();
			
		}
	}
}