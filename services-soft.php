<?php
require_once('views/base/header.php');
require_once('views/modules/page-intro.php');
?>

<section class="title-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ Bespoke Software Development</p>
            <h2 class="section-title__heading">The foundation for your business may be a supportive digital platform that grows with you</h2>
        </div>

        <div class="row justify-content-center">
            <?php foreach (range(1, 6) as $item) : ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="#" class="service-btn">
                        Ecommerce
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="chess-section">

    <div class="container">

        <?php foreach (range(1, 2) as $item) : ?>
            <div class="row align-items-center chess-row">
                <div class="col-md-6 col-lg-5">
                    <img src="/images/services/soft/<?= $item; ?>.png" alt="" class="chess-img">
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="chess-title">The Think Cloud</h2>
                    <p class="chess-text">Building secure, high performance systems to run anywhere in the world, all with instant availability powered by our Think Cloud.</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>