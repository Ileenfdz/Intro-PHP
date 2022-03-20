<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4: Class Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php

    class Movie
    {
        public $title;
        public $director;
        public $year;
        public $poster;

        public function __construct($title, $director, $year, $poster)
        {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->poster = $poster;
        }

        public function getTitle()
        {
            return $this->title;
        }

        public function getDirector()
        {
            return $this->director;
        }

        public function getYear()
        {
            return $this->year;
        }

        public function getPoster()
        {
            return $this->poster;
        }
    }

        $movie1 = new Movie ("Jurassic Park", "Steven Spielberg", "1993", "assets\movieJurassic.jpg");
        $movie2 = new Movie ("Home Alone", "Chris Columbus" , "1990", "assets\movieHome.jpg");
        $movie3 = new Movie ("Jaws", "Steven Spielberg", "1975","assets\movieJaws.jpg" );
        $movie4 = new Movie ("Pulp Fiction", "Quentin Tarantino", "1994","assets\moviePulp.jpg");
        $movie5 = new Movie ("Star Wars", "George Lucas", "1977", "assets\movieStar.jpg");
        // $movies = [$movie1, $movie2, $movie3, $movie4, $movie5];   
        
        // foreach ($movies as $dataMovie);
        ?>

        <div class="container overflow-hidden">    
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                        <div class="card p-3 border bg-light" style="width: 18rem;">
                            <img src="<?php echo $movie1->getPoster();?> " class="card-img-top" alt="Poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie1-> getTitle();?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Director: <?php echo $movie1->getDirector();?></li>
                                <li class="list-group-item">Year: <?php echo $movie1-> getYear();?></li>
                            </ul>  
                        </div>
                </div>

                <div class="col">
                        <div class="card p-3 border bg-light" style="width: 18rem;">
                            <img src="<?php echo $movie2->getPoster();?> " class="card-img-top" alt="Poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie2-> getTitle();?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Director: <?php echo $movie2->getDirector();?></li>
                                <li class="list-group-item">Year: <?php echo $movie2-> getYear();?></li>
                            </ul>  
                        </div>
                </div>

                <div class="col">
                        <div class="card p-3 border bg-light" style="width: 18rem;">
                            <img src="<?php echo $movie3->getPoster();?> " class="card-img-top" alt="Poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie3-> getTitle();?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Director: <?php echo $movie3->getDirector();?></li>
                                <li class="list-group-item">Year: <?php echo $movie3-> getYear();?></li>
                            </ul>  
                        </div>
                </div>

                <div class="col">
                        <div class="card p-3 border bg-light" style="width: 18rem;">
                            <img src="<?php echo $movie4->getPoster();?> " class="card-img-top" alt="Poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie4-> getTitle();?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Director: <?php echo $movie4->getDirector();?></li>
                                <li class="list-group-item">Year: <?php echo $movie4-> getYear();?></li>
                            </ul>  
                        </div>
                </div>

                <div class="col">
                        <div class="card p-3 border bg-light" style="width: 18rem;">
                            <img src="<?php echo $movie5->getPoster();?> " class="card-img-top" alt="Poster">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie5-> getTitle();?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Director: <?php echo $movie5->getDirector();?></li>
                                <li class="list-group-item">Year: <?php echo $movie5-> getYear();?></li>
                            </ul>  
                        </div>
                </div>
            </div>
        </div> 
    </body>
</html>