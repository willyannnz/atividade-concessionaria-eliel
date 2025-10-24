<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Bebas+Neue&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand banner-titulo" href="#"><i class="fa-solid fa-car fa-lg"></i> EliteCar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelo    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marca    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Venda    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Listar</a></li>
          </ul>
        </li>
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class = "container.mt-3"> 
    <div class = "row">
        <div class = "col">
            <?php
            switch(@$_REQUEST["page"]) {
                //funcionario
                case 'cadastrar-funcionario':
                    include('cadastrar-funcionario.php');
                    break;
                case 'listar-funcionario':
                    include('listar-funcionario.php');
                    break;
                case 'editar-funcionario':
                    include('editar-funcionario.php');
                    break;
                case 'salvar-funcionario':
                    include('salvar-funcionario.php');
                    break;
            }
            switch(@$_REQUEST["page"]) {
                //cliente
                case 'cadastrar-cliente':
                    include('cadastrar-cliente.php');
                    break;
                case 'listar-cliente':
                    include('listar-cliente.php');
                    break;
                case 'editar-cliente':
                    include('editar-cliente.php');
                    break;
                case 'salvar-cliente':
                    include('salvar-cliente.php');
                    break;
            }
            switch(@$_REQUEST["page"]) {
                //modelo
                case 'cadastrar-modelo':
                    include('cadastrar-modelo.php');
                    break;
                case 'listar-modelo':
                    include('listar-modelo.php');
                    break;
                case 'editar-modelo':
                    include('editar-modelo.php');
                    break;
                case 'salvar-modelo':
                    include('salvar-modelo.php');
                    break;
            }
            switch(@$_REQUEST["page"]) {
                //marca
                case 'cadastrar-marca':
                    include('cadastrar-marca.php');
                    break;
                case 'listar-marca':
                    include('listar-marca.php');
                    break;
                case 'editar-marca':
                    include('editar-marca.php');
                    break;
                case 'salvar-marca':
                    include('salvar-marca.php');
                    break;
            }
            switch(@$_REQUEST["page"]) {
                //venda
                case 'cadastrar-venda':
                    include('cadastrar-venda.php');
                    break;
                case 'listar-venda':
                    include('listar-venda.php');
                    break;
                case 'editar-venda':
                    include('editar-venda.php');
                    break;
                case 'salvar-venda':
                    include('salvar-venda.php');
                    break;
            }
            ?>
        </div>    
    </div>   
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>