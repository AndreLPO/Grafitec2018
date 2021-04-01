<?php
require_once("conexao.php");
if ($_POST) {
	$nomep = $_POST['np'];
	$qtdp = $_POST['qp'];
	$precop = $_POST['pp'];
	$subt = $_POST['sp'];

	echo "Compra Finalizada";
	$sql = "INSERT INTO reserva(quantidade, subtotal, valor) VALUE ('$qtdp' ,'$subt', '$precop')";
	mysqli_query($conexao,$sql);

}else{
	echo "<script>alert('error')";
}

?>