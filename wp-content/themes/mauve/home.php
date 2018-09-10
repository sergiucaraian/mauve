<?php
/**
 * @package mauve
 */

 get_header();
 ?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div id="carousel-main" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-main" data-slide-to="0"></li>
                    <li data-target="#carousel-main" data-slide-to="1"></li>
                    <li data-target="#carousel-main" data-slide-to="2"></li>
                    <li data-target="#carousel-main" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="d-block w-100" src="https://mauve.local/wp-content/uploads/2018/08/CAM_5716.jpg" alt="First slide" /></div>
                    <div class="carousel-item"><img class="d-block w-100" src="https://mauve.local/wp-content/uploads/2018/08/CAM_5865.jpg" alt="Second slide" /></div>
                    <div class="carousel-item"><img class="d-block w-100" src="https://mauve.local/wp-content/uploads/2018/08/CAM_5756.jpg" alt="Third slide" /></div>
                    <div class="carousel-item"><img class="d-block w-100" src="https://mauve.local/wp-content/uploads/2018/08/CAM_5897.jpg" alt="Third slide" /></div>
                </div>
                <a class="carousel-control-prev" role="button" href="#carousel-main" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" role="button" href="#carousel-main" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </main>
    </div>

<?php
get_sidebar();
get_footer();
