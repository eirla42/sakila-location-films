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
    public static function selectAll(): array {
        $films = array();
        $sql = "SELECT * FROM film";

        $bdd = connectDb();
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
}