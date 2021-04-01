<?php

include_once("conexao.php");

$verif = $_POST["lugar"];
 
 
  ?>

<html>
<head>

    <title>loading...</title>
    <script type="text/javascript">
    
    function loginsuccessfully() { 
              alert("Logado com sucesso! Clique em ok e aguarde um instante!", setTimeout("window.location='painel.php'")); 
    }

    
   
    function loginfailed() {
        alert("Login falhou", setTimeout("window.location='index.php'"));

    }
    
    </script>

</head>
<body>
</body>
</html>
    <?php

$usuario=strip_tags($_POST["usuario"]);
$senha = $_POST["senha"];

    if ($verif == "cad_alunos") {
    $sql = mysqli_query($conexao, "SELECT * FROM $verif WHERE usuario_alunobd = '$usuario' AND senha_alunobd = '$senha'") or die(mysql_error());
    $row = mysqli_num_rows($sql);

 }
    if ($verif == "cad_func") {
    $sql = mysqli_query($conexao, "SELECT * FROM $verif WHERE usuario_funcbd = '$usuario' AND senha_funcbd = '$senha'") or die(mysql_error());
    $row = mysqli_num_rows($sql);

 }
    if ($verif == "cad_prof") {
    $sql = mysqli_query($conexao, "SELECT * FROM $verif WHERE usuario_profbd = '$usuario' AND senha_profbd = '$senha'") or die(mysql_error());
    $row = mysqli_num_rows($sql);

 }
    if($row > 0 && $verif == "cad_func") {
    session_start();
    $_SESSION["usuario0"] = $usuario;
    $_SESSION["senha"] = $senha;
    $_SESSION["batata"] = $_POST["lugar"];
    
    

    echo "<script>loginsuccessfully()</script>";


}
    if($row > 0 && $verif == "cad_alunos") {
    session_start();
    $_SESSION["usuario0"] = $usuario;
    $_SESSION["senha"] = $senha;
    $_SESSION["batata"] = $_POST["lugar"];

    echo "<script>loginsuccessfully()</script>";


}
    if($row > 0 && $verif == "cad_prof") {
    session_start();
    $_SESSION["usuario0"] = $usuario;
    $_SESSION["senha"] = $senha;
    $_SESSION["batata"] = $_POST["lugar"];

    echo "<script>loginsuccessfully()</script>";


}else{
    echo "<script>loginfailed()</script>";
}
?>