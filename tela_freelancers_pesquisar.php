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

try {
    $sql = $conn->query('select * from Freelancer');
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

while ($row = $sql->fetch()) {
    $id = $row[0];
    $nome = $row[1];
    $img = $row[2];
    $bio = $row[19];
    echo '                             
    <div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <form method="post" action="perfil_freelancer_vVisitante.php">
                    <input type="text" value="' . $id . '" style="display:none" id="txtID" name="txtID">
                    <input type = "submit" value = "' . $nome . '" class="btoCarregar">
                </form>
                <hr>
                <div class="row">

                    <div class="col-sm-12">
                        <p class="card-text">' . $bio . '</p>
                        
                    </div>

                </div>
            </div>
            <div class="col-sm-3 d-flex flex-column align-items-center">
                <div class="avaliacao d-inline">
                    <p class="text-center small">
                        Avaliação <br>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                    </p>
                </div>'
?>

                <script>
                    $(document).ready(function() {
                        load_rating_data()
                    })
                </script>

                <?php echo '<div class="foto-freelancer mt-1" style="height:100px;width:100px;">
                    <img src="' . $img . '" alt="" style="height:100%;width:100%; object-fit:cover;border-radius:50%">
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

?>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script src="freelancer_feedback.js"></script>
<script>
    $("#btoCarregar").click(function() {
        let idFreelancer = $("#txtID").val();
        let action = 'perfil_freelancer_vVisitante.php'


        $.ajax({
            url: action,
            type: 'post',
            data: {
                txtID: idFreelancer
            },
            success: function(data, status, xhr) {
                alerta("Foi")
            },
            error: function(jqXhr, textStatus, errorMessage, data) {
                alert(errorMessage, data);
            }
        })
    })
</script>