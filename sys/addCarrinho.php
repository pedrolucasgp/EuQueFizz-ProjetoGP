<?php
session_start();
if (isset($_SESSION["idSession"])) {

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = [];
    }
    $id = 0;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    if ($id != 0 && !in_array($id, $_SESSION["carrinho"])) {
        array_push($_SESSION["carrinho"], $id);
        $msgResult['msg'] = "Produto adicionado ao carrinho!";
        $msgResult['tipo'] = "success";
        echo json_encode($msgResult);
    }
} else {
    $msgResult['msg'] = "Você precisa fazer o login para efetuar essa ação!";
    $msgResult['tipo'] = "error";
    echo json_encode($msgResult);
}
header("Location: ../index.php");
exit();
