<?php
require_once("./sys/conexao.php");

$produto = mysqli_query($mysqli, "SELECT nome_produto, descricao, preco FROM produto ");
$result = mysqli_fetch_all($produto, MYSQLI_ASSOC);

function pegarImagem($id, $mysqli)
{
    $imagem = mysqli_query($mysqli, "SELECT imagemURL FROM produtos_imagem WHERE id_produto = '$id' ");
    $resultIMG = mysqli_fetch_all($imagem, MYSQLI_ASSOC);
    return $resultIMG;
}