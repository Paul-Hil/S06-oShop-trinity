<nav>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= $router->generate('main-home') ?>">oShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $currentPage === 'main/home' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= $router->generate('main-home') ?>">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= $currentPage === 'category/category' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= $router->generate('catalog-category') ?>">Catégories</a>
                    </li>
                    <li class="nav-item <?= $currentPage === 'product/product' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= $router->generate('catalog-product') ?>">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sélections Accueil &amp; Footer</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- <ul>
        <li><a href="<?= md5(time()) ?>">404</a></li>
    </ul> -->
