<?php
include_once("conexao.php");
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
?>
<html lang="pt-br">
<head>


    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="_CSS/sidebar.css">
    <link rel="stylesheet" type="text/css" href="_CSS/Inicial.css">
    <title>Página do Usuário</title>
    
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


            <h2> Bem vindo, <?php echo $usur; ?> !</h2>




            <?php 

            if ($nivel = "cad_alunos") {
                $command = "SELECT RM, nome_comp_alunobd, rg_alunobd, dtnascimento_alunobd, email_alunobd, Turma FROM $nivel WHERE usuario_alunobd = '$usur'";
                $dados = mysqli_query($conexao, $command) or die(mysqli_error($conexao));
                $linha = mysqli_fetch_assoc($dados) or die(mysqli_error($conexao));
                $tot = mysqli_num_rows($dados);

                            
            
            }

            if ($tot > 0) {
                
                
                    ?>
                    <p>RM:<?php echo $linha["RM"]; ?></p> / <p>Nome Completo:<?php echo $linha["nome_comp_alunobd"]; ?></p> / <p>Rg:<?php echo $linha["rg_alunobd"]; ?></p> / <p>Data de Nascimento:<?php echo $linha["dtnascimento_alunobd"]; ?></p> / <p>Email:<?php echo $linha["email_alunobd"]; ?></p> / <p>Classe:<?php echo $linha["Turma"]; ?></p>
                    
            <?php } ?>

           






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

            




         












<!-- rodapé -->
            <footer id="rodape">
                <p>Gráfica Poli &trade; 2018 - by Grafitec<br/>
                    <a target="_blank" href="https://www.facebook.com/"> Facebook</a> | <a target="_blank" href="https://www.facebook.com/">Twitter</a></p>
            </footer>
        </div>


</body>
</html>
