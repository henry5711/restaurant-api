<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Categoria</title>
</head>
<body>
    <div class="container">
        @foreach ($data as $key=>$value)
        <form action="{{route('store_real_category')}}" method="POST">
            <div class="row">
            <div class="mb-3 col-6">
              <label for="exampleInputEmail1" class="form-label">nombre</label>
              <input type="text" class="form-control" id="name" aria-describedby="namehelp" name="name" value="{{$value['name']}}">
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">descripcionm</label>
                <input type="text" class="form-control" id="name" aria-describedby="namehelp" name="descripcion"  value="{{$value['descripcion']}}">
              </div>
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
          @endforeach

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
