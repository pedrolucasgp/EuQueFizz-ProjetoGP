<?php
require_once("./sys/conexao.php");
if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = [];
}
$produtos = [];
foreach ($_SESSION["carrinho"] as $key => $value) {
    $produto = mysqli_query($mysqli, "SELECT id_produto, nome_produto, preco FROM produto WHERE id_produto = $value");
    $result = mysqli_fetch_assoc($produto);
    $imagem = mysqli_query($mysqli, "SELECT imagemURL FROM produtos_imagem WHERE id_produto = $value ");
    $resultIMG = mysqli_fetch_assoc($imagem);
    array_push($result, $resultIMG);
    array_push($produtos, $result);
}