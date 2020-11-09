<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Subir imágenes a servidor</title>
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
                <?php if(isset($error)) : ?>
                    <div class="alert alert-danger">
                        <p class="mb-0"><?php echo $error; ?></p>
                    </div>
                <?php endif; ?>
                <h4>Subir imagen</h4>
                <hr/>
                <form action="upload-image.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Seleccione una imagen válida con formato JPEG</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                    </div>
                    <input type="submit" value="Subir imagen" class="btn btn-primary">
                </form>

                <?php if(isset($result) && $result["success"]) : ?>
                    <h5 class="mt-4">Imagen subida con éxito</h5>
                    <div>
                        <img src="<?php echo $result["filePath"] ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>