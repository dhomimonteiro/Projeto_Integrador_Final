<?php 
session_start();
if($_SESSION && isset($_SESSION['idUsuario']) && isset($_SESSION['nomeUsuario']) && isset($_SESSION['loginUsuario']) && isset($_SESSION['tipoUsuario']))
{
    $idUsuario = $_SESSION['idUsuario'];
    $nomeUsuario = $_SESSION['nomeUsuario'];
    $loginUsuario = $_SESSION['loginUsuario'];
    $tipoUsuario = $_SESSION['tipoUsuario'];

    if ($tipoUsuario == 'freelancer') {
        header('Location: perfil_freelancer.php');
    }
    if ($tipoUsuario == 'contratante'){
        header('Location: home.php');
    }

}else{
    header('Location:Projeto/TelaLoginteste/index.php');
}

?>