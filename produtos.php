<?php

include('conexaosistema.php');

try {
    $sql = "insert into tblprodutos (produto,preco,estoque)
            values (:produto,:preco,:estoque)";

    $stmt = $connect->prepare($sql);

    $stmt->bindValue(":produto",$_POST["produto"]);
    $stmt->bindValue(":preco",$_POST["preco"]);
    $stmt->bindValue(":estoque",$_POST["estoque"]);
    $stmt->execute();
    header('Location: listarprodutos.php');
}

catch (PDOException $erro) {
    echo "Não cadastrou: ".$erro->getMessage();
}


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https:\\cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Produtos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<br><hr><br>

    <div class="container">

    <h1>Produtos em estoque</h1>

    </div>

    <form method="POST">
    <div class="container">
            <div class="row">               
                <div class="col">
                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Produto</label>

                        <input type="text" name="produto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Preço</label>

                        <input type="text" name="preco" class="form-control" id="exampleInputPassword1">
                    </div>

                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Estoque</label>

                        <input type="text" name="estoque" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>