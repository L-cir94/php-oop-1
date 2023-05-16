<?php
/* class user
{
    public $nome;
    public $sconto = 0;
    public function setSconto($età)
    {
        if ($età > 65) {
            $this->sconto = 40;
        }
    }
    public function getSconto()
    {
        return $this->sconto;
    }
}
$filippo = new user();
$filippo->setSconto(40);
$sconto_filippo =$filippo->getSconto(); */
class movie
{
    public $title;
    public $genre;
    public function __construct(string $title, string $genre)
    {
        $this->title = $title;
        $this->genre = $genre;
    }
}
$matrix = new movie('matrix', 'lorem');
$avatar = new movie('avatar', 'lorem');
var_dump($matrix,$avatar);