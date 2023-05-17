<?php

class Movie
{
//composition
    public $name;
    /* public $genre; */
    public $imgPath;
    public $year;
    public $rate;

    public function __construct(string $name, /* string $genre ,*/ Genre $genre, int $year,string $imgPath, string $rate)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->rate = $rate;
        $this->imgPath = $imgPath;
    }
    //method
    public function getMovieRateyear()
    {
        $genre = $this->genre;
    return "Rate: $this->rate, Year: $this->year, Genre: $genre->name";
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


   $spiderman = new Movie('spiderman no way home', new Genre('adventure'),2021,5,'https://picsum.photos/200/300');
   $peterPan =  new Movie('Peter Pan & Wendy', new Genre('fantasy'), 2023,5,'https://picsum.photos/200/300');
   $QueViva = new Movie('¡Que Viva México! ',new Genre('drama'), 2023,5,'https://picsum.photos/200/300');
 /*    new Movie('Parasite', 'thriller', 2019,5,'https://picsum.photos/200/300'),
    new Movie('Supernatural ', 'sci-fi', 2005,5,'https://picsum.photos/200/300'),
    new Movie('Kill Bill: Volume I', 'thriller', 2003,5,'https://picsum.photos/200/300'),
    new Movie('Citadel', 'action', 2023,5,'https://picsum.photos/200/300'),
    new Movie('Babylon', 'historical drama', 2022,5,'https://picsum.photos/200/300'),
    new Movie('La chiave', 'drama', 1983,5,'https://picsum.photos/200/300'),
    new Movie('Nerosubianco', 'drama', 1969,5,'https://picsum.photos/200/300'),
    new Movie('Shutter Island', 'psycho thriller', 2010,5,'https://picsum.photos/200/300'),
    new Movie('Brothers', 'drama', 2009,5,'https://picsum.photos/200/300'), */
$movies =[
    $peterPan,
    $QueViva,
    $spiderman
];
foreach ($movies as $movie) {
var_dump($movie);
}
?>