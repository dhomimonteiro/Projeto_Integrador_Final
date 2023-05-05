<?php
include_once('Projeto/TelaLoginteste/conexao.php');

if(isset($_POST["rating_data"]))
{
	$user_name = $_POST["user_name"];
	$user_rating = $_POST["rating_data"];
	$user_review = $_POST["user_review"];

	try {
		$sql = $conn->prepare(
			'INSERT INTO review_table 
			(user_name, user_rating, user_review) 
			VALUES (:user_name, :user_rating, :user_review)'
		);

		$sql->execute(array(
			':user_name'=>$user_name,
			':user_rating'=>$user_rating,
			':user_review'=>$user_review
		));

		if ($sql->rowCount() > 0) {
			echo 'Review cadastrada.';
		}

	} catch (PDOException $ex) {
		echo $ex->getMessage();
	}

}


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

	$sql = $conn->query('SELECT * from review_table ORDER BY review_id DESC');


	while($row = $sql->fetch())
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			'cadastro_review'=>  $row["cadastro_review"]
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

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