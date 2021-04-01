<?php
session_start();
//$_POST["lugar"] = $_SESSION["lugar"];
//$_SESSION["lugar"] = $verif2;
//$_SESSION["lugar"] = $_POST["lugar"];
if(isset($_SESSION["usuario0"]) || isset($_SESSION["senha"])){

    header("Location: painel.php");

}else{
?>
     <html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="_CSS/estilo.css">

</head>
<body>


<center>

<header>
    <img src="_IMGS/etepa.png"/>
</header>
<form name="fomrlogin" method="post" action="login.php">
    <select name='lugar'>
    <option value='cad_prof'>Professor</option>
    <option value='cad_alunos'>Aluno</option>
    <option value='cad_func'>Funcionário</option>
</select>
    <p> Login:  <input type="text" name="usuario" size="25" maxlength="20" placeholder="Digite seu usuario"/ required=""><br>
        Senha:  <input type="password" name="senha" size="25" maxlength="8" placeholder="Digite sua senha" required="" /><br>
<input type="submit" name="Login" value="Logar"/> </p>
</center>
</form>
</body>
</html>;
<?php
}

?>
