<?php
    $links = array(
        array("text" => "Home", "link" => "index.php"),
        array("text" => "About", "link" => "about.php"),
        array("text" => "Treatment", "link" => "treatment.php"),
        array("text" => "Doctors", "link" => "doctor.php"),
        array("text" => "Testimonial", "link" => "testimonial.php"),
        array("text" => "Contact us", "link" => "contact.php")
    );

    function printUsefulLinks($links) {
        echo '<div class="info_links_menu">';
        $currentPage = basename($_SERVER['PHP_SELF']);
        
        foreach ($links as $link) {
            $class = ($link['link'] == $currentPage) ? 'active' : '';
            echo '<a class="' . $class . '" href="' . $link['link'] . '">' . $link['text'] . '</a>';
        }
        echo '</div>';
    }