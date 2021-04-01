<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "tcc_comp";

//$banco = "inicio";
$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die(mysqli_error($conexao));



 /**
 * 
 */
class Database
{   
    private $host = "localhost";
    private $db_name = "tcc_comp";
    private $username = "root";
    private $password = "";
    public $conn;
     
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>
