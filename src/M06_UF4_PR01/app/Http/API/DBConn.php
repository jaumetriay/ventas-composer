<?php
 namespace App\Http\API;
 use \PDO; 
 use \PDOException; 
class DBConn{

    private $host; 
    private $dbname; 
    private $user; 
    private $password; 
    public $conn; 

    public function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'ventasempresa';
        $this->user = 'root';
        $this->password = '';      
    }

    public function connect()
    {
        $this->conn = null; 
        try 
        {
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch(PDOException $e)
        {
            echo 'Connection failed: ' . $e -> getMessage(); 
        }
        return $this->conn; 
    }

}