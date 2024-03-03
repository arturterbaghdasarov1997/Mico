<?php
    $contacts = array(
        array("icon" => "fa fa-map-marker", "text" => "Location", "link" => "index.php"),
        array("icon" => "fa fa-phone", "text" => "Call +01 1234567890", "link" => "index.php"),
        array("icon" => "fa fa-envelope", "text" => "demo@gmail.com", "link" => "index.php")
    );

    $socials = array(
        array("icon" => "fa fa-facebook", "link" => "index.php"),
        array("icon" => "fa fa-twitter", "link" => "index.php"),
        array("icon" => "fa fa-linkedin", "link" => "index.php"),
        array("icon" => "fa fa-instagram", "link" => "index.php")
    );

    function printAddress($contacts, $socials) {
        echo '<div class="col-md-6 col-lg-3">';
        echo '<h5>Address</h5>';
        echo '<div class="info_contact">';
        
        foreach ($contacts as $contact) {
            echo '<a href="' . $contact['link'] . '">';
            echo '<i class="' . $contact['icon'] . '" aria-hidden="true"></i>';
            echo '<span>' . $contact['text'] . '</span>';
            echo '</a>';
        }
    
        echo '</div>';
        
        echo '<div class="social_box">';
        
        foreach ($socials as $social) {
            echo '<a href="' . $social['link'] . '">';
            echo '<i class="' . $social['icon'] . '" aria-hidden="true"></i>';
            echo '</a>';
        }
    
        echo '</div>';
        echo '</div>';
    }
