<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT * from projeto where status_projeto = 'Em andamento'");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($row = $sql->fetch()) {
    $nome_projeto = $row[4];
    $descricao = $row[8];
    $status = $row[9];
    $versao = $row[7];
    $nome_contratante = $row[2];
    $img_contratante = $row[5];
    $lingaugem = $row[3];

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
                <button class="btn" style="background-color: var(--roxo-escuro); color: var(--cinza-claro);">Candidatar-se</button>
            </div>
        </div>
    </div>
</div>
';
   
}

?>

