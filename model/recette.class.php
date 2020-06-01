<?php
class Recette {
    private $id;
    private $name;
    private $cost;
    private $difficulty;
    private $persons;
    private $picture;
    private $prepTime;
    private $cookTime;
    private $ingredients;
    private $validate;
    private $idUser;

    public function __construct($attributs) {
        $this->id = $attributs['K_ID'];
        $this->name = $attributs['F_Name'];
        $this->cost = $attributs['K_Cost'];
        $this->difficulty = $attributs['K_Difficulty'];
        $this->persons = $attributs['F_Persons'];
        $this->picture = $attributs['F_Photo'];
        $this->prepTime = $attributs['F_PrepTime'];
        $this->cookTime = $attributs['F_CookTime'];
        $this->ingredients = $attributs['F_Ingredients'];
        $this->validate = $attributs['F_Validate'];
        $this->idUser = $attributs['K_User'];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of cost
     */ 
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set the value of cost
     *
     * @return  self
     */ 
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get the value of difficulty
     */ 
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set the value of difficulty
     *
     * @return  self
     */ 
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get the value of persons
     */ 
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * Set the value of persons
     *
     * @return  self
     */ 
    public function setPersons($persons)
    {
        $this->persons = $persons;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of prepTime
     */ 
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * Set the value of prepTime
     *
     * @return  self
     */ 
    public function setPrepTime($prepTime)
    {
        $this->prepTime = $prepTime;

        return $this;
    }

    /**
     * Get the value of cookTime
     */ 
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * Set the value of cookTime
     *
     * @return  self
     */ 
    public function setCookTime($cookTime)
    {
        $this->cookTime = $cookTime;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of validate
     */ 
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Set the value of validate
     *
     * @return  self
     */ 
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }
}
?>