<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
    <form class="d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <form action="" class="tm-text-primary">
                Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
            </form>
        </div>
    </div>

    <!-- CONTENEUR DES IMAGES -->
    <div class="row tm-mb-90 tm-gallery">
        <?php
        $articles = getArticles();
        ?>
        <!-- Réaliser une boucle PHP pour afficher les 16 conteneurs d'image -->
        <?php
        foreach ($articles as $article) : ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <?php
                    $imagePath = './img/' . $article['image'];
                    ?>
                    <img src="<?php echo file_exists($imagePath) ? $imagePath : DEFAULT_IMAGE ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $article['title']; ?></h2>
                        <a href="index.php?pg=product&id=<?php echo strtolower($article['title']); ?>">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $article['date'] ?></span>
                    <span><?php echo $article['views'] ?> views</span>
                </div>
            </div>
        <?php endforeach ?>


    </div>
    <!-- row -->
    <div class="row tm-mb-90">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
            <div class="tm-paging d-flex">
                <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                <a href="javascript:void(0);" class="tm-paging-link">2</a>
                <a href="javascript:void(0);" class="tm-paging-link">3</a>
                <a href="javascript:void(0);" class="tm-paging-link">4</a>
            </div>
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
        </div>
    </div>
</div> <!-- container-fluid, tm-container-content -->