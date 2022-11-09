<?php
require_once("conexao.php");
if (isset($_POST['key'])) {
    $nome = addslashes(strip_tags(trim($_POST['nome'])));
    $email = addslashes(strip_tags(trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))));
    $senha = addslashes(strip_tags(trim($_POST['senha'])));
    $senhaCrypt = password_hash($senha, PASSWORD_DEFAULT);

    if (empty($nome) && empty($email) && empty($senha)) {
        $msgResult['msg'] = "Todos os campos devem ser preenchidos!";
        $msgResult['tipo'] = "error";
        echo json_encode($msgResult);
    } else if (empty($nome)) {
        $msgResult['msg'] = "Preencha o campo nome!";
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
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $verif = mysqli_query($mysqli, "SELECT email FROM cliente WHERE email = '$email'");
            $verifResult =  mysqli_num_rows($verif);
            if ($verifResult >= 1) {
                $msgResult['msg'] = "Já existe um usuário com esse email!";
                $msgResult['tipo'] = "error";
                echo json_encode($msgResult);
            } else {
                $sql = mysqli_query($mysqli, "INSERT INTO cliente (nome_cliente, senha_cliente, email) VALUES ('$nome', '$senhaCrypt', '$email') ");
                if ($sql) {

                    $msgResult['msg'] = "Usuário cadastrado com sucesso!";
                    $msgResult['tipo'] = "success";
                    echo json_encode($msgResult);
                } else {
                    $msgResult['msg'] = "Ocorreu um erro!";
                    $msgResult['tipo'] = "error";
                    echo json_encode($msgResult);
                }
            }
        } else {
            $msgResult['msg'] = "Por favor digite um email valido!";
            echo json_encode($msgResult);
        }
    }
} else {
    header('location:../index.php');
}
