
<?php
require_once("conexao.php");
require_once("carrinho.php");

 class funcoes
 {
 	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
 	function colocar($qtd,$sub,$preco) {
 		try{
 			$stmt = $this->conn->prepare("INSERT INTO reserva(quantidade, subtotal, valor) values(:quantidade, :subtotal, :valor)");
			$stmt->bindparam(":quantidade", $qtd);
			$stmt->bindparam(":subtotal", $sub);
			$stmt->bindparam(":valor", $preco);
			$stmt->execute();
			return $stmt;
 		}catch(PDOException $e)
		{
			echo $e->getMessage();
		}			
 	}
 }

/*function getTotalCart() {
	
	$total = 0;

	foreach($_SESSION['carrinho'] as $ln) {
		$total += $ln['sub'];
	} 
	return $total;
}
*/




?>