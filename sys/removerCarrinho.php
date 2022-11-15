<?php
session_start();
if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = [];
}
$id = 0;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
if ($id != 0 && in_array($id, $_SESSION["carrinho"])) {
    if (($key = array_search($id, $_SESSION["carrinho"])) !== false) {
        unset($_SESSION["carrinho"][$key]);
    }
}
header("Location: ../index.php");
exit();