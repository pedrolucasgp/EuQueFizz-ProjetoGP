<?php
require_once("./componentes/header.php");
?>
<main class="login-container">
    <section>
        <img src="./img/logo.png" class="logo">
        <form action="./php/login.php" method="POST">
            <input type="email" name="email" placeholder="Digite seu email" required />
            <input type="password" name="senha" placeholder="Digite sua senha" required />
            <button type="submit" class="btn btn-login">Login</button>
        </form>
        <a href="">Esqueci minha senha</a>
        <a href="./cadastro.php" class="btn">Cadastre-se</a>
    </section>
</main>
<?php
require_once("./componentes/footer.php")
?>