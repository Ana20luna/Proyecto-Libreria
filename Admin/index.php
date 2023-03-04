<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Libreria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Admin/dist/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="imagenes/logo.ico" type="image/x-icon">
</head>

<body>
  <!-- menú -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Admin/Imagenes/Logo.png" alt="Logo rich seasoning food"
          class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta_libros.php">Libros</a>
          <li class="nav-item">
            <a class="nav-link" href="#Servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-danger " href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!"
              tabindex="-1">¡Haz tu pedido!</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Servicios -->
  <div class="row row-cols-1 row-cols-md-2 g-4 p-5" id="Servicios">
    <h2 class="titulo">Login</h2>

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

    <div class="col">
      <div class="card">
        <img src="https://lamenteesmaravillosa.com/wp-content/uploads/2020/01/muchos-libros.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Libros</h5>
          <p class="card-text">Libros mas recomendados</p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary">Aqui</a>
        </div>
      </div>

    </div>

    <div class="col">
      <div class="card">
        <img src="https://www.seguridadvialenlaempresa.com/media/blog/consejos-seguridad-repartidores-coronavirus-768x520-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Domicilio</h5>
          <p class="card-text">Contra Entrega
            </p>
          <a href="https://wa.me/3043685787?text=%C2%A1Haz%20tu%20pedido%20aqu%C3%AD!" class="btn btn-primary"
            target="_blank">Pide tu libro aqui</a>
        </div>
      </div>
    </div>


  </div>


  <!--footer-->
  <footer class="cover">
    &copy;2023,Todos los derechos reservados Restaurante Rich seasoning foot, Crado por:<a href="#" target="_blank"> Ana Blandón</a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>