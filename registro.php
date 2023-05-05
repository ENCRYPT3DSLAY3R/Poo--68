<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css\registro.css" />
    <title>Registrarse</title>
</head>

<body>
    <div class="container-fluid">
        <!-- fila -->
        <div class="row">
            <!-- columna -->
            <div class="col">
                <div class="card">
                    <form method="post" action="./db/register.php">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" placeholder="Ingresa tu primer nombre" class="form-control"
                                        id="id_mombre" name="nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu nombre.
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" placeholder="Ingresa tu primer apellido" class="form-control"
                                        id="id_apellido" name="apellido" required />
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu apellido.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Numero de telefono</label>
                                    <input type="text" placeholder="Ingresa tu numero de telefono" class="form-control"
                                        id="id_telefono" name="numeroTelefono" required />
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu número de teléfono.
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Correo</label>
                                    <input type="email" placeholder="Ingresa tu correo" class="form-control" id="id_email"
                                        name="email" required />
                                    <div class="invalid-feedback">
                                        Por favor ingresa un correo electrónico válido.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" placeholder="Ingresa tu contraseña" class="form-control"
                                id="id_password" name="password" required />
                            <div class="invalid-feedback">
                                Por favor ingresa una contraseña válida.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
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