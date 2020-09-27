<?php require_once('views/base/header.php'); ?>

<section class="title-works-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ work</p>
            <h2 class="section-title__heading">Our client partnerships help create better business</h2>
        </div>
    </div>
</section>

<section class="work-section">

    <?php foreach (range(1, 3) as $item) : ?>
        <a href="#" class="service-item">
            <div class="service-item__img">
                <img src="./images/page-works/<?= $item; ?>.jpg" alt="Work">
            </div>
            <h3 class="service-item__label service-item__label--work">
                / The Investor Portal
            </h3>
        </a>
    <?php endforeach; ?>
</section>




<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>