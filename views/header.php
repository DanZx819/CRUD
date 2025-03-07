<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu Site</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/dc74a93c1c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilos/style.css">

</head>
<body>
<header>

  <nav class="navbar navbar-expand-lg bg-light bg-subtle" >
    <div class="container-fluid" >
      <a class="navbar-brand" href="#">Cidades</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-light bg-subtle " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-light bg-subtle" id="navbarNav">
      <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?pagina=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=cidades">Cidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=usuarios">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=usuario_cidade">Usuario/Cidades</a>
            </li>
          </ul>
  </div>
</nav>
</body>
</html>
