<?php
require_once("./sys/listarCarrinho.php")
?>
<div id="carrinho-dialog">
    <div class="carrinho-header">
        <button>
            <span class="material-icons-outlined">
                close
            </span>
        </button>
    </div>
    <?php foreach ($produtos as $key => $value) {
    ?>
    <section class="carrinho-produto">
        <img src=<?= $value[0]["imagemURL"] ?>>
        <div class="detalhes-produto">
            <h1 class="titulo-produto"><?= $value["nome_produto"] ?></h1>
            <span class="preco-produto">R$<?= $value["preco"] ?></span>
        </div>
        <a href=<?= "./sys/removerCarrinho.php?id=" . $value["id_produto"] ?> class="remover-produto">
            <span class="material-icons-outlined">
                delete_forever
            </span>
        </a>
    </section>

    <?php
    }
    ?>
    <button class="checkout">Finalizar</button>
</div>
<div class="carrinho-backdrop"></div>