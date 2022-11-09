<?php
session_start();
require_once("./componentes/header.php");
?>
<main class="login-container">
    <section>
        <img src="./img/logo.png" class="logo">
        <input type="email" name="email" placeholder="Digite seu email" class="formulario" id="email" />
        <input type="password" name="senha" placeholder="Digite sua senha" class="formulario" id="senha" />
        <input type="hidden" id="key" name="key" value="<?php
                                                        echo md5(uniqid() . time() . date('Y-m-d') . "teste")
                                                        ?>">
        <button type="submit" class="btn-default" id="login">Login</button>
        <a href="">Esqueci minha senha</a>
        <a href="./cadastro.php" class="btn">Cadastre-se</a>
    </section>
</main>
<?php
require_once("./componentes/footer.php")
?>
<script src="js/toastr.min.js"></script>
<script>
    $("#login").click(function() {
        let email = $("#email").val(),
            senha = $("#senha").val();

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
            email: email,
            senha: senha,
            key: $("#key").val()
        };

        $.ajax('./sys/logar.php', {
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
                history.go(-1)
            }, 3200);
        }).fail(function() {

        });
    })
</script>