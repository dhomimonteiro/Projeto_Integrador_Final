
<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query('select * from Freelancer');
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($row = $sql->fetch()) {
    $nome = $row[1];
    echo '                             
    <div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <h5 class="card-title">' . $nome . '</h5>
                <hr>
                <div class="row">

                    <div class="col-sm-12">
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias sapiente quos iste velit, facilis esse explicabo, necessitatibus voluptatem ut earum similique reprehenderit laborum voluptas! Nesciunt est facere amet quidem quasi.</p>
                        
                    </div>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-row justify-content-center">
                <div class="foto-freelancer bg-dark mt-3">
                    <img src="" alt="">
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
                <button class="btn btn-primary">Contratar</button>
            </div>
        </div>
    </div>
</div>
        ';
}
