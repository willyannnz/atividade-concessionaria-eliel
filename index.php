<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&family=Bebas+Neue&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lobster&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand banner-titulo" href="#"><i class="fa-solid fa-gauge-high"></i> EliteCar</a>
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
            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelo    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelo">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marca    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-marca">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Venda    
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
          </ul>
        </li>
    
      </ul>
      <form class="d-flex" role="search" action="index.php" method="POST">
      <input type="hidden" name="page" value="pesquisar">
      
      <input class="form-control me-2" type="search" name="query_busca" placeholder="Buscar modelo..." aria-label="Search">
      
      <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class = "container mt-3"> 
    <div class = "row">
        <div class = "col">
            <?php
            include('config.php');
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
                case 'pesquisar':
                    include('pesquisar.php');
                    break;

                default:
                    ?>
                    
                    <div class="p-5 mb-4 bg-light rounded-3">
                        <div class="container-fluid py-5">
                            <h1 class="display-5 fw-bold">Bem-vindo à EliteCar</h1>
                            <p class="col-md-8 fs-4">Encontre o carro dos seus sonhos com a melhor qualidade e procedência.</p>
                            <a href="?page=listar-modelo" class="btn btn-primary btn-lg" type="button">Ver Estoque</a>
                        </div>
                    </div>

                    <div id="carouselExampleAutoplaying" class="carousel slide mb-4" data-bs-ride="carousel">
                      <div class="carousel-inner rounded-3">
                        <div class="carousel-item active">
                          <img src="img/e.jpg" class="d-block w-100" alt="Bem vindo">
                        </div>
                        <div class="carousel-item">
                          <img src="img/f.jpg" class="d-block w-100" alt="Carros">
                        </div>
                        <div class="carousel-item">
                          <img src="img/d.jpg" class="d-block w-100" alt="Carros">
                        </div>
                        <div class="carousel-item">
                          <img src="img/a.jpg" class="d-block w-100" alt="Carros">
                        </div>
                        <div class="carousel-item">
                          <img src="img/b.jpg" class="d-block w-100" alt="Carros">
                        </div>
                        <div class="carousel-item">
                          <img src="img/c.jpg" class="d-block w-100" alt="Carros">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                      </button>
                    </div>

                    <div class="row align-items-md-stretch">
                        <div class="col-md-6">
                            <div class="h-100 p-5 text-bg-dark rounded-3">
                                <h2>Cadastre seu Veículo</h2>
                                <p>Quer vender seu carro? Cadastre o modelo em nosso sistema.</p>
                                <a href="?page=cadastrar-modelo" class="btn btn-outline-light" type="button">Cadastrar Modelo</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                                <h2>Equipe de Vendas</h2>
                                <p>Conheça nossos profissionais prontos para lhe atender.</p>
                                <a href="?page=listar-funcionario" class="btn btn-outline-secondary" type="button">Ver Funcionários</a>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    <?php
                    break;
            }
            ?>
        </div>    
    </div>   
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>