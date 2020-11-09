<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Sitio con autenticación</title>
    <style>
        body{
            font-family: "Open Sans", sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <?php if(isset($errors)) : ?>
                    <?php foreach($errors as $error) : ?>
                    <div class="alert alert-danger">
                        <p class="mb-0"><?php echo $error; ?></p>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <h4>Iniciar sesión</h4>
                <hr/>
                <form action="index.php" method="POST">
                    <div class="form-group row mt-3">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="username">Nombre</label>
                            <input type="text" placeholder="Nombre" id="username" name="username" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" placeholder="Contraseña" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>