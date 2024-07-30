<div class="tm-hero d-flex justify-content-center align-items-center" id="tm-video-container">
    <video autoplay muted loop id="tm-video">
        <source src="video/hero.mp4" type="video/mp4">
    </video>
    <i id="tm-video-control-button" class="fas fa-pause"></i>
    <form class="d-flex position-absolute tm-search-form">
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

        <!-- Réaliser une boucle PHP pour afficher les 16 conteneurs d'image -->
        <?php for ($i = 1; $i < 16; $i++) : ?>
            <?php

            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="./img/img-<?php echo $i <= 9 ? '0' . $i : $i; ?>.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $titles[$i - 1] ?></h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo $dates[$i - 1] ?></span>
                    <span><?php echo $views[$i - 1] ?> views</span>
                </div>
            </div>
        <?php endfor ?>


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