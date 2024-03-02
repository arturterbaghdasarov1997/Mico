<?php
    $testimonials = array(
        array(
            'name' => 'Morijorch',
            'designation' => 'Default model text',
            'content' => "Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ),
        array(
            'name' => 'Rochak',
            'designation' => 'Default model text',
            'content' => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
        ),
        array(
            'name' => 'Brad Johns',
            'designation' => 'Default model text',
            'content' => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ),
    );
    function printTestimonialSection($testimonials) {
        echo '<section class="client_section layout_padding">
                <div class="container">
                    <div class="heading_container">
                        <h2>
                            <span>Testimonial</span>
                        </h2>
                    </div>
                </div>
                <div class="container px-0">
                    <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">';
        foreach ($testimonials as $index => $testimonial) {
            $activeClass = ($index == 0) ? ' active' : '';
            echo '<div class="carousel-item' . $activeClass . '">
                    <div class="box">
                        <div class="client_info">
                            <div class="client_name">
                                <h5>' . $testimonial['name'] . '</h5>
                                <h6>' . $testimonial['designation'] . '</h6>
                            </div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p>' . $testimonial['content'] . '</p>
                    </div>
                </div>';
        }
        echo '</div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>';
    }