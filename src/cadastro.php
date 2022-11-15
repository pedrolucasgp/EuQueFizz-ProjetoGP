<?php
session_start();
require_once("./componentes/header.php");
?>
<main class="login-container">
    <section>
        <img src="./img/logo.png" class="logo">
        <input type="text" name="nome" placeholder="Digite seu nome completo" id="nome" class="formulario" />
        <input type="email" name="email" placeholder="Digite seu email" id="email" class="formulario" />
        <input type="password" name="senha" placeholder="Digite sua senha" id="senha" class="formulario" />
        <input type="hidden" id="key" name="key" value="<?php
                                                        echo md5(uniqid() . time() . date('Y-m-d') . "teste")
                                                        ?>">
        <button type="submit" class="btn-default" id="cadastro">Cadastrar</button>
        <a href="./login.php">Voltar</a>
    </section>
</main>
<?php
require_once("./componentes/footer.php")
?>
<script src="js/toastr.min.js"></script>
<script>
$("#cadastro").click(function() {
    let email = $("#email").val(),
        senha = $("#senha").val(),
        nome = $("#nome").val()


    if (!nome) {
        $("#nome").focus()
        $("#nome").css('border', '0.2rem solid red')
    } else {
        $("#nome").css('border', '0.2rem solid #c3a8f7')
    }

    if (!email) {
        $("#email").focus()
        $("#email").css('border', '0.2rem solid red')
    } else {
        $("#email").css('border', '0.2rem solid #c3a8f7')
    }

    if (!senha) {
        $("#senha").focus()
        $("#senha").css('border', '0.2rem solid red')
    } else {
        $("#senha").css('border', '0.2rem solid #c3a8f7')
    }

    let val = {
        nome: nome,
        email: email,
        senha: senha,
        key: $("#key").val()
    };

    $.ajax('./sys/cadastrar.php', {
        type: 'POST',
        dataType: 'json',
        data: val

    }).done(function(r) {
        Command: toastr[r.tipo](r.msg)
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "preventOpenDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        },
        setTimeout(function() {
            if (r.tipo == "success") {
                window.location.assign("login.php")
            }
            else{
                
            }
            
        }, 3200);
    }).fail(function() {

    });
})
</script>