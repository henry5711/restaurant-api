<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar Pedidos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
  <body class="bg-light">
    <div class="bg-light">
        <h1 class="bg-dark text-white p-3">Editar Pedido</h1>
        <form class="p-3" action="" method="POST">
            <div class="mb-3 col-5">
                <label for="rol_name" class="form-label">Pedido</label>
                <input type="text" class="form-control" id="rol_name">
            </div>
            <div class="mb-3 col-5">
                <label for="rol_description" class="form-label">Dirección del Pedido</label>
                <input type="text" class="form-control" id="rol_description">
            </div>
            <button type="button" class="btn btn-outline-danger">Guardar</button>
            <button type="button" class="btn btn-outline-danger">Cancelar</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>