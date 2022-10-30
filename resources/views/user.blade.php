<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de usuario</title>
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
          <li class="nav-item"><a class="nav-link" href="user_profile.html">Perfil</a></li>
          <li class="nav-item"><a class="nav-link active" href="#!">Editar</a></li>
          <a class="nav-link" href="#">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </nav>
  <section style="background-color: #eee;">
    <div class="p-3">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Imagen de Perfil</h5>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-outline-danger ms-1">Cambiar Imagen</button>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-md">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <p class="mb-0">Nombre</p>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="student_name_edit" placeholder="Cambiar Nombre">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <p class="mb-0">Apellido</p>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="student_secondname_edit" placeholder="Cambiar Apellido">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <p class="mb-0">Sexo</p>
                </div>
                <div class="col-sm-8">
                  <select class="form-select" id="student_form_sex">
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <p class="mb-0">Edad</p>
                </div>
                <div class="col-sm-8">
                  <input type="number" min="1" max="99" class="form-control" id="student_name_age"
                    placeholder="Cambiar Fecha de Edad">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-8">
                  <p class="mb-0">Fecha de Nacimiento</p>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control" id="student_name_edit"
                    placeholder="Cambiar Fecha de Nacimiento">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Dirección</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="student_location_edit" placeholder="Cambiar Dirección">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <p class="mb-0">Nueva Contraseña</p>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="student_password_edit" placeholder="Cambiar Contraseña">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <p class="mb-0">Contraseña</p>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="student_verificar_edit" placeholder="Cambiar Nombre">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
  
        <div class="col-md">
          <div class="d-flex flex-column">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <p class="mb-0">Cedula</p>
                  </div>
                  <div class="col-sm-8">
                    <p class="text-muted mb-0">35000444</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <p class="mb-0">Telefono</p>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="student_tel_edit" placeholder="Cambiar Nº de Telefono">
                  </div>
                </div>
                <hr>
              </div>
            </div>
  
  
          </div>
        </div>
        <div class="d-flex justify-content-center mb-2">
          <button type="button" class="btn btn-danger">Guardar</button>
          <button type="button" class="btn btn-outline-danger ms-1">Cancelar</button>
        </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2022</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://kit.fontawesome.com/7e8d5df703.js" crossorigin="anonymous"></script>
  </body>
  
  </html>
</body>
</html>