<?php
require_once('views/base/header.php');
require_once('views/modules/page-intro.php');
?>

<section class="title-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ Rapid Prototyping</p>
            <h2 class="section-title__heading">Test. Learn. Adapt.</h2>
            <p class="section-title__text">UX rapid prototyping allows teams to scope the feasibility of potential solutions in a matter of weeks rather than months of heavy specifications and costly time intensive development iterations.</p>
        </div>

        <div class="row justify-content-center">
            <?php foreach (range(1, 3) as $item) : ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="#" class="service-btn">
                        Prototyping
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="chess-section">

    <div class="container">

        <?php foreach (range(1, 3) as $item) : ?>
            <div class="row align-items-center chess-row">
                <div class="col-md-6 col-lg-5">
                    <img src="/images/services/prototyping/<?= $item; ?>.png" alt="" class="chess-img">
                </div>
                <div class="col-md-6 col-lg-5">
                    <h2 class="chess-title">Better Design, Empowering Your Ideas</h2>
                    <p class="chess-text">With a more responsive design process, feedback is received much earlier and more frequently. This delivers time and cost savings through the development phase as potential challenges will have been resolved in the design phase.</p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<section class="prototyping-banner-section">
    <img src="images/services/prototyping/banner.png" alt="" class="prototyping-banner-img img-full-fit">
    <h3 class="prototyping-banner-title">
        / Work - Cherishing Moments
    </h3>
</section>

<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>