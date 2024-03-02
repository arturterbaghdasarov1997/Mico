<?php
    $slides = array(
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
    );

    function printSliderSection($slides) {
        echo '<div class="dot_design">
                    <img src="images/dots.png" alt="">
                </div>
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">';
    
        foreach ($slides as $index => $slide) {
            $activeClass = ($index == 0) ? ' active' : '';
    
            echo '<div class="carousel-item' . $activeClass . '">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>' . $slide['title'] . '<br>
                                        <span>' . $slide['subtitle'] . '</span>
                                    </h1>
                                    <p>' . $slide['content'] . '</p>
                                    <a href="' . $slide['link'] . '">
                                        ' . $slide['link_text'] . '
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="' . $slide['image'] . '" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    
        echo '</div>';
    }

    $carouselId = "customCarousel1";
    $prevImageSrc = "images/prev.png";
    $nextImageSrc = "images/next.png";

    function printCarouselControls($carouselId, $prevImageSrc, $nextImageSrc) {
        echo '<div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#' . $carouselId . '" role="button" data-slide="prev">
                    <img src="' . $prevImageSrc . '" alt="">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#' . $carouselId . '" role="button" data-slide="next">
                    <img src="' . $nextImageSrc . '" alt="">
                    <span class="sr-only">Next</span>
                </a>
            </div>';
    }