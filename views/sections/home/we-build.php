<section class="home-build-section">
    <div class="section-title section-title--build">
        <h2 class="section-title__heading">We build trust since 2006</h2>
    </div>

    <div class="container">
        <div class="build-row build-slider">

            <?php foreach (range(1, 3) as $item) : ?>
                <div class="col-xl-4">
                    <div class="build">
                        <p class="build__text">
                            Cras mollis lorem at accumsan tempus. Etiam sed sagittis quam. Quisque quis lorem a massa efficitur accumsan accumsan sagittis velit. Maecenas sollicitudin sem faucibus mi cursus, et tempor est luctus. Aenean nec auctor
                        </p>

                        <div class="build-info">
                            <img src="" alt="" class="build-info__avatar d-none d-xl-inline-flex">

                            <div class="build-fio">
                                <p class="build-fio__position">
                                    Matthew Craig-greene
                                </p>
                                <h3 class="build-fio__name">
                                    MJ Hudson
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="slider-nav slider-nav--build d-xl-none">
            <span class="current-slide-build">01</span> / <span class="count-slide-build">06</span>

            <div class="slider-nav__btn">
                <div class="slider-btn slider-btn__prev slider-btn__prev--build">
                    <svg width="20" height="20">
                        <use xlink:href="#slider-arrow-icon"></use>
                    </svg>
                </div>

                <div class="slider-btn slider-btn__next--build">
                    <svg width="20" height="20">
                        <use xlink:href="#slider-arrow-icon"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>