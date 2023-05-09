<?php
include_once('Projeto/TelaLoginteste/conexao.php');

if (isset($_POST["rating_data"])) {
    $id_freelancer_review = $_POST['txtIDFreelancer'];
    $id_contratante_review = $_POST['txtIDLogado'];
    $comentario_review = $_POST['comentario_review'];
    $rating_data = $_POST['rating_data'];
    $status_review = 'Ativo';
    $obs_review = '';

    try {
        $sql = $conn->prepare(
            'INSERT into reviewFreelancer
            (id_freelancer_review, id_contratante_review, nota_review, comentario_review, status_review, obs_review)
            values
            (:id_freelancer_review, :id_contratante_review, :nota_review, :comentario_review, :status_review, :obs_review)'
        );

        $sql->execute(array(
            ':id_freelancer_review'=>$id_freelancer_review,
            ':id_contratante_review'=>$id_contratante_review,
            ':nota_review'=>$rating_data,
            ':comentario_review'=>$comentario_review,
            ':status_review'=>$status_review,
            ':obs_review'=>$obs_review
        ));

        if($sql->rowCount() > 0){
            echo 'Review cadastrada.';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
};

if(isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

    $sql = $conn->query('SELECT reviewFreelancer.id_review, freelancer.nome_freelancer, contratante.nome_contratante, contratante.img_contratante, reviewFreelancer.nota_review, 
    reviewFreelancer.comentario_review, reviewFreelancer.data_review from reviewFreelancer
    inner join Freelancer on reviewFreelancer.id_freelancer_review = freelancer.id_freelancer
    inner join Contratante on reviewFreelancer.id_contratante_review = contratante.id_contratante
    where id_freelancer = 1 order by id_review desc limit 2');

    while($row = $sql->fetch())
    {
        $review_content[] = array(
			'nome_contratante'		=>	$row["nome_contratante"],
			'comentario_review'	=>	$row["comentario_review"],
			'rating'		=>	$row["nota_review"],
			'data_review'=>  $row["data_review"],
            'img_contratante'=> $row['img_contratante']
		);

		if($row["nota_review"] == '5')
		{
			$five_star_review++;
		}

		if($row["nota_review"] == '4')
		{
			$four_star_review++;
		}

		if($row["nota_review"] == '3')
		{
			$three_star_review++;
		}

		if($row["nota_review"] == '2')
		{
			$two_star_review++;
		}

		if($row["nota_review"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["nota_review"];
	}

    $average_rating = $total_user_rating / $total_review;


	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

    echo json_encode($output);
}