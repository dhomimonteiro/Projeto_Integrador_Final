<?php
session_start();
if($_SESSION && isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']) && isset($_SESSION['loginUsuario']))
{
    $idUsuario = $_SESSION['idUsuario'];
    $nomeUsuario = $_SESSION['nomeUsuario'];
    $loginUsuario = $_SESSION['loginUsuario'];
}
else{
    header('Location:index.php');
}
?>