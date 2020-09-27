<?php
require_once('views/base/header.php');
require_once('views/modules/page-intro.php');
?>

<section class="title-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ Web & Mobile Applications</p>
            <h2 class="section-title__heading">Through innovative UX/UI designed prototypes we develop custom applications to improve user experience for web and mobile devices</h2>
        </div>

        <div class="row justify-content-center">
            <?php foreach (range(1, 6) as $item) : ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="#" class="service-btn">
                        Progressive Web Apps
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="chess-section">

    <div class="section-title">
        <div class="section-title__img">
            <img src="images/chess-title-logo.svg" alt="">
        </div>
        <h2 class=" section-title__heading">We work by integrating & Collaborating with you as your technology partners.</h2>
    </div>

    <div class="container">

        <?php foreach (range(1, 6) as $item) : ?>
            <div class="row align-items-center chess-row">
                <div class="col-md-6 col-lg-5">
                    <img src="/images/services/app/<?= $item; ?>.png" alt="" class="chess-img">
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="chess-title">Progressive Web Apps (PWA)</h2>
                    <p class="chess-text">Through PWA’s we can bring together the two worlds of native Mobile Apps and Web Apps. This means incredible user experiences and native phone functionality with flexibility and reach of the web. This delivers a cost saving by reducing the time required to create native apps.</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<section class="process-section">
    <div class="container">
        <div class="proces-title">
            <h2>Our Process</h2>
        </div>

        <div class="row justify-content-center">

            <?php foreach (range(1, 3) as $item) : ?>
                <div class="col-md-6 col-xl-4">
                    <div class="process-item">
                        <img src="./images/services/app/process/<?= $item; ?>.svg" alt="" class="process-item__img">

                        <h3 class="process-item__title">Test</h3>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="process-text text-center d-none d-xl-block mt-5">
            <h4 class="process-text__title">Through our methodology we:</h4>
            <p>Get to the market quickly / Adpat specifications to deliver a fit for purpose product / Learn from user experience / Identify and solve issues quickly</p>
        </div>
    </div>
</section>

<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>