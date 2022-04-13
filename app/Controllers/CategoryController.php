<?php

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends CoreController {

     /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function category()
    {
        $categories = Category::findAll();

        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('category/category', ['categories' => $categories]);
    }

    public function categoryUpdate($params)
    {
        $category = new Category();
        $currentCategory = $category->find($params);

        $tableau = [
            "category" => $currentCategory
        ];

        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('category/category.update', $tableau);
    }

    public function categoryUpdatePost($params)
    {   
        $name = filter_input(INPUT_POST, 'name');
        $subtitle = filter_input(INPUT_POST, 'subtitle');
        $picture = filter_input(INPUT_POST, 'picture');

        $categoryModel = new Category();
        $currentCategory = $categoryModel->find($params);

        $currentCategory->setName($name);
        $currentCategory->setSubtitle($subtitle);
        $currentCategory->setPicture($picture);
        
        $currentCategory->update();

        header("Location: http://localhost:8080/category/update/{$currentCategory->getId()}");
    }

    public function create()
    {
        $this->show('category/category.create');
    }

    public function createPost()
    {
        $name = filter_input(INPUT_POST, 'name');
        $subtitle = filter_input(INPUT_POST, 'subtitle');
        $picture = filter_input(INPUT_POST, 'picture');

        $categoryModel = new Category();

        $categoryModel->setName($name);
        $categoryModel->setSubtitle($subtitle);
        $categoryModel->setPicture($picture);

        $categoryModel->insert();

        header("Location: http://localhost:8080/category");
    }
}