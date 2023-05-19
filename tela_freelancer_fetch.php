<style>
    .foto-freelancer {
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }

    .btoCarregar {
        border: none;
        background: transparent;
        font-size: 1.4em;
        font-weight: 600;
    }

    .btoContratar {
        background-color: var(--amarelo-texto);
    }

    .btoContratar:hover {
        background-color: var(--roxo-escuro);
        color: var(--cinza-claro);
    }
</style>

<?php
include_once('Projeto/TelaLoginteste/conexao.php');

if ($_POST) {
    
    if (isset($_POST["request"]) && !empty($_POST["request"])) {
        $request = " where freelancerlinguagem.id_linguagem_freelancerLinguagem = " . $_POST["request"];

        $request = str_replace(",", " or freelancerlinguagem.id_linguagem_freelancerLinguagem = ", $request);

        $joaquim = "SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
        freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem, freelancer.nome_freelancer, freelancer.img_freelancer, freelancer.bio_freelancer from freelancerlinguagem
        INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem
        INNER JOIN Freelancer on freelancerlinguagem.id_freelancer_freelancerLinguagem = freelancer.id_freelancer $request";

        $query = $conn->query($joaquim);

        if ($query->rowCount() == 0) {
            echo '
            <div class="row mt-4">
                <div class="col-sm-12 d-flex flex-column align-items-center">
                    <h4> Ops, esse resultado não foi encontrado! :( </h4>
                    <img src="img/no-found-freelancer.png">
                </div>
            </div>
            ';
        }

        while ($row1 = $query->fetch()) {
            echo '                             
        <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-9">
                    <h5 class="card-title">' . $row1[4] . '</h5>
                    <hr>
                    <div class="row">
    
                        <div class="col-sm-12">
                            <p class="card-text">' . $row1[6] . '</p>
                            
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
                    <img src="' . $row1[5] . '" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
                </div>
            </div>
    
            </div>
            <div class="row mt-3">
                <div class="col-sm-9">
                <div class="linguagens d-flex justify-content-center justify-content-md-start">';
            try {
                $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
            freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
            INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row1[1];");
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
            while ($linha = $sql2->fetch()) {
                echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="small d-inline mx-2 px-2">' . $linha[3] . '</p>';
            }
            echo            '</div>
                </div>
                <div class="col-sm-3 d-flex flex-row justify-content-center">
                    <a class="btn btoContratar" href="tela_freelancer_autenticar.php" id="btoContratar" name="btoContratar">Contratar</a>
                </div>   
            </div>
        </div>
    </div>
            ';
        }
    }
    elseif (isset($_POST["area"]) && $_POST["area"] != " "){
        // print_r($_POST);
        $area = $_POST["area"];
        $area = str_replace(" ", "", $area);
        try {
            $sql = $conn->query("select * from Freelancer where area_freelancer='$area'");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

        if ($sql->rowCount() == 0) {
            echo '
            <div class="row mt-4">
                <div class="col-sm-12 d-flex flex-column align-items-center">
                    <h4> Ops, esse resultado não foi encontrado! :( </h4>
                    <img src="img/no-found-freelancer.png">
                </div>
            </div>
            ';
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
                                <p class="card-text">' . $row[19] . '</p>
                                
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
                            <img src="' . $row[2] . '" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
                        </div>
            </div>
        
                </div>
                <div class="row mt-3">
                    <div class="col-sm-9">
                    <div class="linguagens d-flex justify-content-center justify-content-md-start">';
            try {
                $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
                freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
                INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row[0];");
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
            while ($linha = $sql2->fetch()) {
                echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="small d-inline mx-2 px-2">' . $linha[3] . '</p>';
            }
            echo            '</div>
                    </div>
                    <div class="col-sm-3 d-flex flex-row justify-content-center">
                        <a class="btn btoContratar" href="tela_freelancer_autenticar.php" id="btoContratar" name="btoContratar">Contratar</a>
                    </div>                    
                </div>
            </div>
        </div>
                ';
        }
    }
    elseif (isset($_POST["texto"]) && !empty($_POST["texto"])) {
        $texto = $_POST["texto"];
        $texto = str_replace(" ", "", $texto);
        try {
            $sql = $conn->query("select * from Freelancer where nome_freelancer like '%$texto%'");
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
        if ($sql->rowCount() == 0){
            echo '
            <div class="row mt-4">
                <div class="col-sm-12 d-flex flex-column align-items-center">
                    <h4> Ops, esse resultado não foi encontrado! :( </h4>
                    <img src="img/no-found-freelancer.png">
                </div>
            </div>
            ';
        }
        // print_r($sql);
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
                                <p class="card-text">' . $row[19] . '</p>
                                
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
                            <img src="' . $row[2] . '" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
                        </div>
            </div>
        
                </div>
                <div class="row mt-3">
                    <div class="col-sm-9">
                    <div class="linguagens d-flex justify-content-center justify-content-md-start">';
            try {
                $sql2 = $conn->query("SELECT freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
                freelancerlinguagem.id_linguagem_freelancerLinguagem,Linguagem.nome_linguagem  from freelancerlinguagem
                INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem where freelancerlinguagem.id_freelancer_freelancerLinguagem = $row[0];");
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
            while ($linha = $sql2->fetch()) {
                echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="small d-inline mx-2 px-2">' . $linha[3] . '</p>';
            }
            echo            '</div>
                    </div>
                    <div class="col-sm-3 d-flex flex-row justify-content-center">
                <a class="btn btoContratar" href="tela_freelancer_autenticar.php" id="btoContratar" name="btoContratar">Contratar</a>
            </div>                   
                </div>
            </div>
        </div>
                ';
        }
        
    }
    elseif (isset($_POST["request"]) && empty($_POST["request"]) || isset($_POST["area"]) && $_POST["area"] == " ") {
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
                                <p class="card-text">' . $row[19] . '</p>
                                
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
                            <img src="' . $row[2] . '" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
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
            while ($linha = $sql2->fetch()) {
                echo '<p style="background-color: #1e102e; color:#e6e6e6;" class="small d-inline mx-2 px-2">' . $linha[3] . '</p>';
            }
            echo            '</div>
                    </div>
                    <div class="col-sm-3 d-flex flex-row justify-content-center">
                    <a class="btn btoContratar" href="tela_freelancer_autenticar.php" id="btoContratar" name="btoContratar">Contratar</a>
                    </div>                    
                </div>
            </div>
        </div>
                ';
        }
    }
}
