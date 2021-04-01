<?php 
require_once("conexao.php");

if (isset($_GET['id_post'])) {
$id = $_GET['id_post'];
	$deletar=mysqli_query($conexao, "DELETE FROM post WHERE id_post='$id'");


	if ($deletar) {
		echo '<script>alert("DELETADO"); location.href=("painel.php");</script>';
	}else{
		echo '<script>alert("ERRO AO DELETAR POST");location.href=("painel.php");</script>';
	}
}


 ?>