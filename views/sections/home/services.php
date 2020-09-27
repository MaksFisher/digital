<section class="home-services-section">
    <div class="section-title">
        <h2 class="section-title__heading home-services-title">We support this through our ready cloud, connectivity and media consultancy from across our business.</h2>
        <a href="#" class="btn btn-primary mt-4 mt-xl-5">Learn more</a>
    </div>

    <div class="slider-nav">
        <span class="current-slide-service">01</span> / <span class="count-slide-service">06</span>

        <div class="slider-nav__btn">
            <div class="slider-btn slider-btn__prev slider-btn__prev--service">
                <svg width="20" height="20">
                    <use xlink:href="#slider-arrow-icon"></use>
                </svg>
            </div>

            <div class="slider-btn slider-btn__next--service">
                <svg width="20" height="20">
                    <use xlink:href="#slider-arrow-icon"></use>
                </svg>
            </div>
        </div>
    </div>

    <div class="service-slider">

        <?php foreach (range(1, 6) as $item) : ?>
        <a href="#" class="service-slide">
            <figure class="service-slide__img">
                <img src="../images/service-slide.jpg" alt="service">
            </figure>
            <h3 class="service-slide__title">/ Consulting</h3>
        </a>
        <?php endforeach; ?>

    </div>

</section>
