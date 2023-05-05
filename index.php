<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css\index.css" />
    <?php include_once("db/conexion.php"); ?>
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <!-- fila -->
        <div class="row">
            <!-- columna -->
            <div class="col">
                <div class="card">
                    <form onsubmit="return validateForm()" method="post" action="db\login.php">
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" placeholder="Ingresa tu correo" class="form-control" name="email"
                                id="id_email" required />
                            <div class="invalid-feedback">
                                Por favor ingresa un correo electrónico válido.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" placeholder="Ingresa tu contraseña" class="form-control"
                                name="password" id="id_password" required />
                            <div class="invalid-feedback">
                                Por favor ingresa una contraseña válida.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>
                            </div>

                            <div class="col-6">
                                <a class="btn btn-primary" href="registro.php">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>