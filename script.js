
        function mask(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmask()", 1)
        }

        function execmask() {
            v_obj.value = v_fun(v_obj.value)
        }

        function masktel(v) {
            v = v.replace(/\D/g, "");
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
            v = v.replace(/(\d)(\d{4})$/, "$1-$2");
            return v;
        }

        function maskcpf(v) {
            v = v.replace(/\D/g, "");
            v = v.replace(/(\d{3})(\d)/, "$1.$2");
            v = v.replace(/(\d{3})(\d)/, "$1.$2");
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            return v;
        }

        function maskcnpj(v) {
            v = v.replace(/\D/g, "");
            v = v.replace(/^(\d{2})(\d)/, "$1.$2");
            v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
            v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
            v = v.replace(/(\d{4})(\d)/, "$1-$2");
            return v;
        }

        function maskcep(v){
            v = v.replace(/\D/g, "");
            v = v.replace(/(\d{5})(\d)/, "$1-$2");
            return v;
        } 

        function idcss(el) {
            return document.getElementById(el);
        }
        window.onload = function() {

            idcss('txtTelefone1').setAttribute('maxlength', 14);
            idcss('txtTelefone1').onkeypress = function() {
                mask(this, masktel);
            }

            idcss('txtTelefone2').setAttribute('maxlength', 14);
            idcss('txtTelefone2').onkeypress = function() {
                mask(this, masktel);
            }

            idcss('txtCNPJ').setAttribute('maxlength', 18);
            idcss('txtCNPJ').onkeypress = function() {
                mask(this, maskcnpj);
            }

            idcss('txtCEP').setAttribute('maxlength', 9);
            idcss('txtCEP').onkeypress = function() {
                mask(this, maskcep);
            }
        }
    
        //////////////////////////////////////////////////////////////////////////////

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#txtLogradouro").val("");
                $("#txtBairro").val("");
                $("#txtCidade").val("");
                $("#txtUF").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#txtCEP").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#txtLogradouro").val("...");
                        $("#txtBairro").val("...");
                        $("#txtCidade").val("...");
                        $("#txtUF").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#txtLogradouro").val(dados.logradouro);
                                $("#txtBairro").val(dados.bairro);
                                $("#txtCidade").val(dados.localidade);
                                $("#txtUF").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    // $(document).ready(function() {
    //     $("p").alert();
    //     $('#btnCadastrar').click(function(){
    //         $("form").submit(function () { return false; });
    //         var emailFilter=/^.+@.+\..{2,}$/;
    //         var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/
    //         if(!(emailFilter.test(sEmail))||sEmail.match(illegalChars)){
    //             $("p").show().removeClass("ok").addClass("erro")
    //             .text('Por favor, informe um email válido.');
    //         }else{
    //             $("p").show().addClass("ok")
    //             .text('Email informado está correto!');
    //         }
    //     });
    //     $('#txtLogin').focus(function(){
    //         $("p.erro").hide();
    //     });
    // });	