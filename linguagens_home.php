<div class="col-sm-12 mt-5 d-flex flex-column align-items-center">
    <h2 class="mb-4">Procurando por linguagens específicas? A GetDev tem!</h2>
    <ul class="d-flex flex-row flex-wrap justify-content-sm-center">
        <?php
        include_once('Projeto/TelaLoginteste/conexao.php');
        
        try {
            $sql = $conn->query('select * from Linguagem order by nome_linguagem');
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }

        while ($row = $sql->fetch()){
            echo '
                <a href="#">
                    <li class="linguagem mx-4 mt-4">'.$row[1] .'</li>
                </a>
            ';
        }
        ?>
    </ul>
</div>