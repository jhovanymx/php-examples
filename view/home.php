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
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
            <a href="#" class="navbar-brand">Ham Express</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="nav-menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="#nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdown-item" data-toggle="dropdown">Productos</a>
                        <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Computadoras</a>
                        <a href="#" class="dropdown-item">Laptops</a>
                        <a href="#" class="dropdown-item">Smarphones</a>
                        <a href="#" class="dropdown-item">Drones</a>
                        <a href="#" class="dropdown-item">Accesorios</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Cerrar sesión</a>
                    </li>
                </ul>
                
                <form action="" class="form-inline my-2 my-lg-0">
                    <input type="search" class="form-control mr-sm-2" placeholder="Buscar">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="py-4 border-bottom">
                    <h1 class="text-center">Bienvenido(a) <?php echo $user->getUsername(); ?></h1>
                </div>
            </div>
        </div>
    
    </main>

    <footer class="container">
        <div class="row border-top py-5">
            <div class="col">
                <a href="#" class="btn btn-link">Acerca de</a>
                <a href="#" class="btn btn-link">Contacto</a>
            </div>
            
            <div class="col text-right">
                <a href="#" class="btn btn-link">Subir en página</a>
            </div>
        </div>
    </footer>
</body>
</html>