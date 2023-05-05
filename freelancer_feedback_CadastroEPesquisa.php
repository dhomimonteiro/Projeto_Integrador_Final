<?php
include_once('Projeto/TelaLoginteste/conexao.php');


if (isset($_POST)) {
    print_r($_POST);
    $id_freelancer = $_POST['txtIDFreelancer'];
    $nota_review = $_POST["rating_data"];
    $id_contratante = $_POST["txtIDLogado"];
    $comentario_review = $_POST["user_review"];
    $status_review = 'Ativo';
    $obs_review = '';

    try {
        $sql = $conn->prepare(
            'INSERT INTO reviewFreelancer 
			(id_freelancer_review, id_contratante_review, nota_review, comentario_review, status_review, obs_review) 
			VALUES (:id_freelancer_review, :id_contratante_review, :nota_review, :comentario_review, :status_review, :obs_review)'
        );

        $sql->execute(array(
            ':id_freelancer_review' => $id_freelancer,
            ':id_contratante_review' => $id_contratante,
            ':nota_review' => $nota_review,
            ':comentario_review' => $comentario_review,
            ':status_review' => $status_review,
            ':obs_review' => $obs_review
        ));

        if ($sql->rowCount() > 0) {
            echo 'Review cadastrada.';
        }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
} else {
}
