<?php
session_start();
session_destroy();
echo '<script>alert("Você foi desconectado"); location.href=("index.php");</script>';
?>