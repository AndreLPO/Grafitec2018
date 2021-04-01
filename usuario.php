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
    <title>Impressão</title>
    
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
        <article id="p01">


            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>Cópias & Impressões</h3>
                    <h1>Gráfica Polivalente</h1>
                    <h3 class="direita">Atualizado em 11/Fevereiro/2018</h3>
                </hgroup>
            </header>

            <h2>Impressão!</h2>
            <table id="tab1" class="tabelapreco">
                <caption>Cópias/Impressões/Scanner <span>2018</span></caption>

                <tr> <td class="ptt1">Qtd:</td><td class="ptt2">Preço(Sócio) </td><td class="ptt3">Preço(N/ Sócio)</td></tr>
                <tr><td class="ptt1" rowspan="1">1:</td><td class="ptt2"> R$0,25 </td><td class="ptt3"> R$0,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">2:</td><td class="ptt2"> R$0,50 </td><td class="ptt3"> R$0,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">3:</td><td class="ptt2"> R$0,75 </td><td class="ptt3"> R$1,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">4:</td><td class="ptt2"> R$1,00 </td><td class="ptt3"> R$1,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">5:</td><td class="ptt2"> R$1,25 </td><td class="ptt3"> R$2,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">6:</td><td class="ptt2"> R$1,50 </td><td class="ptt3"> R$2,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">7:</td><td class="ptt2"> R$1,75 </td><td class="ptt3"> R$2,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">8:</td><td class="ptt2"> R$2,00 </td><td class="ptt3"> R$3,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">9:</td><td class="ptt2"> R$2,25 </td><td class="ptt3"> R$3,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">10:</td><td class="ptt2"> R$2,50 </td><td class="ptt3"> R$4,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">11:</td><td class="ptt2"> R$2,75 </td><td class="ptt3"> R$4,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">12:</td><td class="ptt2"> R$3,00 </td><td class="ptt3"> R$4,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">13:</td><td class="ptt2"> R$3,25 </td><td class="ptt3"> R$5,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">14:</td><td class="ptt2"> R$3,50 </td><td class="ptt3"> R$5,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">15:</td><td class="ptt2"> R$3,75 </td><td class="ptt3"> R$6,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">16:</td><td class="ptt2"> R$4,00 </td><td class="ptt3"> R$6,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">17:</td><td class="ptt2"> R$4,25 </td><td class="ptt3"> R$6,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">18:</td><td class="ptt2"> R$4,50 </td><td class="ptt3"> R$7,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">19:</td><td class="ptt2"> R$4,75 </td><td class="ptt3"> R$7,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">20:</td><td class="ptt2"> R$5,00 </td><td class="ptt3"> R$8,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">21:</td><td class="ptt2"> R$5,25 </td><td class="ptt3"> R$8,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">22:</td><td class="ptt2"> R$5,50 </td><td class="ptt3"> R$8,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">23:</td><td class="ptt2"> R$5,75 </td><td class="ptt3"> R$9,20 </td></tr>


            </table>
<br><br>
            <table id="tab2" class="tabelapreco">
                <caption>Cópias/Impressões -A3 <span>2018</span></caption>

                <tr> <td class="ptt1">Qtd:</td><td class="ptt2">Preço(Sócio) </td><td class="ptt3">Preço(N/ Sócio)</td></tr>
                <tr><td class="ptt1" rowspan="1">1:</td><td class="ptt2"> R$0,40 </td><td class="ptt3"> R$0,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">2:</td><td class="ptt2"> R$0,80 </td><td class="ptt3"> R$0,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">3:</td><td class="ptt2"> R$0,75 </td><td class="ptt3"> R$1,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">4:</td><td class="ptt2"> R$1,00 </td><td class="ptt3"> R$1,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">5:</td><td class="ptt2"> R$1,25 </td><td class="ptt3"> R$2,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">6:</td><td class="ptt2"> R$1,50 </td><td class="ptt3"> R$2,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">7:</td><td class="ptt2"> R$1,75 </td><td class="ptt3"> R$2,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">8:</td><td class="ptt2"> R$2,00 </td><td class="ptt3"> R$3,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">9:</td><td class="ptt2"> R$2,25 </td><td class="ptt3"> R$3,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">10:</td><td class="ptt2"> R$2,50 </td><td class="ptt3"> R$4,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">11:</td><td class="ptt2"> R$2,75 </td><td class="ptt3"> R$4,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">12:</td><td class="ptt2"> R$3,00 </td><td class="ptt3"> R$4,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">13:</td><td class="ptt2"> R$3,25 </td><td class="ptt3"> R$5,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">14:</td><td class="ptt2"> R$3,50 </td><td class="ptt3"> R$5,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">15:</td><td class="ptt2"> R$3,75 </td><td class="ptt3"> R$6,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">16:</td><td class="ptt2"> R$4,00 </td><td class="ptt3"> R$6,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">17:</td><td class="ptt2"> R$4,25 </td><td class="ptt3"> R$6,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">18:</td><td class="ptt2"> R$4,50 </td><td class="ptt3"> R$7,20 </td></tr>
                <tr><td class="ptt1" rowspan="1">19:</td><td class="ptt2"> R$4,75 </td><td class="ptt3"> R$7,60 </td></tr>
                <tr><td class="ptt1" rowspan="1">20:</td><td class="ptt2"> R$5,00 </td><td class="ptt3"> R$8,00 </td></tr>
                <tr><td class="ptt1" rowspan="1">21:</td><td class="ptt2"> R$5,25 </td><td class="ptt3"> R$8,40 </td></tr>
                <tr><td class="ptt1" rowspan="1">22:</td><td class="ptt2"> R$5,50 </td><td class="ptt3"> R$8,80 </td></tr>
                <tr><td class="ptt1" rowspan="1">23:</td><td class="ptt2"> R$5,75 </td><td class="ptt3"> R$9,20 </td></tr>


            </table>
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
                <p>Gráfica Poli &trade; 2018 - by Grafitec<br/>
                    <a target="_blank" href="https://www.facebook.com/"> Facebook</a> | <a target="_blank" href="https://www.facebook.com/">Twitter</a></p>
            </footer>
        </div>


</body>
</html>
