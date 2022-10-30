<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Administrador</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Principal</a>
          <a class="nav-link" href="#">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1 class="mt-3 text-center">Agregar producto</h1>
    <form action="{{route('store_product')}}" method="POST" class="mt-5" enctype="multipart/form-data">
      <div class="input-group mb-3 col-6">
        <span class="input-group-text">Nombre del producto</span>
        <input type="text" class="form-control" aria-describedby="namehelp" name="name" id="name">
      </div>
      <div class="input-group mb-3 col-6">
        <span class="input-group-text">Precio</span>
        <input type="number" class="form-control" name="price" id="name">
        <span class="input-group-text">$</span>
      </div>
      <div class="input-group mb-3 col-6">
        <span class="input-group-text">Descripcion</span>
        <input type="text" class="form-control" name="descripcion" id="name">
      </div>
      <div class="input-group mb-3 col-6">
        <span class="input-group-text">Ingredientes</span>
        <input type="text" class="form-control" name="ingredientes" id="name">
      </div>
      <div class="input-group mb-3 col-6">
        <span class="input-group-text">Categoria</span>
        <input type="text" class="form-control" name="categorie_id" id="name">
      </div>
      <div class="mb-3">
      <label for="formFile" class="form-label">Cargar imagen</label>
      <input class="form-control" type="file" id="formFile" name="url">
      </div>

      <button type="submit" class="btn btn-primary mt-4">Guardar</button>

    </form>
  </div>
</body>
</html>