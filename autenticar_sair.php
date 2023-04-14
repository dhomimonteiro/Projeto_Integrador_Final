<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location:/Projeto_Integrador_Final/Projeto/TelaLoginTeste/index.php');
?>