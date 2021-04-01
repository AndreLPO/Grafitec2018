
<?php
include_once("conexao.php");
//include_once("funcao.php");
//$totalf = getTotalCart();
?>


<?php 
session_start();


$nivel = $_SESSION['batata'];
 $usur = ucfirst($_SESSION["usuario0"]);
if(isset($_SESSION["usuario0"]) || isset($_SESSION["senha"])){



}else{

    header("Location: index.php");
    exit;
}


if(!isset($_SESSION['carrinho'])){
	$_SESSION['carrinho'] = array();
}






//adiciona produto

if(isset($_GET['acao'])){

	//Adicionar carrinho
	if ($_GET['acao'] == 'add') {
		$id = intval($_GET['codigo']);
		if (!isset($_SESSION['carrinho'] [$id])) {
			$_SESSION['carrinho'] [$id] = 1; 
			



		}else{
			$_SESSION['carrinho'] [$id] += 1;
		}
	}

//remover do carrinho

	if ($_GET['acao'] == 'del') {
		$id = intval($_GET['codigo']);
		if (isset($_SESSION['carrinho'] [$id])) {
			unset($_SESSION['carrinho'] [$id]);
		}
	}

//Altera e atualiza a quantidade de itens no carrinho
	if ($_GET['acao'] == 'up') {
		if (is_array($_POST['prod'])) {
			foreach ($_POST['prod'] as $id => $qtd) {
				$id = intval($id);
				$qtd = intval($qtd);
				if (!empty($qtd) || $qtd <>0) {
					$_SESSION['carrinho'] [$id] = $qtd;
				}else{
					unset($_SESSION['carrinho'] [$id]);
				}
			}		
		}
	
	}


	}


	if ($_GET['acao'] == 'enviar'){
if (isset($_POST['env'])) {

				$preco = $_POST['preco'];
				$sub = $_POST['sub'];
				$qtd = $_POST['qtd'];
				$funcao = new funcoes();
				if($funcao->colocar($qtd, $sub, $preco))
				{
					echo "<script>mandado()</script>";
					
				}else{
					echo '<script>alert("deu erro");</script>';
				}
			}
		}


 ?>



<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	function mandado() {
        alert("Logado com sucesso! Clique em ok e aguarde um instante!", setTimeout("window.location='loja.php'"));
</script>
	<!-- <link rel="stylesheet" type="text/css" href="_CSS/Inicial.css">  -->
	<meta charset="UTF-8">
	<title>Testando carrinho</title>
</head>
<body>









<html lang="pt-br">
<head>


    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="_CSS/sidebar.css">
    <link rel="stylesheet" type="text/css" href="_CSS/Inicial.css">
    <title>APM</title>
    
</head>
<body>

<header id="cabecalho">
     <img id="horarios" src="_IMGS/horarios at.png">
        <span class="botao">
            <a href="#" onclick="abrirMenu()">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="rgba(0,0,0,.5)"
                    stroke-width="5"/>
                    <path d="M0,14 30,14" stroke="rgba(0,0,0,.5)"
                    stroke-width="5"/>
                    <path d="M0,23 30,23" stroke="rgba(0,0,0,.5)"
                    stroke-width="5"/>

                </svg>
            </a>
         </span>

         <div id="dentro-sidebar" class="side-nav">
                <img id="perfil" src="_IMGS/icone.png">
            <center><p ><?php echo $usur;  ?></p></center>        
            <a href="#" class="btn-close" onclick="fecharMenu()"> &times;</a>
            <a href="testejs.html">Usuário</a> 
            <a href="logout.php">Sair </a>
            <?php  if ($nivel == "cad_func") {
                echo "<a href='post.php'> Criar Avisos</a>";
            }  ?>
            <a href="#">Home</a>
        </div>

        <script>
            function abrirMenu(){
                document.getElementById('dentro-sidebar').style.width = '250px';
                document.getElementById('p1').style.marginRight = '250px';
            }    

            function fecharMenu(){
                document.getElementById('dentro-sidebar').style.width = '0px';
                document.getElementById('p1').style.marginRight = '0px';
            }  
        </script>
    
</header>
<div id="interface">
    <section id="conteudo">
        <article id="p1">


            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>Cópias & Impressões</h3>
                    <h1>Gráfica Polivalente</h1>
                    <h3 class="direita">Atualizado em 11/Fevereiro/2018</h3>
                </hgroup>
            </header>


            		<?php
	$array[1] = 10;
	$array = array(1 => 10, 2 => 1); 

	?>

<table>
	<caption>Carinho de compras</caption>
		<thead>
			<tr>   <!-- "configurações" da tabela -->
				<th rowspan="5" width="244">Produto</th>
				<th  width="79">Quantidade</th>
				<th  width="89">Preço</th>  
				<th  width="100">Subtotal</th>
				<!--<th width="100">Total</th>-->
				<th  width="64">Remover</th>
			</tr>
		</thead>
			<form action="?acao=up" method="post">
		<tfoot>
			<tr>
				<td colspan="5"><input type="submit" value="Atualizar Carrinho"></td>
			
			<tr>
				<td colspan="5"><a href="loja.php">Continue Comprando</a></td>
			
		</tfoot>

		<tbody>
				<?php
					if (count($_SESSION['carrinho']) == 0) {     /* verificando se o carrinho está vazio e adicionando caso não esteja */
						echo "<tr><td>Não Há Produtos Encomendados</td></tr>";
					}else{
						foreach ($_SESSION['carrinho'] as $id => $qtd) {
							$sql = "SELECT * FROM cad_produtos WHERE codigo='$id'";
							$qr = mysqli_query($conexao,$sql) or die(mysql_error());
							$ln = mysqli_fetch_assoc($qr);
							
							$nome = $ln['produto'];
							$preco = number_format($ln['valor_venda'], 2, ',', '.');
							$sub = number_format($ln['valor_venda'] * $qtd, 2, ',', '.');
							

							
						
			/* criando a tabela do carrinho */
			echo '<tr>
				<td><input id="nomecar" type="text" value="'.$nome.'" disabled /></td>
				<td><input id="quantidade" type="number" size="3" name="prod['.$id.']" value="'.$qtd.'"/></td>
				<td><input id="precocar" type="label" value="R$ '.$preco.'" disabled/></td>
				<td><input id="subcar" type="text" value=" R$ '.$sub.'" disabled /></td>
				
				<td><a href="?acao=del&codigo='.$id.'">remove</a></td>

			</tr>';	

							


						}
					
		}
		//$total = number_format($totalf, 2, ',', '.');
		//echo ';<td>R$ '.$total.'<td>'

				?>
			
		
		</tbody>

			</form>
				<td colspan="5"><button id="enviarcar" > Enviar </button></td>
				<td colspan="5">
			
</td>
</table>
<script src="scriptajax.js" type="text/javascript"></script>


        </article>
    </section>
           <aside id="secundaria">
               
                <!--<span class="propaganda">-->
<nav id="menu">
<ul>
    <li><a href="painel.php">home</a> </li>
    <li><a href="loja.php" target="_blank">Loja! </a> </li>
    <li><a href="contato.php" >Fale Conosco </a> </li>
    <li><a href="arm.php" >Armários </a> </li>
    <li><a href="usuario.php" >Impressão </a> </li>
    <li><a href="apm.php">APM </a> </li>
</ul>
</nav>
               </span>
                
            </aside>

            





          










            <br><br><br><br>
<!-- teste -->
         












<!-- rodapé -->
            <footer id="rodape">
                <p>Gráfica Poli &trade; 2018 - by Grafitec<br/>
                    <a target="_blank" href="https://www.facebook.com/"> Facebook</a> | <a target="_blank" href="https://www.facebook.com/">Twitter</a></p>
            </footer>
        </div>


</body>
</html>
