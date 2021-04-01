<?php
//require_once("../conexao.php");
if ($_POST) {
	$nomep = $_POST['np'];
	$qtdp = $_POST['qp'];
	$precop = $_POST['pp'];
	$subt = $_POST['sp'];

	echo $qtdp.$nomep;
}else{
	echo "<script>alert('error')";
}

?>