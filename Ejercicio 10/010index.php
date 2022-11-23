<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <form action="001server.php" method="POST">
        <div class="mb-3">
          <label for="Usuario" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="Usuario" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="Contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar</button>
    </form>

</body>
</html>