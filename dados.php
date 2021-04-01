<?php 
session_start();
    if($_POST['submit']){
            $subtitulo=$_POST['subtitulo'];
            $conteudo=$_POST['conteudo'];
            require_once("conexao.php");
            $sql = "INSERT INTO post(subtitulo, conteudo) VALUE ('$subtitulo' ,'$conteudo')";
                mysqli_query($conexao,$sql);
                echo '<script>alert("Entrada postada"); location.href=("painel.php");</script>';
        } else{
            echo '<script>alert("Deu Ruim"); location.href=("post.php");</script>';
        }
        ?>