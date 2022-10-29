<?php
require_once("./componentes/header.php");
?>
<main class="login-container">
    <section>
        <img src="./img/logo.png" class="logo">
        <form action="./php/login.php" method="POST">
            <input type="text" name="nome" placeholder="Digite seu nome completo" required />
            <input type="email" name="email" placeholder="Digite seu email" required />
            <input type="password" name="senha" placeholder="Digite sua senha" required />
            <button type="submit" class="btn btn-login">Cadastrar</button>
        </form>
        <a href="./login.php">Voltar</a>
    </section>
</main>
<?php
require_once("./componentes/footer.php")
?>