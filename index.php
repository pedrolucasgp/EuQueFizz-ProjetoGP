    <?php
    session_start();
    require_once("./componentes/header.php");
    require_once("./sys/listar.php");
    ?>
    <main class="loja-container">
        <?php
        foreach ($result as $produtoKey => $produto) {
        ?>
        <section class="cartao-produto">
            <div class="carrossel-produto">
                <?php
                    foreach (pegarImagem($produtoKey + 1, $mysqli) as $key => $imagem) {
                        foreach ($imagem as $key => $value) {
                    ?>
                <img src=<?= $value ?> />
                <?php
                        }
                    }
                    ?>

            </div>
            <div class="detalhes-produto">
                <h1 class="titulo-produto"><?= $produto["nome_produto"] ?></h1>
                <h3><?= $produto["descricao"] ?></h3>
                <span class="preco-produto">R$<?= $produto["preco"] ?></span>
            </div>
            <div class="interacao-produto">
                <a href=<?= "./sys/addCarrinho.php?id=" . $produtoKey + 1 ?> class="btn btn-carrinho">
                    <span class="material-icons-outlined">
                        add_shopping_cart
                    </span>
                    <span>Comprar</span>
                </a>
                <a href="#" class="btn btn-favorito">
                    <span class="material-icons-outlined">
                        favorite_border
                    </span>
                </a>
            </div>
        </section>
        <?php
        }
        ?>
    </main>
    <?php
    require_once("./componentes/footer.php")
    ?>
    <script src="js/toastr.min.js"></script>
    <script>
$.ajax('./sys/addCarrinho.php', {
    type: 'POST',
    dataType: 'json'

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
    </script>