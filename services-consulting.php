<?php
require_once('views/base/header.php');
require_once('views/modules/page-intro.php');
?>

<section class="title-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ Consulting</p>
            <h2 class="section-title__heading">Immersing ourselves within your business and team for in-depth discoveries</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-3">
                <a href="#" class="service-btn">
                    UX Design Consulting
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="#" class="service-btn">
                    Software Consulting
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="#" class="service-btn">
                    Bi Consulting
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a href="#" class="service-btn">
                    IT & Network Consulting
                </a>
            </div>
        </div>
    </div>
</section>


<section class="strategy-section">

    <img src="../images/service-consult-strategy.jpg" alt="" class="strategy-bg img-full-fit">

    <div class="container">
        <div class="row justify-content-center justify-content-md-end">
            <div class="col-md-6 col-xl-4">
                <h2 class="color-white mb-5">Alignment Strategy</h2>
                <p class="color-white mb-4">
                    With the constant evolution of technologies, user expectations and access to big data has never been more important to take a 360-strategy look across your whole business.
                </p>

                <a href="#" class="btn btn-primary">
                    Get started
                </a>
            </div>
        </div>
    </div>
</section>


<section class="chess-section">

    <div class="section-title">
        <div class="section-title__img">
            <img src="images/chess-title-logo.svg" alt="">
        </div>
        <h2 class=" section-title__heading">Through innovative UX/UI designed prototypes we develop custom applications to improve user experience for web and mobile devices</h2>
    </div>

    <div class="container">

        <?php foreach (range(1, 4) as $item) : ?>
            <div class="row align-items-center chess-row">
                <div class="col-md-6 col-lg-5">
                    <img src="/images/services/consulting/<?= $item; ?>.png" alt="" class="chess-img">
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="chess-title">UX Design Consulting</h2>
                    <p class="chess-text">Our experts are adept at joining projects at various lifecycles to evaluate products focusing on improving conversion and increasing customer engagement/retention.</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>