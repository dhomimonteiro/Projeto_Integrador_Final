<?php
//Inicia a sessão
session_start();
    if($_SESSION && isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']) && isset($_SESSION['loginUsuario']) && isset($_SESSION['loginUsuario']))
    {
        $idUsuario = $_SESSION['idUsuario'];
        $nomeUsuario = $_SESSION['nomeUsuario'];
        $loginUsuario = $_SESSION['loginUsuario'];
        $tipoUsuario = $_SESSION['tipoUsuario'];

        //Se tiver informações de usuário, incluirá o cabeçalho para usuário.
        include_once('cabecalho.php');
    }else{
        //Se não tiver informações de usuário, incluirá o cabeçalho para anônimos..
        include_once('cabecalhoDeslogado.php'); 
    }