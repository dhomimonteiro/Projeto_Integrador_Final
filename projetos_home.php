<div class="col-12 d-flex justify-content-center my-3 mt-5">
    <h1>Conheça projetos feitos pela GetDev</h1>
</div>
<div class="col-12">
    
    <div class="container">
        <div class="row mt-5">
            <?php
            include_once('Projeto/TelaLoginteste/conexao.php');
            try {
                $sql = $conn->query('SELECT * FROM projeto LIMIT 8');
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
            while ($row = $sql->fetch()) {
                $nome = $row[1];
                $img = $row[5];
                echo

                '<div class="col-sm-3 d-flex flex-row justify-content-center" >' .
                    '<img src="' . $img . '" alt="" class="bg-dark" style="height:200px;width:300px;margin-bottom: 50px; border-radius: 10%;">' .
                    '</div>';
            }
            ?>
        </div>
    </div>