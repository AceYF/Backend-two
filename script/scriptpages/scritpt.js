$(document).ready(function() {
    $('input[name=inptel]').mask('(00)0000-00000');

    $('input[name=inprg]').mask('00.000.000-0');

    $('#typeperson').focus(function() {
        $('input[name=inpcpf').val('');
    })

    $('#typeperson').focusout(function() {
        var type = $('#typeperson').val();
        console.log(type);
        if (type == "Física") {
            $('input[name=inpcpf]').mask('000.000.000-00');
        } else if (type = "Jurídica") {
            $('input[name=inpcpf').mask('00.000.000/0000-00');
        }
    })

    $(".formulario").on('submit', function(e) {
        setTimeout(function() {
            $('.alert').remove();
        }, 2000);
        var erro = false;
        var DataUser = {
            "Tel": $('input[name=inptel]').val(),
            "name": $('input[name=inpname]').val(),
            "RG": $('input[name=inprg').val(),
            "person": $('input[name=inpcpf]')
        }
        $("input").empty();
        console.log(e);
        if (DataUser.Tel.length < 14) {
            $("input[name=inptel]").css({
                "border": "2px solid #ff8787"
            });
            $('.alerts').append('<div class="alert alert-primary mt-3 mr-2" role="alert"> Telefone inválido!</div>');
            erro = true
        } else {
            $("input[name=inptel]").css({
                "border": "2px solid #30ff9f"
            })
        }
        if (DataUser.name.length <= 2) {
            $("input[name=inpname]").css({
                "border": "2px solid #ff8787"
            });
            $('.alerts').append('<div class="alert alert-primary mt-3 mr-2" role="alert"> Nome muito curto</div>');
            erro = true
        } else {
            $("input[name=inpname]").css({
                "border": "2px solid #30ff9f"
            })
        }
        if (DataUser.RG.length < 12) {
            $("input[name=inprg]").css({
                "border": "2px solid #ff8787"
            });
            $('.alerts').append('<div class="alert alert-primary mt-3 mr-2" role="alert"> RG inválido!</div>');
            erro = true
        } else {
            $("input[name=inprg]").css({
                "border": "2px solid #30ff9f"
            })
        }
        console.log(DataUser.type);
        if (DataUser.type == "Física") {
            if (DataUser.person.length < 14) {
                $("input[name=inpcpf]").css({
                    "border": "2px solid #ff8787"
                });
                $('.alerts').append('<div class="alert alert-primary mt-3 mr-2" role="alert"> CPF inválido!</div>');
                erro = true
            } else {
                $("input[name=inpcpf]").css({
                    "border": "2px solid #30ff9f"
                })
            }
        }
        if (type == "Jurídica") {
            if (DataUser.person.length < 18) {
                $("input[name=inpcpf]").css({
                    "border": "2px solid #ff8787"
                });
                $('.alerts').append('<div class="alert alert-primary mt-3 mr-2" role="alert"> CNPJ inválido!</div>');
                erro = true
            } else {
                $("input[name=inpcpf]").css({
                    "border": "2px solid #30ff9f"
                })
            }
        }
        if (erro) {
            e.preventDefault();
        }
    })
})