<?php


require_once('model/Movie.php');


function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $movie = new Movie($_POST['title'],
            $_POST['synopsis'],
            $_POST['genre'],
            $_POST['scriptwriter'],
            $_POST['productionCompany'],
            $_POST['date'],
            $_POST['filmProducer']);
        $addMovie = Movie::add($movie->getTitle(),
            $movie->getFilmProducer(),
            $movie->getSynopsis(),
            $movie->getGenre(),
            $movie->getScriptwriter(),
            $movie->getProductionCompagny(),
            $movie->getYearRelease());

        if ($addMovie) {
            $message = "le film a bien été inséré";
            header('Location: /mvcTest/MovieController/show');
        } else {
            $message = "un problème est survenue";
        }
    }

    require_once('views/forms/movies/create.php');
}

function show()
{

    $movies = Movie::allMovies();

    $_POST['movies'] = $movies;

    require_once('views/moviesList.php');
}

function delete($id)
{
    $isDeleted = Movie::deleteMovie($id);
    if ($isDeleted) {
        $message = "Le film a bien été supprimé";
        header('Location: /mvcTest/MovieController/show');
    } else {
        $message = "Une erreur est survenue";
    }
    setcookie("message", $message, time() + 20);

    require_once('views/forms/movies/delete.php');
}

function update($id)
{
    $movie = Movie::getMovie($id);
    $_POST['movie'] = $movie;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $movie = new Movie($_POST['title'],
            $_POST['synopsis'],
            $_POST['genre'],
            $_POST['scriptwriter'],
            $_POST['productionCompany'],
            $_POST['date'],
            $_POST['filmProducer']);
        $movie->setId($id);

        $isUpdated = Movie::updateMovie($movie);
        if ($isUpdated) {
            header('Location: /mvcTest/MovieController/show');
        } else {
            $_POST['message'] = 'une erreur est survenue';
        }
    }
    require_once('views/forms/movies/update.php');
}

function consult($id)
{
    $movie = Movie::getMovie($id);
    $_POST['movie'] = $movie;
    require_once('views/consultMovie.php');
}