<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categoria</title>
  <!-- CSS only -->
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
    <h1 class="mt-3 text-center">Categorias</h1>
    <table class="table mt-5">
      <thead class="table-primary">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Estado</th>
          <th scope="col">Acción</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($data as $key=>$value)
          <tr>
            <th>{{$value['name']}}</th>
            <th>{{$value['descripcion']}}</th>
            <td>{{$value['status']}}</td>
            <td>
              <a href="#"><i class="fa-solid fa-eye"></i></a>
            </td>
            <td>
              <button type="button" class="btn btn-outline-primary btn-sm"><a 
                href="{{route('prev_categories',$value['id'])}}">editas
               </a></button>
            </td>
          <td>
            
              <button type="button" class="btn btn-danger btn-close" aria-label="Close">
                <a href="{{route('delete_category',$value['id'])}}">r;iminasr </a> 
              </button>
           
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex mt-4">
      <button type="button" class="btn btn-success btn-md">
        <a href="{{route('store_category')}}" class="text-decoration-none text-light">Agregar</a>
      </button>
      <button type="button" class="ms-3 btn btn-primary btn-md">Atrás</button>
    </div>
  </div>
</body>
</html>