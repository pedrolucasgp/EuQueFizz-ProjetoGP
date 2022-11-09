<?php
session_start();
require_once("conexao.php");

if (isset($_GET['enviar-produto'])) {
    $nome = $_GET['nome-produto'];
    $descricao = $_GET['descricao'];
    $preco = $_GET['preco'];

    if (empty($_GET['nome-produto']) || empty($_GET['descricao']) || empty($_GET['preco'])) {
        $msgResult['msg'] = "Todos os campos devem ser preenchidos!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($nome)) {
        $msgResult['msg'] = "Preencha o campo nome!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($descricao)) {
        $msgResult['msg'] = "Preencha o campo descrição!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($preco)) {
        $msgResult['msg'] = "Preencha o campo preço!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else {
        $sql = mysqli_query($mysqli, "INSERT INTO produto (nome_produto, descricao, preco) VALUES ('$nome', '$descricao', '$preco') ");
        if ($sql) {
            $msgResult['msg'] = "Produto cadastrado com sucesso!";
            $msgResult['tipo'] = "success";
            echo json_encode($msgResult);
        } else {
            $msgResult['msg'] = "Ocorreu um erro!";
            $msgResult['tipo'] = "error";
            echo json_encode($msgResult);
        }
    }
} else {
    header('location:../index.php');
}