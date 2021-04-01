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


            <h2> Se torne sócio da APM! Veja os benefícios:</h2>
            <div id="ptapm">
            <h5 class="titapm">Descontos <span class="x"> Exclusivos com nossos parceiros</span></h5>
            <ul id="patro1">
                <li><a target="_blank" href="https://www.drogaraia.com.br/"> Droga Raia </a></li>
                <li><a target="_blank" href="http://www.oticascarol.com.br/marca?gclid=CjwKCAiA8rnfBRB3EiwAhrhBGuL1AM-4IKZIlcVBloNfVAydkeC3WjOzUs0zvMjBJcbjs10pLUQchhoCS7wQAvD_BwE"> Óticas Carol </a></li>
                <li><a target="_blank" href="https://www.acaciadeamericana.com.br/"> Farmácia Acácia</a></li><br/>
            
                <li><a target="_blank" href="https://www.facebook.com/pages/Boteco-Do-Bob-Avs%C3%A3o-Paulo/1414214775281178"> Boteco do BOB </a></li>
                <li><a target="_blank" href="http://labambina.com.br/"> Padaria La Bambina </a></li>
                <li><a target="_blank" href="https://www.facebook.com/AvalonRCAStore"> Avalon Store</a><br/></li><br/>
            
                <li><a target="_blank" href="http://www.mixidiomas.com.br/"> Mix Idiomas </a></li>
                <li><a target="_blank" href="https://pt-br.facebook.com/giftbrasiluniformes/"> Gift Brasil Uniformes </a></li>
                <li><a target="_blank" href="https://pt-br.facebook.com/invistatreinamentos/"> Invista Treinamento e Consultorias</a></li><br/>
            
                <li><a target="_blank" href="http://floriculturacolinaverde.com.br/"> Floricultura Colina Verde </a></li>
                <li><a target="_blank" href="http://believebatataria.blogspot.com/"> Believe Batataria </a></li>
                <li><a target="_blank" href="https://pt-br.facebook.com/americana.wushu"> Americana Wushu</a><br/></li><br/>
            </ul>

            <ul id="patro2">
                <li><a target="_blank" href="https://pt-br.facebook.com/pages/Academia-VO2/349270865160002"> Academia V02 </a></li>
                <li><a target="_blank" href="http://www.apusline.com.br/"> Apus Line </a></li>
                <li><a target="_blank" href="https://settecamisaria.com.br/"> Sette Camisaria</a></li><br/>
            
                <li><a target="_blank" href="https://pt-br.facebook.com/reaminformatica/"> Reami Informática </a></li>
                <li><a target="_blank" href="https://pt-br.facebook.com/kulikcursos/"> Kulik Cursos </a></li>
                <li><a target="_blank" href="http://tomodachidojo.com.br/">  Escola de Aikido Tomodachi Dojo</a><br/></li><br/>
            
                <li><a target="_blank" href="https://pt-br.facebook.com/restaurantedasaude2013/"> Restaurante Casa da Vó Nena </a></li>
                <li><a target="_blank" href="http://www.grafike.com.br/"> Grafike Impressões </a></li><br/>
            
                <li><a target="_blank" href="https://br.mundopsicologos.com/consultorios/aldimeire-da-silva-psicologa"> Psicóloga Aldimeire da Silva </a></li>
                <li><a target="_blank" href="http://www.dominospizzaamericana.com.br/"> Domino's Pizzaria </a></li><br/>
            </ul>
            </div>
            <div id="pt2apm">
            <h5 class="titapm2"> Benefícios <span class="x2"> Estudantes</span> </h5>
            <ul>
                <li>Descontos em prdutos da gráfica</li>
                <li>Descontos no aluguel de Armários</li>
                <li>Acesso ao wifi da escola <span id="mentira">Mentira</span></li>
            </ul>
            </div>
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
