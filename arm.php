<?php
$banco = "tcc_comp";
$conexao = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexao,$banco);
$testearm = $_POST["selecao"];

if ($testearm == "") {
    
    $armario = "bloco_a";
}else{
    $armario = $_POST["selecao"];
}

//define quantos resultados vc quer por pagina
include("armario.php");

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
    <title>Armários</title>
   
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

<?php 
                $sql = "SELECT * FROM $armario";
                $result = mysqli_query($conexao, $sql);


?>
          <center><form name="bloco" method="post" action="arm.php">
                <select name="selecao">
                    <option value="bloco_a">Bloco A</option>
                    <option value="bloco_b">Bloco B</option>
                    <option value="bloco_c">Bloco C</option>
                    <option value="bloco_e">Bloco E</option>
                </select>

                <input type="submit" name="att" value="->">
            </form>
            </center>
                <table id="tabarm" class="tab1">
                        <caption> Armários </caption>
                        <thead>
                        <tr  >
                            <th  width="79">Número</th>
                            <th  rowspan="3" width="150">Estado do Armário</th>
                            <th  width="79">Preço</th>
                        </tr></thead></table>
<?php
                
                $sql = "SELECT * FROM $armario";
                $result = mysqli_query($conexao, $sql);

                        
                 while ($row = mysqli_fetch_array($result)){
                 echo '
                 <table class="tab1">
                <td class="ptt1" width="79">'.$row['numero'] . ' </td>  <td class="ptt2" rowspan="3" width="150">' . $row['estado'] . '</td> <td class="ptt3" width="79"> ' . $row['preco'] . '</td><br></table> ';
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
    <li><a href="arm.php?"> Armários</li></a>
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
