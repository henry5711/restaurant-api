<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
          <thead class="bg-dark text-light">
            <td>nombre del rol</td>
            <td>estado</td>

            <td>editar</td>
            <td>eliminar</td>
          </thead>
          <tbody>
          <tr class="table-active">
              <?php
              foreach ($data as $key => $value) {
                ?>

        <td  class='table-active'>{{$value->name}}</td>
        <td  class='table-active'>{{$value->status}}</td>


          </tr>
                <?php } ?>
          </tbody>
        </table>

        <div class="d-grid gap-2 col-6 mx-auto">
         <button class="btn btn-primary text-light" type="submit"><a href="" class="text-light">guardar</a></button>
        </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
