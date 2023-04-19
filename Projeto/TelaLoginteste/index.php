

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="">

<?php 

include_once('conexao.php');
$mensagem = '';
if($_POST){

    $login_conectar = $_POST['txtLogin'];
    $senha_conectar = $_POST['txtSenha'];


    $sql = $conn->query("
    select * from Contratante where login_contratante = '$login_conectar' and senha_contratante = '$senha_conectar'
    ");

    if($sql->rowCount() == 1){

        session_start();
        foreach($sql as $linha)
                {
                    $_SESSION['idUsuario'] = $linha[0];
                    $_SESSION['nomeUsuario'] = $linha[1];
                    $_SESSION['loginUsuario'] = $linha[11];
                }
                header('Location:/Projeto_Integrador_Final/home.php');
            }
            else
            {
                $sql = $conn->query("
                select * from Freelancer where login_freelancer = '$login_conectar' and senha_freelancer = '$senha_conectar'
                ");
                if($sql->rowCount() == 1)
                {
                session_start();
                foreach($sql as $linha)
                        {
                            $_SESSION['idUsuario'] = $linha[0];
                            $_SESSION['nomeUsuario'] = $linha[1];
                            $_SESSION['loginUsuario'] = $linha[17];
                        }
                        header('Location:/Projeto_Integrador_Final/home.php');
                }
                else
                {
                    $mensagem = '<div class="col-sm-12 p-2"><p>Usuário ou senha inválido</p></div>';
                } 
            }        
        }

?>
    <div class="containerLogin">
        <div class="bgBranco">
            <div class="caixa entrar">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Já está cadastrado?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btnEntrar">Entrar</button>
                    </div>
                </div>
            </div>
            <div class="caixa inscrever">
                <h2>Não possui conta??</h2>
                <button class="btnCadastrar">Cadastrar</button>
            </div>
        </div>
        <div class="caixaForm">
            <div class="form formEntrar">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="h3Entrar">Entrar agora</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="txtLogin" id="txtLogin" class="form-control" placeholder="Usuário">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="password" name="txtSenha" id="txtSenha" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="form-control">Entrar</button>
                        </div>
                    </div>
                    <?=$mensagem?>
                    <a href="form_CadastroContratante.php" class="esqueceu">Esqueci minha senha</a>
                </form>
            </div>
            <div class="form formInscrever">
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="h3Inscrever">Torne-se um freelancer</h3>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <button class=" btn-lg" formaction="../../../Projeto_Integrador_Final/form_CadastroFreelancer.php">Cadastrar como Freelancer</button>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <h3 class="h3Inscrever">Torne-se um colaborador</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="form_CadastroContratante.php"></a>
                            <button class="button form-control" formaction="../../../Projeto_Integrador_Final/form_CadastroContratante.php"> Cadastrar como colaborador</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>