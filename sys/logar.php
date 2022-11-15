<?php
session_start();
require_once("conexao.php");
if (isset($_POST['key'])) {
    $email = addslashes(strip_tags(trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))));
    $senha = addslashes(strip_tags(trim($_POST['senha'])));




    if (empty($email) && empty($senha)) {
        $msgResult['msg'] = "Todos os campos devem ser preenchidos!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($email)) {
        $msgResult['msg'] = "Preencha o campo email!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($senha)) {
        $msgResult['msg'] = "Preencha o campo senha!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $verif = mysqli_query($mysqli, "SELECT email FROM cliente WHERE email = '$email'");
        $verifResult =  mysqli_num_rows($verif);
    }
    if ($verifResult <= 0) {
        $msgResult['msg'] = "Usuário não encontrado!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else {

        $verif = mysqli_query($mysqli, "SELECT senha_cliente, id_cliente  FROM cliente WHERE email = '$email'");
        $aux = mysqli_fetch_assoc($verif);
    }
    if (password_verify($senha, $aux['senha_cliente'])) {
        $_SESSION["idSession"] = $aux['id_cliente'];
        $msgResult['msg'] = "Login efetuado com sucesso!";
        $msgResult['tipo'] = "success";
        echo json_encode($msgResult);
    } else {
        $msgResult['msg'] = "Ocorreu um erro!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    }
} else {
    header('location:../index.php');
}
