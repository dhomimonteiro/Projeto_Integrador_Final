<style>
    .foto-freelancer {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
</style>
<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query('select * from Freelancer');
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($row = $sql->fetch()) {
    $nome = $row[1];
    $img = $row[2];
    $bio = $row[19];
    echo '                             
    <div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <h5 class="card-title">' . $nome . '</h5>
                <hr>
                <div class="row">

                    <div class="col-sm-12">
                        <p class="card-text">'.$bio.'</p>
                        
                    </div>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center">
                <div class="avaliacao d-inline">
                    <p class="text-center small">
                        Avaliação <br>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-stroke"></i>
                    </p>
                </div>
                <div class="foto-freelancer mt-1" style="height:100px;width:100px;">
                    <img src="'.$row[2].'" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-9">
            <div class="linguagens">';
    try {
        $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
        freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
        INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row[0];");
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    while ($linha = $sql2->fetch()){
        echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="small d-inline mx-2 px-2">'.$linha[3].'</p>';
    }
    echo            '</div>
            </div>
            <div class="col-sm-3 d-flex flex-row justify-content-center">
                <a class="btn btn-primary" href="tela_freelancer_autenticar.php">Contratar</a>
            </div>
        </div>
    </div>
</div>
        ';
}
