<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
.ver-mais-feedback {
    color: #452de3;
    cursor: pointer;
}
</style>

<form action="" method="post" onsubmit="return false">
    <div class="card" style="height:600px;overflow: auto; overflow-x:hidden">
        <div class="row">
            <input type='text' class='txtIDLogado' id='txtIDLogado' name='txtIDLogado' value='<?= $idUsuario ?>' style="display: none" />
            <input type='text' class='form-control' id='txtIDFreelancer' name='txtIDFreelancer' value='<?= $row[0] ?>' style="display: none" />
            <div class="feedback">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <h2 class="pt-3">Feedback</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-11">
                        <div id="review_content" class="review_content" >
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <h2 class="">Feedback</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-sm-11">
                        <div id="review_content" class="review_content" >
                        </div>
                    </div>
                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
</form>



<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
<script src="freelancer_feedback.js"></script>
<script>
    var rating_data = 0;

    $(document).ready(function() {
        load_rating_data();
    })

    $('.ver-mais-feedback').click(function() {
        load_rating_data();
        $('#review_modal').modal('show');
       
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

        var id_freelancer_review = $('#txtIDFreelancer').val();
        var id_contratante_review = $('#txtIDLogado').val();
        var comentario_review = $('#comentario_review').val();


        if (comentario_review == '') {
            alert("Preencha o comentário.");
            return false;
        } else {
            $.ajax({
                url: "freelancer_feedback_CadastroEPesquisa.php",
                method: "POST",
                data: {
                    rating_data: rating_data,
                    txtIDLogado: id_contratante_review,
                    txtIDFreelancer: id_freelancer_review,
                    comentario_review: comentario_review
                },
                success: function(data) {
                    $('#review_modal').modal('hide');
                    load_rating_data();
                    alert(data);
                },
                error: function(jqXhr, textStatus, errorMessage, data) {
                    alert(errorMessage);
                }
            })
        }

    });

    // function load_rating_data() {
    //     $.ajax({
    //         url: "freelancer_feedback_CadastroEPesquisa.php",
    //         method: "POST",
    //         data: {
    //             action: 'load_data'
    //         },
    //         dataType: "JSON",
    //         success: function(data) {
    //             $('#average_rating').text(data.average_rating);
    //             $('#total_review').text(data.total_review);

    //             var count_star = 0;

    //             $('.main_star').each(function() {
    //                 count_star++;
    //                 if (Math.ceil(data.average_rating) >= count_star) {
    //                     $(this).addClass('text-warning');
    //                     $(this).addClass('star-light');
    //                 }
    //             });

    //             $('#total_five_star_review').text(data.five_star_review);

    //             $('#total_four_star_review').text(data.four_star_review);

    //             $('#total_three_star_review').text(data.three_star_review);

    //             $('#total_two_star_review').text(data.two_star_review);

    //             $('#total_one_star_review').text(data.one_star_review);

    //             $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

    //             $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

    //             $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

    //             $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

    //             $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

    //             if (data.review_data.length > 0) {
    //                 var html = '';

    //                 for (var count = 0; count < data.review_data.length; count++) {
                        
    //                     /*ABRE A ESTRUTURA BASE DO CARD*/ 
    //                     html += '<div class="card mb-3" style="position: relative">';
    //                     /*ABRE A ESTRUTURA DO CORPO DO CARD*/
    //                     html += '<div class="card-body" style="position: relative">';
    //                     /*ABRE A ROW DO NOME E DA IMAGEM*/
    //                     html += '<div class="row">';
    //                     /*DECIDE O TAMANHO DA COLUNA DO NOME*/
    //                     html += '<div class="col-sm-8" style="position: relative">';
    //                     /*NOME*/
    //                     html += '<p style="font-size:25px; height:40px; line-height: 40px;" class="nomeContratante" id="nomeContratante">' + data.review_data[count].nome_contratante + '</p>';
    //                     html += '<div class="avaliacao d-inline">';
    //                     html += '<p class="small">';

    //                     for (var star = 1; star <= 5; star++) {
    //                         var class_name = '';

    //                         if (data.review_data[count].rating >= star) {
    //                             class_name = 'text-warning';
    //                         } else {
    //                             class_name = 'star-light';
    //                         }

    //                         html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
    //                     }
    //                     html += '</p>';
    //                     html += '</div>';
    //                     /*FECHA A COL DO NOME*/
    //                     html += '</div>';
    //                     /*DECIDE O TAMANHO DA COLUNA DA IMAGEM*/
    //                     html += '<div class="col-sm-4 d-flex justify-content-center">';
    //                     /*IMAGEM*/
    //                     html += '<img src="' + data.review_data[count].img_contratante + '" style="background-color: #000; width:50px; height:50px; border-radius: 50%">';
    //                     /*FECHA A COL DA IMAGEM*/
    //                     html += '</div>';

    //                     html += '</div">';

    //                     html += '<div class="row">';
    //                     html += '<div class="col-sm-12">';
                        

    //                     html += '<p class="comentarioFeedback" id="comentarioFeedback">' + data.review_data[count].comentario_review + '</p>';

    //                     html += '</div>';
    //                     html += '</div>';
    //                     html += '</div>';
    //                     html += '<div class="row">';
    //                     html += '<div class="col-sm-12">';

    //                     html += '<p class="text-right small">Em ' + data.review_data[count].data_review + '</p>';
 

    //                     html += '</div>';

    //                     html += '</div>';

    //                     html += '</div>';
    //                     html += '</div>';
    //                     html += '</div>';
    //                 }

    //                 $('#review_content').html(html);
    //             }
    //         },
    //         error: function(jqXhr, textStatus, errorMessage, data) {
    //             alert(errorMessage);
    //         }
    //     })
    // }
</script>