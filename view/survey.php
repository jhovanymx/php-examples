<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>Encuesta de Postres</title>
    <style>
        body{
            font-family: "Open Sans", sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">¿Cuál es tu postre favorito?</h3>
                        <form action="survey.php" method="POST">
                            <p class="card-text">
                                <?php foreach ($survey->getResults() as $row) : ?>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="id" class="form-check-input" value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </p>
                            <input type="submit" class="btn btn-primary btn-block" value="Votar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if($showResults) : ?>
        <div class="row justify-content-center">
            <div class="col-6 mt-3">
                <h5>Total de votos: <?php echo $survey->getTotalVotes(); ?></h5>
                <?php foreach ($survey->getResults() as $row) : ?>
                <div class="row">
                    <div class="col-4 text-right">
                        <?php echo $row["name"] ?>
                    </div>
                    <div class="col-8">
                        <?php $ptg = $row["percentage"] . "%"; ?>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped<?php echo $id == $row["id"] ? " bg-success" : ""; ?>" role="progressbar" style="width: <?php echo $ptg ?>;">
                                <?php echo $ptg ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>