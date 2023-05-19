<?php
// include_once('autenticar.php'); 
?>

<style>
    .dropdown-toggle {
        background: transparent;
        border: none;
        outline: none;
        color: var(--amarelo-texto);
        font-size: 25px;


    }

    .ola {

        margin-bottom: 0;
    }
</style>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <img src="img/logo projeto - amarelo neon.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-hamburg">
                <i class="fa-solid fa-bars fa-xl"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tela_freelancers.php">Freelancers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TelaContratante.php">Contratantes</a>
                </li>

                <!-- <li class="nav-item ola-usuario">
                    <div class="row d-flex flex-column">
                        <p class="ola">Olá,</p>
                        <button class="botaoUsuario" id="botaoUsuario">
                            <p class="usuario" id="usuario"></p>
                        </button>


                    </div>
                </li> -->
                <li class="nav-item dropdown me-4">
                    <button class="dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$nomeUsuario?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="home_autenticar.php">Minha home</a></li>
                        <li><a class="dropdown-item" href="perfil_autenticar.php">Meu perfil</a></li>
                        <li><a class="dropdown-item" href="autenticar_sair.php">Sair</a></li>
                    </ul>
                </li>

            </ul>

            <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        </div>
    </div>
</nav>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script>

</script>