<div class="container my-4">
        <a href="<?= $router->generate('catalog-product') ?>" class="btn btn-success float-right">Retour</a>
        <h2>Ajouter un produit</h2>
        
        <form action="" method="POST" class="mt-5">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="subtitle">Description</label>
                <input type="text" class="form-control" id="subtitle" name="description" aria-describedby="subtitleHelpBlock">
                <small id="subtitleHelpBlock" class="form-text text-muted">
                    Sera affiché sur la page d'accueil comme bouton devant l'image
                </small>
            </div>
            <div class="form-group">
                <label for="picture">Image</label>
                <input type="text" class="form-control" id="picture" name="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock">
                <small id="pictureHelpBlock" class="form-text text-muted">
                    URL relative d'une image (jpg, gif, svg ou png) fournie sur <a href="https://benoclock.github.io/S06-images/" target="_blank">cette page</a>
                </small>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="priceHelpBlock">
            </div>
            <div class="form-group">
                <label for="rate">Note</label>
                <input type="text" class="form-control" id="rate" name="rate" aria-describedby="rateHelpBlock">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" aria-describedby="statusHelpBlock">
            </div>
            <div class="form-group">
                <label for="brand">Marque id</label>
                <input type="text" class="form-control" id="brand" name="brand_id" aria-describedby="marqueHelpBlock">
            </div>
            <div class="form-group">
                <label for="type">Type id</label>
                <input type="text" class="form-control" id="type" name="type_id" aria-describedby="typeHelpBlock">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>