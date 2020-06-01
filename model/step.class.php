<?php
class Step {
    private $id;
    private $stepNumber;
    private $content;
    private $recipeId;

    public function __construct($attributs) {
        $this->id = $attributs['K_ID'];           
        $this->stepNumber = intval($attributs['F_StepNumber']);
        $this->content = $attributs['F_Content'];
        $this->recipeId = intval($attributs['K_RecipeID']);
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
     * Get the value of stepNumber
     */ 
    public function getStepNumber()
    {
        return $this->stepNumber;
    }

    /**
     * Set the value of stepNumber
     *
     * @return  self
     */ 
    public function setStepNumber($stepNumber)
    {
        $this->stepNumber = $stepNumber;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of recipeId
     */ 
    public function getRecipeId()
    {
        return $this->recipeId;
    }

    /**
     * Set the value of recipeId
     *
     * @return  self
     */ 
    public function setRecipeId($recipeId)
    {
        $this->recipeId = $recipeId;

        return $this;
    }
}
?>