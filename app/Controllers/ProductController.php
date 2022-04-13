<?php

namespace App\Controllers;
use App\Models\Product;

class ProductController extends CoreController {

    public function product()
    {
        $product = new Product();
        $allProduct = $product->findAll();
        $tableau = [
            "product" => $allProduct
        ];
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('product/product', $tableau);
    }
    
    public function productUpdate($params)
    {
        $product = new Product();
        $currentProduct = $product->find($params);
        $tableau = [
            "product" => $currentProduct
        ];
        
        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('product/product.update', $tableau);
    }

    public function productUpdatePost($params)
    {
        $name = filter_input(INPUT_POST, 'name');
        $description = filter_input(INPUT_POST, 'description');
        $picture = filter_input(INPUT_POST, 'picture');
        $price = filter_input(INPUT_POST, 'price');
        $rate = filter_input(INPUT_POST, 'rate');
        $status = filter_input(INPUT_POST, 'status');
        $brand_id = filter_input(INPUT_POST, 'brand_id');
        $type_id = filter_input(INPUT_POST, 'type_id');

        $productModel = new Product();
        $currentProduct = $productModel->find($params);

        $currentProduct->setName($name);
        $currentProduct->setDescription($description);
        $currentProduct->setPicture($picture);
        $currentProduct->setPrice($price);
        $currentProduct->setRate($rate);
        $currentProduct->setStatus($status);
        $currentProduct->setBrandId($brand_id);
        $currentProduct->setTypeId($type_id);

        $currentProduct->update();

        header("Location: http://localhost:8080/product/update/{$currentProduct->getId()}");
    }

    public function create()
    {
        $this->show('product/product.create');
    }

    public function createPost()
    {
        $name = filter_input(INPUT_POST, 'name');
        $description = filter_input(INPUT_POST, 'description');
        $picture = filter_input(INPUT_POST, 'picture');
        $price = filter_input(INPUT_POST, 'price');
        $rate = filter_input(INPUT_POST, 'rate');
        $status = filter_input(INPUT_POST, 'status');
        $brand_id = filter_input(INPUT_POST, 'brand_id');
        $type_id = filter_input(INPUT_POST, 'type_id');

        $productModel = new Product();

        $productModel->setName($name);
        $productModel->setDescription($description);
        $productModel->setPicture($picture);
        $productModel->setPrice($price);
        $productModel->setRate($rate);
        $productModel->setStatus($status);
        $productModel->setBrandId($brand_id);
        $productModel->setTypeId($type_id);
        
        $productModel->insert();

        header("Location: http://localhost:8080/product");
    }
}