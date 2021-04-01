<?php
$location = '_PERFIL/';

if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    $error = $_FILES['file']['error'];
    if ($error !== UPLOAD_ERR_OK) {
        echo 'Erro ao fazer o upload:', $error;
    } elseif (move_uploaded_file($tmp_name, $location . $name)) {
        echo 'Uploaded';    
    }
} else {
    echo 'Selecione um arquivo para fazer upload';
}



