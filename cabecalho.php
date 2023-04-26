<?php include_once('autenticar.php'); ?>
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

                <li class="nav-item ola-usuario">
                    <div class="row d-flex flex-column">
                        <p class="ola">Olá,</p>
                        <button class="botaoUsuario" id="botaoUsuario">
                            <p class="usuario" id="usuario"><?= $nomeUsuario ?></p>
                        </button>

                        <div class="menuUsuario" id="menuUsuario">
                            <p class="pt-3 px-0 btoAdicionarProjeto btoMenuUsuario">Adicionar projeto</p>
                            <p class="pt-1 px-0 btoPerfil btoMenuUsuario">
                                <a href="perfil_contratante.php" style="text-decoration: none;">
                                    Perfil
                                </a>
                            </p>
                            <p class="py-1 px-0 btoSair btoMenuUsuario">
                                <a href="autenticar_sair.php" style="text-decoration: none;">
                                    Sair
                                </a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
        </div>
    </div>
</nav>

<script src="js/jquery-3.6.4.js"></script>
<script>
    $(document).ready(function() {
        $('#botaoUsuario').click(function() {
            $('#menuUsuario').toggle();
        })
    });
</script>