<?php 
    class TagCategory {
        private $id;
        private $name;
        private $tagList = array();

        public function __construct($attributs) {
            $this->id = $attributs['K_ID'];           
            $this->name = $attributs['F_Name'];
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
     * Get the value of tagList
     */ 
    public function getTagList()
    {
        return $this->tagList;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setTagList($tagList)
    {
        $this->tagList = $tagList;

        return $this;
    }

}


?>