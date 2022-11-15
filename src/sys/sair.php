<?php
session_start();
if (isset($_SESSION["idSession"])) {
    unset($_SESSION["idSession"]);
    unset($_SESSION["carrinho"]);
}
header("Location: ../index.php");
exit();