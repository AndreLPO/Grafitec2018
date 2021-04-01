<?php
include_once("conexao.php");
$dia = date("d/m/y");


 ?>
<?php

    session_start();
    $usur = ucfirst($_SESSION["usuario0"]);
    $nivel = $_SESSION['batata']; 
    //$verif2 = $_SESSION["lugar"];
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
    <link rel="stylesheet" type="text/css" href="_CSS/Animated.css">
    <link rel="stylesheet" type="text/css" href="_CSS/sidebar.css">
    
    <title>Página Inicial</title>
    

</head>
    <body>
<section class="wrapper">
       
 <header  class="wow fadeInDown" data-wow-duration="1s" id="cabecalho">
           
                
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
            <a class="btn-close" onclick="fecharMenu()"> &times;</a>
           <!-- <a href="user.php">Usuário</a>--> 
           <a href="painel.php"> Home</a>
             
            <a href='user.php'> Usuário</a> 
                
            <a href="logout.php">Sair </a>


            <?php  if ($nivel == "cad_func") {
                echo "<a href='post.php'> Criar Avisos</a>";
            }  ?>
            
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
        </section>
        <div id="interface">
        <section  id="conteudo">
            <article class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" id="p01">


            <header id="cabecalho-artigo">
                <hgroup>
                    <h3 >Cópias & Impressões</h3>
                    <h1 >Gráfica Polivalente </h1>
                    <h3 class="direita">Acessado em <?php echo "$dia";?></script></h3>
                </hgroup>
            </header>

              <!-- Noticias/Novidades/Avisos da Gráfica -->

            <?php 
                

                require_once("conexao.php");
                $sql="SELECT * FROM post ORDER BY id_post DESC";
    $result=mysqli_query($conexao,$sql);
    while($row=mysqli_fetch_array($result)){
        $id=$row['id_post'];
        $titulo=$row['titulo'];
        $subtitulo= strip_tags($row['subtitulo']);
        $conteudo=strip_tags($row['conteudo']);
        
        ?>
     <h2><?php echo $titulo;?> - <small><?php echo $subtitulo; ?></small></h2>
     <p><?php echo $conteudo;?>
     
     </p><br/>
     <?php if ($nivel == "cad_func") {
       echo '<a id="formatdel" href="del.php?id_post='.$id.'">Deletar</a>';  
     }  ?>
     <hr/>

<?php 
}
?> 

            <h2>Qual a proposta?</h2>
            <p>O principal objetivo do projeto é fazer um sistema de estoque e venda para a gráfica da escola Polivalente de Americana.
O Sistema será utilizado para fazer a contagem dos produtos que entram e saem do estoque e armazenar os preços dos mesmos. Além disso, será utilizado para fazer o cadastro dos alunos, funcionários e professores para a utilização do Web Site. O Sistema fará também a manutenção de todos os serviços da gráfica, como o controle do aluguel de armários e cadastro dos alunos que queiram contribuir com a APM.
O Web Site será utilizado como uma ponte entre os usuários do sistema e a gráfica, a interação com o site será limitada através do sistema de hierarquia, ou seja, dependendo do seu grau de acesso, o usuário terá mais ou menos restrições.</p>



                <video controls>
                    <source src="_VIDEO/mancini.mp4" type="video/mp4">                
                </video>
                    

           
            <h2>Data de Apresentação</h2>


            <p>O projeto será apresentado durante a 19ª edição da Expotec, evento que ocorre na ETEC Polivalente de Americana, no dia 05/12/2018. No evento vários projetos dos cursos são apresentados para a escola e para visitantes onde os projetos serão avaliados. </p>


            <figure class="foto-legenda">
                <img src="_IMGS/substitutoB.jpg"/>
                <figcaption><h3>Imagem do Curso de Informática</h3>
                    <p>Não sei o que por ainda</p></figcaption>
            </figure>
        <h2> Quem somos </h2>
        
        <ul id="us">
            <li id="pt01"><img id="ft01" src="_PERFIL/eu.jpg"><br/><br/><h2 style="border-radius: 0px">André</h2><p style="text-indent: 20px; padding: 10px;"> Sou responsável pelo site e blá blá blá</p></li>
            <li id="pt02"><img id="ft02" src="_PERFIL/gi.jpg"><br/><br/><h2 style="border-radius: 0px">Giovanna</h2><p style="text-indent: 20px; padding: 10px;"> Sou responsável pela documentação e blá blá blá</p></li>
            <li id="pt03"><img id="ft03" src="_PERFIL/siconello.jpg"><br/><br/><h2 style="border-radius: 0px;">Henrique</h2><p style="text-indent: 20px; padding: 10px;"> Sou responsável pelo software e blá blá blá</p></li>
            <li id="pt04"><img style="width: 160px; height: 160px;" id="ft04" src="_PERFIL/pira2.jpeg"><br/><br/><h2 style="border-radius: 0px">Lucas</h2><p style="text-indent: 20px; padding: 10px;"> Sou responsável pelo design e blá blá blá</p></li>
        </ul>

        </article>

    </section>
            <aside class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s" id="secundaria">
               
                <!--<span class="propaganda">-->
<nav id="menu">
<ul>
    <li><a href="painel.php">home</a> </li>
    <li><a href="loja.php" target="_blank">Loja! </a> </li>
    <li><a href="contato.php" >Fale Conosco </a> </li>
    <li><a href="arm.php">Armários </a> </li>
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

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="js/modal-window.js"></script>
        <script src="js/modal-init.js"></script>
        <script src="js/modal-window-extra.js"></script>
</body>
</html>