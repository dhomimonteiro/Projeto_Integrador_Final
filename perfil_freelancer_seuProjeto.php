<?php
include_once('Projeto/TelaLoginteste/conexao.php');


try {
    $sql = $conn->query("SELECT projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
    contratante.img_contratante, linguagem.nome_linguagem from projeto
    INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
    INNER JOIN Freelancer on projeto.id_freelancer_projeto = freelancer.id_freelancer
    INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where projeto.id_freelancer_projeto = $idUsuario and projeto.status_projeto = 'Em andamento';");

    while ($row = $sql->fetch()) {
        $nome_projeto = $row[0];
        $descricao_projeto = $row[1];
        $status_projeto = $row[2];
        $versao_projeto = $row[3];
        $nome_contratante = $row[4];
        $img_contratante = $row[5];
        $linguagem = $row[6];

        echo '
        <div class="card">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-title pt-3 ps-3">
                                <h4>'.$nome_projeto.'</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="nome-empresa">'.$nome_contratante.'</h5>
                                        <p class="descricao-seu-projeto">'.$descricao_projeto.'
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-2 row">
                        <div class="col-sm-5 col-md-4 col-lg-2 status">
                            <p class="text-center">'.$status_projeto.'</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 d-flex align-items-center">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="img-empresa">
                                <img src="'.$img_contratante.'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        ';
    };
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>
