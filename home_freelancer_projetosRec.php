<style>
    .btoCandidatar{
        background-color: var(--roxo-escuro);
        color: var(--cinza-claro);
    }

    .btoCandidatar:hover{
        background-color: var(--amarelo-texto);
        color: var(--roxo-escuro);
        transform: scale(1.1);
        transition: .1s;
    }

    .mensagem {
        font-family: 'Open sans', sans-serif;
        font-size: 25px;
        font-weight: 600;
    }
</style>

<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
    contratante.img_contratante, linguagem.nome_linguagem from projeto
    INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
    INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where id_linguagem_projeto in (
        SELECT freelancerLinguagem.id_linguagem_freelancerLinguagem
        FROM freelancerLinguagem where freelancerLinguagem.id_freelancer_freelancerLinguagem = $idUsuario
    );");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

    if ($sql->rowCount()== 0) {
        echo'
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-sm-6">
                <div class="mensagem text-center">Não há projetos com suas linguagens no momento :(</div>
            </div>
        </div>

        ';
    }

while ($row = $sql->fetch()) {
    $nome_projeto = $row[0];
    $descricao = $row[1];
    $status = $row[2];
    $versao = $row[3];
    $nome_contratante = $row[4];
    $img_contratante = $row[5];
    $linguagem = $row[6];

   echo '
   <div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-9"><h5 class="card-title d-inline">' . $nome_projeto . '</h5></div>
                <div class="col-sm-3">
                </div>
                
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h5>'.$nome_contratante.'</h5>
                    </div>
                    <div class="col-sm-12">
                        <p class="card-text">'.
                            $descricao
                        .'</p>

                    </div>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center">
                
                <div class="foto-freelancer mt-1">
                    <img src="'.$img_contratante.'" alt="" style="background-color: #888; border-radius:100%; height:200px;width:200px;">
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-sm-9"></div>
            <div class="col-sm-3 d-flex flex-row justify-content-center">
                <button class="btn btoCandidatar">Candidatar-se</button>
            </div>
        </div>
    </div>
</div>
';
   
}
?>


