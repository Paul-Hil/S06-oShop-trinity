<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

// Si j'ai besoin du Model Category
// use App\Models\Category;

class MainController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {  
        // $categoryModel = new Category();
        // $categories = $categoryModel->findThreeCategory();

        $categories = Category::findThreeCategory(); // Appel du modèle + la méthode satic

        $produits = Product::findThreeProduct();

        $tableau = [
            "categories" => $categories,
            "produits" => $produits
        ];

        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('main/home', $tableau);
    }
}

// dans MainController#home, on a mis en place la logique suivante :

// 1. je me demande ce que je veux afficher => tiens, pourquoi pas le nom d'un produit d'id 1 
// 2. il me faut donc récupérer les infos de ce produit => ça c'est le taf du modèle Product => c'est une classe, je l'instancie (et récupère donc un objet, « vide ») et j'utilise sa méthode find et ça me retourne une valeur bien concrète, à savoir un objet (== une autre instance de Product, mais remplie avec des informations à propos du produit trouvé, cette fois)
// 3. cet objet qui représente, en PHP, les infos venant de la BDD MySQL, je le stocke dans une variable…
// 4. … ce qui me permet de manipuler comme je veux cet objet. En l'occurence, je souhaite le fournir à la vue (home.tpl.php). Pour ce faire, j'utilise le mécanisme de transport intégré à la méthode show : $viewVars !
// 4bis. la méthode show est dispo dans MainController#home parce que MainController hérite de CoreController, qui lui possède la méthode show => c'est un outil que j'ai donc à disposition, je l'utilise (correctement) 