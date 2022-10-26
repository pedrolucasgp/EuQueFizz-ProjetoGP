<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eu Que Fizz</title>
        <link rel="icon" href="./img/logo.png">
        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/login.css" rel="stylesheet" />
        
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./img/logo.png" width= "60" heigh ="48"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Loja
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Caderno</a></li>
            <li><a class="dropdown-item" href="#">Planner</a></li>
            <li><a class="dropdown-item" href="#">Bottons</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contato.php">Contato</a>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-login">Login</button>
  </div>
</nav>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>