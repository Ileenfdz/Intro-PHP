<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="ms-3 mt-3">
        <h5>Data:</h5>
        <?php
        if (!empty($_POST)) {
            echo "Name: " . $_POST["Name"] . "</br>";
            echo "Radio input: " . $_POST["flexRadioChecked"] . "</br>";
            echo "Check input: " . $_POST["flexCheckChecked"];
        }
        ?>
    </section>
</body>

</html>