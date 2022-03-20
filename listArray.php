<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1: Listado usando un array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="ms-3">
        <h5 class="mt-3">Lista de Grupos de Música:</h5>
        <ul class="list-group ms-3">
            <?php
            $listGroups = ["FooFighters", "Metallica", "U2", "Muse", "The Killers"];
            foreach ($listGroups as $group) {
                echo "<li>${group}</li>";
            }
            ?>
        </ul>
  </section>
</body>
</html>