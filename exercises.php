<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="m-3">
        <h2 class="my-3">Exercise 1</h2>
        <ul class="list-group ms-3">
            <?php

            $games = ["Super princess Peach", "Super Mario 3D World", "Bowser's fury", "Mario Galaxy"];

            foreach ($games as $game) {
                echo "<p>${game}</p>";
            }
            ?>
        </ul>
    </div>

    <div class="m-3">
        <h2 class="my-3">Exercise 2</h2>
        <form action="dataIntoHTML.php" method="POST">
            <input type="text" class="mt-2 col-form-label" name="Name" placeholder="Name" require>
            <div class="mt-3 form-check">
                <input class="form-check-input" type="radio" name="flexRadioChecked" id="flexRadioChecked"> Radio input
            </div>
            <div class="mt-2 form-check">
                <input class="form-check-input" type="checkbox" name="flexCheckChecked" value="" id="flexCheckChecked"> Selector input
                <label class="form-check-label" for="flexCheckDefault">
            </div>
            <button type="submit" class="mt-3 btn btn-primary " name="Enviar" placeholder="Enviar">Enviar</button>
        </form>
    </div>

    <div class="m-3">
        <h2 class="my-3">Exercise 3</h2>
        <?php
        $user1 = [
            "id" => "1",
            "name" => "Giacomo",
        ];
        $user2 = [
            "id" => "2",
            "name" => "Carla",
        ];
        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $user1["id"]; ?></td>
                    <td><?php echo $user1["name"]; ?></td>
                </tr>
                <td><?php echo $user2["id"]; ?></td>
                <td><?php echo $user2["name"]; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="m-3">
        <h2 class="my-3">Exercise 4</h2>
        <?php

        class Movie
        {
            public $title;
            public $description;
            public $type;
            public $duration;

            public function __construct($title, $description, $type, $duration)
            {
                $this->title = $title;
                $this->description = $description;
                $this->type = $type;
                $this->duration = $duration;
            }

            public function getTitle()
            {
                return $this->title;
            }

            public function getDescription()
            {
                return $this->description;
            }

            public function getType()
            {
                return $this->type;
            }

            public function getDuration()
            {
                return $this->duration;
            }
        }

        $movie = new Movie("Amor de gata", "La línea entre humanos y animales comienza a desdibujarse cuando una chica peculiar se transforma en una gata para llamar la atención de su enamorado.", "Conmovedora", "1h 45min");
        ?>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->getTitle(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->getType(); ?></h6>
                <p class="card-text"><?php echo $movie->getDescription(); ?></p>
                <p class="card-text"><?php echo $movie->getDuration(); ?></p>
            </div>
        </div>
    </div>

</body>

</html>