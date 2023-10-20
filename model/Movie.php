<?php

require_once('Database.php');


class Movie
{
    private $id;
    private $title;
    private $synopsis;
    private $genre;
    private $scriptwriter;
    private $productionCompagny;
    private $yearRelease;
    private $filmProducer;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    /**
     * @param $id
     * @param $title
     * @param $synopsis
     * @param $genre
     * @param $scriptwriter
     * @param $productionCompagny
     * @param $yearRelease
     * @param $filmDirector
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($title, $synopsis, $genre, $scriptwriter, $productionCompagny, $yearRelease, $filmDirector)
    {
        $this->title = $title;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->scriptwriter = $scriptwriter;
        $this->productionCompagny = $productionCompagny;
        $this->yearRelease = $yearRelease;
        $this->filmProducer = $filmDirector;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @param $id
     * @param $title
     * @param $synopsis
     * @param $genre
     * @param $scriptwriter
     * @param $productionCompagny
     * @param $yearRelease
     * @param $filmDirector
     */


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param mixed $synopsis
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getScriptwriter()
    {
        return $this->scriptwriter;
    }

    /**
     * @param mixed $scriptwriter
     */
    public function setScriptwriter($scriptwriter)
    {
        $this->scriptwriter = $scriptwriter;
    }

    /**
     * @return mixed
     */
    public function getProductionCompagny()
    {
        return $this->productionCompagny;
    }

    /**
     * @param mixed $productionCompagny
     */
    public function setProductionCompagny($productionCompagny)
    {
        $this->productionCompagny = $productionCompagny;
    }

    /**
     * @return mixed
     */
    public function getYearRelease()
    {
        return $this->yearRelease;
    }

    /**
     * @param mixed $yearRelease
     */
    public function setYearRelease($yearRelease)
    {
        $this->yearRelease = $yearRelease;
    }

    /**
     * @return mixed
     */
    public function getFilmProducer()
    {
        return $this->filmProducer;
    }

    /**
     * @param mixed $filmDirector
     */
    public function setFilmProducer($filmProducer)
    {
        $this->filmProducer = $filmProducer;
    }

    /**
     * @return mixed
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * @param mixed $deleted_at
     */
    public function setDeletedAt($deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }

    public static function add(string $title, string $film_producer, string $synopsis, string $genre, string $scriptWriter, string $production_company, string $year_release)
    {
        try {
            $db = connection();
            $query = $db->prepare('INSERT INTO movies(title, synopsis, genre, scriptwriter, production_company, year_release, film_producer, created_at, updated_at)
                                VALUES (:title, :synopsis, :genre, :scriptwriter, :production_company, :year_release, :film_producer,  NOW(), NOW())');

            $query->bindValue(':title', $title, PDO::PARAM_STR);
            $query->bindValue(':synopsis', $synopsis, PDO::PARAM_STR);
            $query->bindValue(':genre', $genre, PDO::PARAM_STR);
            $query->bindValue(':scriptwriter', $scriptWriter, PDO::PARAM_STR);
            $query->bindValue(':production_company', $production_company, PDO::PARAM_STR);
            $query->bindValue(':year_release', $year_release, PDO::PARAM_STR);
            $query->bindValue(':film_producer', $film_producer, PDO::PARAM_STR);

            $query->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function allMovies()
    {
        $db = connection();

        $query = $db->prepare('SELECT * FROM movies WHERE deleted_at is null');

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteMovie($id)
    {
        $db = connection();
        try {
            $query = $db->prepare('UPDATE movies SET deleted_at = NOW() WHERE id = :id');

            $query->bindValue(':id', $id);

            $query->execute();
            return true;
        } catch (Exception $e) {
            echo($e);
            return false;
        }
    }

    public static function updateMovie(Movie $movie)
    {
        $db = connection();

        try {
            $query = $db->prepare('UPDATE movies SET title = :title, synopsis = :synopsis, genre = :genre, scriptwriter = :scriptwriter, production_company = :production_company, year_release = :year_release, film_producer = :film_producer, updated_at = NOW() WHERE id = :id');
            $query->bindValue(':title', $movie->getTitle());
            $query->bindValue(':synopsis', $movie->getSynopsis());
            $query->bindValue(':genre', $movie->getGenre());
            $query->bindValue(':scriptwriter', $movie->getScriptwriter());
            $query->bindValue(':production_company', $movie->getProductionCompagny());
            $query->bindValue(':year_release', $movie->getYearRelease());
            $query->bindValue(':film_producer', $movie->getFilmProducer());
            $query->bindValue(':id', $movie->getId());
            $query->execute();

            return true;
        } catch (Exception $e) {

            return false;
        }
    }

    public static function getMovie($id)
    {
        $db = connection();
        try {
            $query = $db->prepare('SELECT * FROM movies WHERE id = :id');

            $query->bindValue(':id', $id);
            $query->execute();
            return $query->fetch(\PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return false;
        }

    }
}