<?php

class Film
{
    private $film_id;
    private $title;
    private $description;
    private $release_year;
    private $language_id;
    private $original_language_id;
    private $rental_duration;
    private $rental_rate;
    private $length;
    private $replacement_cost;
    private $rating;
    private $special_features;
    private $last_update;

    /**
     * @param $film_id
     * @param $title
     * @param $description
     * @param $release_year
     * @param $language_id
     * @param $original_language_id
     * @param $rental_duration
     * @param $rental_rate
     * @param $length
     * @param $replacement_cost
     * @param $rating
     * @param $special_features
     * @param $last_update
     */
    public function __construct($film_id, $title, $description, $release_year, $language_id, $original_language_id, $rental_duration, $rental_rate, $length, $replacement_cost, $rating, $special_features, $last_update)
    {
        $this->film_id = $film_id;
        $this->title = $title;
        $this->description = $description;
        $this->release_year = $release_year;
        $this->language_id = $language_id;
        $this->original_language_id = $original_language_id;
        $this->rental_duration = $rental_duration;
        $this->rental_rate = $rental_rate;
        $this->length = $length;
        $this->replacement_cost = $replacement_cost;
        $this->rating = $rating;
        $this->special_features = $special_features;
        $this->last_update = $last_update;
    }

    /**
     * @return mixed
     */
    public function getFilmId()
    {
        return $this->film_id;
    }

    /**
     * @param mixed $film_id
     */
    public function setFilmId($film_id)
    {
        $this->film_id = $film_id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->release_year;
    }

    /**
     * @param mixed $release_year
     */
    public function setReleaseYear($release_year)
    {
        $this->release_year = $release_year;
    }

    /**
     * @return mixed
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * @param mixed $language_id
     */
    public function setLanguageId($language_id)
    {
        $this->language_id = $language_id;
    }

    /**
     * @return mixed
     */
    public function getOriginalLanguageId()
    {
        return $this->original_language_id;
    }

    /**
     * @param mixed $original_language_id
     */
    public function setOriginalLanguageId($original_language_id)
    {
        $this->original_language_id = $original_language_id;
    }

    /**
     * @return mixed
     */
    public function getRentalDuration()
    {
        return $this->rental_duration;
    }

    /**
     * @param mixed $rental_duration
     */
    public function setRentalDuration($rental_duration)
    {
        $this->rental_duration = $rental_duration;
    }

    /**
     * @return mixed
     */
    public function getRentalRate()
    {
        return $this->rental_rate;
    }

    /**
     * @param mixed $rental_rate
     */
    public function setRentalRate($rental_rate)
    {
        $this->rental_rate = $rental_rate;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getReplacementCost()
    {
        return $this->replacement_cost;
    }

    /**
     * @param mixed $replacement_cost
     */
    public function setReplacementCost($replacement_cost)
    {
        $this->replacement_cost = $replacement_cost;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getSpecialFeatures()
    {
        return $this->special_features;
    }

    /**
     * @param mixed $special_features
     */
    public function setSpecialFeatures($special_features)
    {
        $this->special_features = $special_features;
    }

    /**
     * @return mixed
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * @param mixed $last_update
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;
    }

    /**
     * Select all films
     * @return array
     */
    public static function selectAll(){
        // Pagination
        $count = self::countAll();
        $nbPerPage = 20;
        $_SESSION['pages'] = ceil($count / $nbPerPage);
        $first = ($_SESSION['currentPage'] * $nbPerPage) - $nbPerPage;

        // Request
        $films = array();
        $sql = "SELECT * FROM film LIMIT :first, :nbPerPage;";

        $bdd = connectDb();
        $query = $bdd->prepare($sql);

        $query->bindValue(':first', $first, PDO::PARAM_INT);
        $query->bindValue(':nbPerPage', $nbPerPage, PDO::PARAM_INT);

        $query->execute();
        while ($data = $query->fetch()) {
            $films[$data['film_id']] = new Film(
                $data['film_id'], $data['title'], $data['description'], $data['release_year'], $data['language_id'],
                $data['original_language_id'], $data['rental_duration'], $data['rental_rate'], $data['length'],
                $data['replacement_cost'], $data['rating'], $data['special_features'], $data['last_update']
            );
        }
        $query->closeCursor();

        return $films;
    }

    /**
     * Count all films
     * @return int
     */
    public static function countAll(){
        $sql = "SELECT COUNT(*) as 'count' FROM film";

        $bdd = connectDb();
        $query = $bdd->prepare($sql);
        $query->execute();
        $result = $query->fetch();
        $query->closeCursor();

        return (int) $result['count'];
    }

    /**
     * Select all actors
     * @return array
     */
    public static function selectFilmFromActor($actor_lname, $actor_fname){
        $films = array();
        $bdd = connectDb();
        $sql_actor_id = "SELECT actor_id FROM actor WHERE last_name = '$actor_lname' and first_name = '$actor_fname'";
        $query_actor_id = $bdd->prepare($sql_actor_id);
        $query_actor_id->execute();
        $actor_id = $query_actor_id->fetch();
        $sql = "SELECT * 
                FROM film 
                WHERE film_id IN 
                      (SELECT film_id from film join film_actor using(film_id) where actor_id = $actor_id[0])";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($data = $query->fetch()) {
            $films[$data['film_id']] = new Film(
                $data['film_id'], $data['title'], $data['description'], $data['release_year'], $data['language_id'],
                $data['original_language_id'], $data['rental_duration'], $data['rental_rate'], $data['length'],
                $data['replacement_cost'], $data['rating'], $data['special_features'], $data['last_update']
            );
        }
        $query->closeCursor();
        return $films;
    }


    /**
     * INSERT a film
     */
    public function add()
    {
        $last_update = new DateTime("now");
        $last_update = $last_update->format('Y-m-d H:i:s');
        var_dump($last_update);
        $sql = "INSERT INTO `film` (title, description, release_year, language_id, original_language_id,
                       rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update
                       ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

        $bdd = connectDb();
        $query = $bdd->prepare($sql);
        $query->execute(array(
            $this->getTitle(), $this->getDescription(), $this->getReleaseYear(), $this->getLanguageId(),
            $this->getOriginalLanguageId(), $this->getRentalDuration(), $this->getRentalRate(), $this->getLength(),
            $this->getReplacementCost(), $this->getRating(), $this->getSpecialFeatures(), $last_update));
        $query->closeCursor();
    }
}