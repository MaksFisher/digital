<?php
require_once('views/base/header.php');
require_once('views/modules/page-intro.php');
?>

<section class="title-section">
    <div class="container">
        <div class="section-title">
            <p class="section-title__name">/ UX DESIGN</p>
            <h2 class="section-title__heading">Better user experience (UX) drives better engagement, ultimately delivering better results to clients and their customers</h2>
        </div>

        <div class="section-title">
            <h3 class="section-title__subheading">Understanding</h3>

            <p class="section-title__text">Human centred design makes for better engagement and retentions. Being user centric means we get to know your customers to deliver wonderful user experiences.</p>
        </div>

        <div class="row justify-content-center">

            <?php foreach (range(1, 6) as $item) : ?>
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="#" class="service-btn">
                        User Research
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<section class="process-section">
    <div class="container">
        <div class="proces-title">
            <h2 class="mb-5">Our Process</h2>
            <p>Every project is unique and should always be guided by user engagement. We follow 4 key touch points:</p>
        </div>

        <div class="row">

            <?php foreach (range(1, 4) as $item) : ?>
                <div class="col-xl-3">
                    <div class="process-item">
                        <img src="./images/services/disign/<?= $item; ?>.svg" alt="" class="process-item__img">

                        <h3 class="process-item__title">Research & Define</h3>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php
require_once('views/modules/lets-start-talking.php');
require_once('views/base/footer.php');
?>