<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="text-white bg-dark pb-1"><h1>Pedidos</h1></div>
    <div class="bg-light pb-3">
      <table class="table table-hover">
      <thead class="table-dark">
          <tr>
          <th scope="col">ID Usuario</th>
          <th scope="col">Direccion</th>
          <th scope="col">Estado</th>
          <th scope="col">Acción</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($data as $key=>$value)
          <tr>
            <th>{{$value['user_id']}}</th>
            <th>{{$value['direccion']}}</th>
            <td>{{$value['status']}}</td>
          <td>
            <button type="button" class="btn btn-outline-danger btn-sm"><a
              href="{{route('prev_pedidos',$value['id'])}}">Editar</a>
            </button>
          </td>
          <td>
            <a href="{{route('delete_pedidos',$value['id'])}}">
              <button type="button" class="btn btn-danger btn-close" aria-label="Close"></button>
            </a>  
          </td>
        </tr>
        @endforeach
      </tbody>
      </table>
      <div class="d-flex pe-3 ps-3">
        <button type="button" class="btn btn-outline-danger me-2">Guardar</button>
        <button type="button" class="btn btn-outline-danger">Gestionar Pedido</button>
        <button type="button" class="btn btn-outline-danger ms-auto ms-5">Atras</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7e8d5df703.js" crossorigin="anonymous"></script>
  </body>
</html>