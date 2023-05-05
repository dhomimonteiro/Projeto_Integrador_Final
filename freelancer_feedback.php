<?php

    echo "<input type='text' class='txtIDLogado' id='txtIDLogado' name='txtIDLogado' value='$idUsuario'></input>
    <input type='text' class='txtIDFreelancer' id='txtIDFreelancer' name='txtIDFreelancer' value='$row[0]'></input>"
?>
<div class="card">
    <div class="feedback">
        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
                <h2 class="pt-3 ps-3">Feedback</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center py-3">
            <div class="col-sm-11">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <p style="font-size:25px; height:50px; line-height: 50px;">' . $linha[2] . '</p>
                            </div>
                            <div class="col-sm-4">
                                <img src="' . $linha[3] . '" style="background-color: #000; width:50px; height:50px; border-radius: 50%">
                            </div>
                        </div>
                        <div class="row">
                            <div class="avaliacao d-inline">
                                <p class="small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                            </div>
                            <p>' . $linha[5] . '</p>
                            <div class="form-group text-center mt-4">
                                <button type="button" class="btn btn-primary" id="add_review">Adicionar review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </h4>
                <div class="form-group">
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                </div>
                <div class="form-group">
                    <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                </div>
                <div class="form-group text-center mt-4">
                    <a type="button" class="btn btn-primary" id="save_review" href="freelancer_feedback_CadastroEPesquisa.php" name="btoCadastrar">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script>
    $('#add_review').click(function() {
        $('#review_modal').modal('show');
        $('#user_name').val("");
        $('#user_review').val("");
        reset_background();
    });

    $('.close').click(function() {
        $('#review_modal').modal('hide');
    })

    $(document).on('mouseenter', '.submit_star', function() {
        var rating = $(this).data('rating');

        reset_background();

        for (var count = 1; count <= rating; count++) {

            $('#submit_star_' + count).addClass('text-warning');
        }
    });

    function reset_background() {
        for (var count = 1; count <= 5; count++) {

            $('#submit_star_' + count).addClass('star-light');

            $('#submit_star_' + count).removeClass('text-warning');

        }
    }
    $(document).on('mouseleave', '.submit_star', function() {

        reset_background();

        for (var count = 1; count <= rating_data; count++) {

            $('#submit_star_' + count).removeClass('star-light');

            $('#submit_star_' + count).addClass('text-warning');
        }

    });
    $(document).on('click', '.submit_star', function() {

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function() {
        
        var id_contratante = $('#txtIDLogado').val();
        var id_freelancer = $('#txtIDFreelancer').val();
        var comentario_review = $('#user_review').val();


        if (user_name == '' || user_review == '') {
            alert("Please Fill Both Field");
            return false;
        } else {
            $.ajax({
                url: "freelancer_feedback_CadastroEPesquisa.php",
                method: "POST",
                data: {
                    rating_data: rating_data,
                    txtIDLogado: id_contratante,
                    txtIDLogado: id_freelancer,
                    user_review: comentario_review
                },
                success: function(data) {
                    $('#review_modal').modal('hide');
                    load_rating_data();
                    alert(data);
                    alert(id_contratante + id_freelancer + comentario_review);
                },
                error: function(jqXhr, textStatus, errorMessage, data) {
				alert(errorMessage);
			}
            })
        }

    });
</script>