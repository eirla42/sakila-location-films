<?php
require_once __DIR__.'/Film.php';

class Actor
{
    private $actor_id;
    private $first_name;
    private $last_name;
    private $last_update;

    /**
     * @param $actor_id
     * @param $first_name
     * @param $last_name
     * @param $last_update
     */
    public function __construct($actor_id, $first_name, $last_name, $last_update)
    {
        $this->actor_id = $actor_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->last_update = $last_update;
    }

    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actor_id;
    }

    /**
     * @param mixed $actor_id
     */
    public function setActorId($actor_id)
    {
        $this->actor_id = $actor_id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
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
     * Select all actors
     * @return array
     */
    public static function selectAll(){
        $actors = array();
        $sql = "SELECT * FROM actor ORDER BY last_name, first_name";

        $bdd = connectDb();
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($data = $query->fetch()) {
            $actors[$data['actor_id']] = new Actor(
                $data['actor_id'],
                $data['first_name'],
                $data['last_name'],
                $data['last_update']
            );
        }
        $query->closeCursor();

        return $actors;
    }

    /**
     * Select all actors
     * @return array
     */
    public static function selectActorInFilm($film_name){
        $actors = array();
        $sql_film_id = "SELECT film_id FROM film WHERE title = '$film_name'";
        $bdd = connectDb();
        $query_film_id = $bdd->prepare($sql_film_id);
        $query_film_id->execute();
        $film_id = $query_film_id->fetch();
        //print_r($film_id);
        $sql = "SELECT * 
                FROM actor 
                WHERE actor_id IN 
                      (SELECT actor_id from film join film_actor using(film_id) where film_id = $film_id[0])";
        $query = $bdd->prepare($sql);
        $query->execute();
        while ($data = $query->fetch()) {
            $actors[$data['actor_id']] = new Actor(
                $data['actor_id'],
                $data['first_name'],
                $data['last_name'],
                $data['last_update']
            );
        }
        $query->closeCursor();
        //print_r(sizeof($actors));
        return $actors;
    }

    /**
     * Select all actors for a film
     * @return array
     */
    public static function selectActorsByFilmId($film_id){
        $actors = array();
        $bdd = connectDb();
        $sql = "SELECT * 
                FROM actor 
                WHERE actor_id IN 
                      (SELECT actor_id from film join film_actor using(film_id) where film_id = $film_id)";
        $query = $bdd->prepare($sql);
        $query->execute();
        $i=0;
        while ($data = $query->fetch()) {
            $actors[$i++] = new Actor(
                $data['actor_id'],
                $data['first_name'],
                $data['last_name'],
                $data['last_update']
            );
        }
        $query->closeCursor();
        return $actors;
    }

    /**
     * Select an actor
     * @return Actor
     */
    public static function getById($id){
        // Actor
        $sql = "SELECT * FROM `actor` WHERE `actor_id` = :id";

        $bdd = connectDb();
        $query = $bdd->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();
        $actor = $query->fetch();
        $query->closeCursor();

        // Films of this actor
        $actor['films'] = Film::selectFilmsByActorId($id);

        return $actor;
    }

}