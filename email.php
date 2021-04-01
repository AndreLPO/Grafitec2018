<?php
$assunto = $_POST["assunto"];
$corpo   = "
    Assunto: ".$_POST['assunto']."
    Nome: ".$_POST['nome']."
    Sala: ".$_POST['sala']."
    Período: ".$_POST['periodo']."
    Sua Sugestão: ".$_POST['sugestao']."
";
mail('andore1599@gmail.com',$assunto,$corpo,'From: Guariparibuzios@minhaarte.com');
echo "<script>alert('E-Mail enviado com sucesso!')";
?>