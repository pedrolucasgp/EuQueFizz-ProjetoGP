<?php
session_start();
require_once("./componentes/header.php");

if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
    move_uploaded_file($_FILES["imagem"]["tmp_name"], "img/" . $_FILES["imagem"]["name"]);
    echo "Sucess";
}


?>
<main class="cadastrar-container">
    <section>
        <img src="./img/logo.png" class="logo">
        <label class="cadastrar">Cadastro de Produtos</label>
        <input type="text" name="nome-produto" placeholder="Digite o nome do produto" class="formulario" id="produto" />
        <input type="text" name="descricao" placeholder="Digite a descrição" class="formulario" id="descricao" />
        <input type="text" name="preco" placeholder="Digite o preço" class="formulario" id="preco" />
        <button type="submit" class="btn-default" name="enviar-produto"> Enviar </button>
        </form>
    </section>
</main>
<script src="js/toastr.min.js"></script>
<script>
$("#enviar-produto").click(function() {
    let nome_produto = $("#nome-produto").val(),
        descricao = $("#descricao").val(),
        preco = $("#preco").val()


    if (!nome) {
        $("#nome-produto").focus()
        $("#nome-produto").css('border', '0.2rem solid red')
    } else {
        $("#nome-produto").css('border', '0.2rem solid #c3a8f7')
    }

    if (!descricao) {
        $("#descricao").focus()
        $("#descricao").css('border', '0.2rem solid red')
    } else {
        $("#descricao").css('border', '0.2rem solid #c3a8f7')
    }

    if (!preco) {
        $("#preco").focus()
        $("#preco").css('border', '0.2rem solid red')
    } else {
        $("#preco").css('border', '0.2rem solid #c3a8f7')
    }

    let val = {
        nome_produto: nome_produto,
        descricao: descricao,
        preco: preco,
        key: $("#key").val()
    };

    $.ajax('./sys/listar.php', {
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
            window.location.assign("index.php")

        }, 3200);
    }).fail(function() {

    });
})
</script>
<?php
require_once("./componentes/footer.php")
?>