    <div class="container my-4">
        <a href="<?= $router->generate('catalog-productCreate') ?>" class="btn btn-success float-right">Ajouter</a>
        <h2>Liste des produits</h2>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Price</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($product as $currentProduct) : ?>
                        <th scope="row"><?= $currentProduct->getId() ?></th>
                        <td><?= $currentProduct->getName() ?></td>
                        <td><?= $currentProduct->getDescription() ?></td>
                        <td><?= $currentProduct->getPicture() ?></td>
                        <td><?= $currentProduct->getPrice() ?></td>
                        <td><?= $currentProduct->getRate() ?></td>
                        <td><?= $currentProduct->getStatus() ?></td>
                        <td><?= $currentProduct->getCreatedAt() ?></td>
                        <td><?= $currentProduct->getUpdatedAt() ?></td>
                        <td class="text-right">
                            <a href="<?= $router->generate('catalog-productUpdate', ['id' => $currentProduct->getId()]) ?>" class="btn btn-sm btn-warning">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                    <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                </div>
                            </div>
                        </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>