<?php require_once('views/base/header.php'); ?>

<section class="service-page-section">
    <div class="container">

        <div class="section-title">
            <p class="section-title__name">/ Services</p>
            <h2 class="section-title__heading">We offer a range of specialist digital transformation services</h2>

            <p class="section-title__text">We can also call on wider marketing and technology services from group companies
                Think Studio (Brand Marketing) and Think Connect (Business Connectivity).</p>
        </div>

        <div class="row">

            <?php foreach (range(1, 6) as $item) : ?>
                <div class="col-lg-6 mb-5">
                    <a href="#" class="service-item">
                        <div class="service-item__img">
                            <img src="../images/page-services/consulting.jpg" alt="Services">
                        </div>
                        <h3 class="service-item__label">
                            / Consulting
                        </h3>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>



<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>