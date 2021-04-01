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
    <link rel="stylesheet" type="text/css" href="_CSS/sidebar.css">
    <title>Fale Conosco </title>
    
</head>
<body>

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
            <form name="contato" action="email.php" method="post">
                <fieldset>
                    <legend>Envie sua sugestão!</legend>
                    <label for="c2">Assunto: <input type="text" id="c2" name="assunto"><br></label><br>
                    <label for="c1">Nome: &nbsp;&nbsp;&nbsp;<input type="text" id="c1" name="nome"><br></label><br>
                    <label for="c3">Sala: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="c3" name="sala"><br></label><br>
                    Período:  <br> <input type="radio" name="periodo" id="manha" value="Manhã" checked><label for="manha">Manhã</label><br>
                    <input type="radio" name="periodo" id="tarde" value="Tarde"><label for="tarde">Tarde</label><br>
                    <input type="radio" name="periodo" id="noite" value="Noite"><label for="noite">Noite</label><br><br>
                    <label for="c4"> <span id="gg"> Nos dê sugestões: </span><textarea id="c4" name="sugestao" maxlength="500"></textarea></label><br><br>
                   <center> <input type="submit" name="enviar" value="Enviar Dados"></center>

                    </fieldset>
            </form>
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
