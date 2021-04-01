<?php

include_once("conexao.php");


?>
<?php
session_start();
$usur = ucfirst($_SESSION["usuario0"]);
$nivel = $_SESSION['batata'];
if(isset($_SESSION["usuario0"]) || isset($_SESSION["senha"])){



}else{

    header("Location: index.php");
    exit;
}
?>
<html lang="pt-br">
<head>


    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="_CSS/Inicial.css">
    <link rel="stylesheet" type="text/css" href="_CSS/loja.css">
    <link rel="stylesheet" type="text/css" href="_CSS/sidebar.css">
    <title>Loja!</title>
</head>
<body>

<section class="wrapper">
       
 <header id="cabecalho">
           
                
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
         

          <img id="horarios" src="_IMGS/horarios at.png">

         <div id="dentro-sidebar" class="side-nav">
                <img id="perfil" src="_IMGS/logo2.png">
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
                document.getElementById('dentro-sidebar').style.width = '20%';
                document.getElementById('p1').style.marginRight = '250px';
            }    

            function fecharMenu(){
                document.getElementById('dentro-sidebar').style.width = '0px';
                document.getElementById('p1').style.marginRight = '0px';
            }  
        </script>
        
        </header>
        </section>
 <div id="interface">   
    <section id="conteudo">

        <article id="p01">


            <header id="cabecalho-artigo">
                <hgroup>
                    <h3 class="animated zoomIn">Cópias & Impressões</h3>
                    <h1>Gráfica Polivalente</h1>
                    <h3 class="direita">Atualizado em 11/Fevereiro/2018</h3>
                </hgroup>
            </header>
            



<h2>Encomende seu item da loja aqui! Clique em "Encomendar"</h2>

    





<?php
        header('Content-type: text/html; charset=utf-8');        
        $sql = "SELECT * FROM cad_produtos";
        $qr = mysqli_query($conexao,$sql) or die(mysql_error());

        while ($ln = mysqli_fetch_assoc($qr)) {

            echo "<article charset='UTF-8' id='produto_loja'>";
            echo "<h2 id='nomprod'>".$ln['produto']."</h2>";
            echo "<center><p id='precoprod'>Preço:R$".number_format($ln['valor_venda'], 2, ',', '.')."</p></center><br/>";
            //echo '<img src="_IMGS/'.$ln['imagem'].'"/> <br>';
            echo '<center><a href="carrinho.php?acao=add&codigo='.$ln['codigo'].'">comprar</a></center>';
            echo " <br><center> <a href='detalhes.php'>Ver Fotos </a></center>";
            echo "</article>";
        }
        ?>


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
            <footer id="rodape">
                <p>Gráfica Poli &trade; 2018 - by André Luiz<br/>
                    <a target="_blank" href="https://www.facebook.com/"> Facebook</a> | <a target="_blank" href="https://www.facebook.com/">Twitter</a></p>
            </footer>
        </div>


</body>
</html>

