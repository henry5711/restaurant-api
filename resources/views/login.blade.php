<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-primary bg-opacity-1">
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-light text-black" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
              <form action="">
                <div class="form-group">
                  <label class="form-label" for="email">Correo</label>
                  <input class="form-control" type="email" id="email">
                </div>
              
                <div class="form-group">
                  <label class="form-label" for="password">Contraseña</label>
                  <input class="form-control" type="password" id="password">
                </div>
              
                <div class="form-group form-check mt-3">
                  <input class="form-check-input" type="checkbox" id="check">
                  <label class="form-check-label" for="check">Recuerdame</label>
                </div>
              
                <input class="btn btn-success w-100 mt-4" type="submit" value="Ingresar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>












<!-- <form action="">
  <div class="form-group">
    <label class="form-label" for="email">Correo</label>
    <input class="form-control" type="email" id="email">
  </div>

  <div class="form-group">
    <label class="form-label" for="password">Contraseña</label>
    <input class="form-control" type="password" id="password">
  </div>

  <div class="form-group form-check">
    <input class="form-check-input" type="checkbox" id="check">
    <label class="form-check-label" for="check">Recuerdame</label>
  </div>

  <input class="btn btn-success w-100" type="submit" value="Ingresar">
</form> -->