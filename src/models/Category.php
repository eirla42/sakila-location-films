<?php

class Category
{
    private $category_id;
    private $name;
    private $last_update;

    /**
     * @param $category_id
     * @param $name
     * @param $last_update
     */
    public function __construct($category_id, $name, $last_update)
    {
        $this->category_id = $category_id;
        $this->name = $name;
        $this->last_update = $last_update;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Select all actors for a film
     * @return array
     */
    public static function selectCategoriesByFilmId($film_id){
        $categories = array();
        $bdd = connectDb();
        $sql = "SELECT * 
                FROM category 
                WHERE category_id IN 
                      (SELECT category_id from film join film_category using(film_id) where film_id = $film_id)";
        $query = $bdd->prepare($sql);
        $query->execute();
        $i=0;
        while ($data = $query->fetch()) {
            $categories[$i++] = new Category(
                $data['category_id'],
                $data['name'],
                $data['last_update']
            );
        }
        $query->closeCursor();
        return $categories;
    }

}