<?php

class Movie
{
    //composition
    public $name;
    /* public $genre; */
    public $imgPath;
    public $year;
    public $rate;

    public function __construct(string $name, /* string $genre ,*/ Genre $genre, int $year, string $imgPath, string $rate)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->rate = $rate;
        $this->imgPath = $imgPath;
    }
    //method
    public function getGenre()
    {
        $genre = $this->genre;
        return "$genre->name";
    }
}
class Genre
{
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}


$spiderman = new Movie('Spiderman no way home', new Genre('adventure'), 2021, 'https://picsum.photos/200/300',4);
$peterPan =  new Movie('Peter Pan & Wendy', new Genre('fantasy'), 2023,  'https://picsum.photos/200/300',2);
$QueViva = new Movie('¡Que Viva México! ', new Genre('drama'), 2023, 'https://picsum.photos/200/300',3);
$parasite = new Movie('Parasite', new Genre('sci-fi'), 2019,'https://picsum.photos/200/300',5);
/*     new Movie('Kill Bill: Volume I', 'thriller', 2003,'https://picsum.photos/200/300',5);
    new Movie('Citadel', 'action', 2023,'https://picsum.photos/200/300',5);
    new Movie('Babylon', 'historical drama', 2022,'https://picsum.photos/200/300',5);
    new Movie('La chiave', 'drama', 1983,'https://picsum.photos/200/300',5);
    new Movie('Nerosubianco', 'drama', 1969,'https://picsum.photos/200/300',5);
    new Movie('Shutter Island', 'psycho thriller', 2010,'https://picsum.photos/200/300',5);
    new Movie('Brothers', 'drama', 2009,'https://picsum.photos/200/300',5); */

$movies = [
    $peterPan,
    $QueViva,
    $spiderman,
    $parasite,
];
foreach ($movies as $movie) {
    var_dump($movie);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="<?=$movie->imgPath;?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?=$movie->name;?></h4>
                                <p class="card-text">Anno uscita: <?=$movie->year?></p>
                                <p class="card-text">Voto: <?=$movie->rate?></p>
                                <p class="card-text">Genre: <?=$movie->getGenre()?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>