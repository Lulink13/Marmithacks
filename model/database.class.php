<?php
require_once 'user.class.php';
require_once 'category.class.php';
require_once 'tagCategory.class.php';
require_once 'tag.class.php';
require_once 'difficulty.class.php';
require_once 'cost.class.php';
require_once 'recette.class.php';
require_once 'step.class.php';
class Database {
    private $bdd;

    public function __construct() {
        if (strpos(dirname(__FILE__), 'xampp/htdocs/') !== 'true') {
            $host = 'localhost';
            $dbname = 'marmithacks';
            $user = 'root';
            $mdp = 'C7w6vrX52V';
        } else {
            $host = 'mysql-marmithacks.alwaysdata.net';
            $dbname = 'marmithacks_bdd';
            $user = '206832';
            $mdp = 'TSyODN7M9Q&S';
        }
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $mdp);
        $this->bdd = $bdd;
    }

    public function getUserParams($id) {
        $req = $this->bdd->prepare('SELECT * FROM t_user WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
        return new User($req->fetch(PDO::FETCH_ASSOC));
    }

    public function connexionUser($mail, $mdp) {
        $req = $this->bdd->prepare('SELECT * FROM t_user WHERE F_Mail=:mail AND F_Password=:mdp');
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function getListUsers() {
        $req = $this->bdd->prepare('SELECT * FROM t_user');
        $req->execute();
        $listUsers = $req->fetchAll(PDO::FETCH_ASSOC);

        $arrayUser = array();

        foreach ($listUsers as $users) {
            $user = new User($users);
            array_push($arrayUser, $user);
        }
        return $arrayUser;
    }


    public function deleteUser($id) {
        $req = $this->bdd->prepare('DELETE FROM t_user WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function ajoutUser($user, $password) {
        $req = $this->bdd->prepare('INSERT INTO t_user VALUES (NULL, :name, :surname, :username, :password, :mail, :admin, :picture)');
        $req->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $req->bindValue(':surname', $user->getSurname(), PDO::PARAM_STR);
        $req->bindValue(':username', $user->getUsername(), PDO::PARAM_STR);
        $req->bindValue(':password', $password, PDO::PARAM_STR);
        $req->bindValue(':mail', $user->getMail(), PDO::PARAM_STR);
        $req->bindValue(':admin', $user->getAdmin(), PDO::PARAM_STR);
        $req->bindValue(':picture', $user->getPicture(), PDO::PARAM_STR);
        $req->execute();
    }

    public function modifUser($user) {
        $req = $this->bdd->prepare('UPDATE t_user SET F_Name = :name, F_Surname = :surname, F_Username = :username, F_Mail = :mail, F_Admin = :admin, F_Picture = :picture WHERE K_ID = :id');
        $req->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $req->bindValue(':surname', $user->getSurname(), PDO::PARAM_STR);
        $req->bindValue(':username', $user->getUsername(), PDO::PARAM_STR);
        $req->bindValue(':mail', $user->getMail(), PDO::PARAM_STR);
        $req->bindValue(':admin', $user->getAdmin(), PDO::PARAM_STR);
        $req->bindValue(':picture', $user->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':id', $user->getId(), PDO::PARAM_STR);
        $req->execute();
    }

    public function getCategoryParams($id) {
        $req = $this->bdd->prepare('SELECT * FROM t_category WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
        return new Category($req->fetch(PDO::FETCH_ASSOC));
    }

    public function getListCategories() {
        $req = $this->bdd->prepare('SELECT * FROM t_category');
        $req->execute();
        $listCategories = $req->fetchAll(PDO::FETCH_ASSOC);

        $arrayCategories = array();

        foreach ($listCategories as $categories) {
            $category = new Category($categories);
            array_push($arrayCategories, $category);
        }
        return $arrayCategories;
    }

    public function deleteCategory($id) {
        $req = $this->bdd->prepare('DELETE FROM t_category WHERE K_ID = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function ajoutCategory($category) {
        $req = $this->bdd->prepare('INSERT INTO t_category VALUES (NULL, :name)');
        $req->bindValue(':name', $category->getName(), PDO::PARAM_STR);
        $req->execute();
    }

    public function modifCategory($category) {
        $req = $this->bdd->prepare('UPDATE t_category SET F_Name = :name WHERE K_ID = :id');
        $req->bindValue(':name', $category->getName(), PDO::PARAM_STR);
        $req->bindValue(':id', $category->getId(), PDO::PARAM_STR);
        $req->execute();
    }

    public function getListTagCategories() {
        $req = $this->bdd->prepare('SELECT * FROM t_tagcategory');
        $req->execute();
        $listTagCategory = $req->fetchAll(PDO::FETCH_ASSOC);

        $arrayTagCategory = array();

        foreach ($listTagCategory as $tagCategories) {
            $tagCategory = new TagCategory($tagCategories);
            $tagCategory->setTagList($this->getListTags($tagCategory->getId()));
            array_push($arrayTagCategory, $tagCategory);
        }
        return $arrayTagCategory;
    }

    public function getListTags($TagCategoryId) {
        $req = $this->bdd->prepare('SELECT * FROM t_tag WHERE K_TagCategory = :id');
        $req->bindValue(':id', $TagCategoryId, PDO::PARAM_STR);
        $req->execute();
        $listTags = $req->fetchAll(PDO::FETCH_ASSOC);

        $arrayTag = array();

        foreach ($listTags as $tags) {
            $tag = new Tag($tags);
            array_push($arrayTag, $tag);
        }
        return $arrayTag;

    }

    public function getListDifficulties() {
        $req = $this->bdd->prepare('SELECT * FROM t_difficulty ORDER BY K_ID ASC');
        $req->execute();
        $listDifficulties = $req->fetchAll(PDO::FETCH_ASSOC);
        $arrayDifficulties = array();

        foreach ($listDifficulties as $difficulties) {
            $difficulty = new Difficulty($difficulties);
            array_push($arrayDifficulties, $difficulty);
        }
        return $arrayDifficulties;
    }

    public function getListCosts() {
        $req = $this->bdd->prepare('SELECT * FROM t_cost ORDER BY K_ID ASC');
        $req->execute();
        $listCosts = $req->fetchAll(PDO::FETCH_ASSOC);
        $arrayCosts = array();

        foreach ($listCosts as $costs) {
            $cost = new Cost($costs);
            array_push($arrayCosts, $cost);
        }
        return $arrayCosts;
    }

    public function ajoutRecette($recette) {
        $req = $this->bdd->prepare('INSERT INTO t_recipe VALUES (NULL, :name, :cost, :difficulty, :persons, :photo, :prepTime, :cookTime, :ingredients, :validate, :user)');
        $req->bindValue(':name', $recette->getName(), PDO::PARAM_STR);
        $req->bindValue(':cost', $recette->getCost(), PDO::PARAM_STR);
        $req->bindValue(':difficulty', $recette->getDifficulty(), PDO::PARAM_STR);
        $req->bindValue(':persons', $recette->getPersons(), PDO::PARAM_STR);
        $req->bindValue(':photo', $recette->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':prepTime', $recette->getPrepTime(), PDO::PARAM_STR);
        $req->bindValue(':cookTime', $recette->getCookTime(), PDO::PARAM_STR);
        $req->bindValue(':ingredients', $recette->getIngredients(), PDO::PARAM_STR);
        $req->bindValue(':validate', $recette->getValidate(), PDO::PARAM_STR);
        $req->bindValue(':user', $recette->getIdUser(), PDO::PARAM_STR);
        $req->execute();
        return $this->bdd->lastInsertId();
    }

    public function modifRecette($recette) {
        $req = $this->bdd->prepare('UPDATE t_recipe SET K_ID = :id, F_Name = :name, K_Cost = :cost, K_Difficulty = :difficulty, F_Persons = :persons, F_Photo = :photo, F_PrepTime = :prepTime, F_CookTime = :cookTime, F_Ingredients = :ingredients, F_Validate = :validate, K_User = :user)');
        $req->bindValue(':id', $recette->getId(), PDO::PARAM_STR);
        $req->bindValue(':name', $recette->getName(), PDO::PARAM_STR);
        $req->bindValue(':cost', $recette->getCost(), PDO::PARAM_STR);
        $req->bindValue(':difficulty', $recette->getDifficulty(), PDO::PARAM_STR);
        $req->bindValue(':persons', $recette->getPersons(), PDO::PARAM_STR);
        $req->bindValue(':photo', $recette->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':prepTime', $recette->getPrepTime(), PDO::PARAM_STR);
        $req->bindValue(':cookTime', $recette->getCookTime(), PDO::PARAM_STR);
        $req->bindValue(':ingredients', $recette->getIngredients(), PDO::PARAM_STR);
        $req->bindValue(':validate', $recette->getValidate(), PDO::PARAM_STR);
        $req->bindValue(':user', $recette->getIdUser(), PDO::PARAM_STR);
        $req->execute();
        return $this->bdd->lastInsertId();
    }

    public function ajoutStep($step) {
        $req = $this->bdd->prepare('INSERT INTO t_steps VALUES (NULL, :stepNumber, :content, :recipeID)');
        $req->bindValue(':stepNumber', $step->getStepNumber(), PDO::PARAM_STR);
        $req->bindValue(':content', $step->getContent(), PDO::PARAM_STR);
        $req->bindValue(':recipeID', $step->getRecipeId(), PDO::PARAM_STR);
        $req->execute();
    }

    public function ajoutRecipeCategory($idRecipe, $idCategory) {
        $req = $this->bdd->prepare('INSERT INTO map_recipecategory VALUES (NULL, :idRecipe, :idCategory)');
        $req->bindValue(':idRecipe', $idRecipe, PDO::PARAM_STR);
        $req->bindValue(':idCategory', $idCategory, PDO::PARAM_STR);
        $req->execute();
    }
}
?>