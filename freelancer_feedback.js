function load_rating_data() {
    
    let id = $('#txtID').val();
   
    
    $.ajax({
        url: "freelancer_feedback_CadastroEPesquisa.php",
        method: "POST",
        data: {
            action: 'load_data',
            txtID:id
        },
        dataType: "JSON",
        success: function(data) {
            $('#average_rating').text(data.average_rating);
            $('#total_review').text(data.total_review);

            var count_star = 0;

            $('.main_star').each(function() {
                count_star++;
                if (Math.ceil(data.average_rating) >= count_star) {
                    $(this).addClass('text-warning');
                    $(this).addClass('star-light');
                }
            });

            $('#total_five_star_review').text(data.five_star_review);

            $('#total_four_star_review').text(data.four_star_review);

            $('#total_three_star_review').text(data.three_star_review);

            $('#total_two_star_review').text(data.two_star_review);

            $('#total_one_star_review').text(data.one_star_review);

            $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

            $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

            $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

            $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

            $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

            if (data.review_data.length > 0) {
                var html = '';

                for (var count = 0; count < data.review_data.length; count++) {
                    
                    /*ABRE A ESTRUTURA BASE DO CARD*/ 
                    html += '<div class="card mb-3" style="position: relative">';
                    /*ABRE A ESTRUTURA DO CORPO DO CARD*/
                    html += '<div class="card-body" style="position: relative">';
                    /*ABRE A ROW DO NOME E DA IMAGEM*/
                    html += '<div class="row">';
                    /*DECIDE O TAMANHO DA COLUNA DO NOME*/
                    html += '<div class="col-sm-8" style="position: relative">';
                    /*NOME*/
                    html += '<p style="font-size:25px; height:40px; line-height: 40px;" class="nomeContratante" id="nomeContratante">' + data.review_data[count].nome_contratante + '</p>';
                    html += '<div class="avaliacao d-inline">';
                    html += '<p class="small">';

                    for (var star = 1; star <= 5; star++) {
                        var class_name = '';

                        if (data.review_data[count].rating >= star) {
                            class_name = 'text-warning';
                        } else {
                            class_name = 'star-light';
                        }

                        html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                    }
                    html += '</p>';
                    html += '</div>';
                    /*FECHA A COL DO NOME*/
                    html += '</div>';
                    /*DECIDE O TAMANHO DA COLUNA DA IMAGEM*/
                    html += '<div class="col-sm-4 d-flex justify-content-center">';
                    /*IMAGEM*/
                    html += '<img src="' + data.review_data[count].img_contratante + '" style="background-color: #000; width:50px; height:50px; border-radius: 50%">';
                    /*FECHA A COL DA IMAGEM*/
                    html += '</div>';

                    html += '</div">';

                    html += '<div class="row">';
                    html += '<div class="col-sm-12">';
                    

                    html += '<p class="comentarioFeedback" id="comentarioFeedback">' + data.review_data[count].comentario_review + '</p>';

                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="row">';
                    html += '<div class="col-sm-12">';

                    html += '<p class="text-right small">Em ' + data.review_data[count].data_review + '</p>';


                    html += '</div>';

                    html += '</div>';

                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }

                $('#review_content').html(html);
                $('.review_content').html(html);
            }
        },
        error: function(jqXhr, textStatus, errorMessage, data) {
            var html = '';
            html += '<div class="row">';
            html +=     '<div class="col-sm-12 d-flex justify-content-center">';
            html +=         '<p>Tem nada aqui não</p>';
            html +=     '</div>';
            html += '</div>';

            $('#review_content').html(html);
            $('.review_content').html(html);
        }
    })
}