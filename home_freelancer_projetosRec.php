<?php
include_once('Projeto/TelaLoginteste/conexao.php');

try {
    $sql = $conn->query("SELECT * from projeto");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($row = $sql->fetch()) {
    $nome_projeto = $row[2];
    $data = $row[3];

   echo '
   <div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-9"><h5 class="card-title d-inline">' . $nome_projeto . '</h5></div>
                <div class="col-sm-3">
                <p class="d-inline">' . $data . '</p>
                </div>
                
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Nome contratante</h5>
                    </div>
                    <div class="col-sm-12">
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias sapiente quos iste velit, facilis esse explicabo, necessitatibus voluptatem ut earum similique reprehenderit laborum voluptas! Nesciunt est facere amet quidem quasi.</p>

                    </div>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center">
                
                <div class="foto-freelancer bg-dark mt-1">
                    <img src="" alt="" style="background-color: #888; border-radius:100%; height:200px;width:200px;">
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-sm-9"></div>
            <div class="col-sm-3 d-flex flex-row justify-content-center">
                <button class="btn btn-primary">Candidatar-se</button>
            </div>
        </div>
    </div>
</div>
';
   
}

?>

