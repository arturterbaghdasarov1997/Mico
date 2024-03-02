<?php
 
 $doctors = [
    [
    "name" => "Hennry",
    "qualification" => "MBBS",
    "image" => "images/team1.jpg",
    "social" =>
        [
        "facebook" => "fa fa-facebook",
        "twitter" => "fa fa-twitter",
        "linkedin" => "fa fa-linkedin",
        "instagram" => "fa fa+instagram",
        ]
    ],
    [
        "name" => "Jenni",
        "qualification" => "MBBS",
        "image" => "images/team2.jpg",
        "social" =>
        [
            "facebook" => "fa fa-facebook",
            "twitter" => "fa fa-twitter",
            "linkedin" => "fa fa-linkedin",
            "instagram" => "fa fa+instagram",
        ]
    ],
    [
        "name" => "Morco",
        "qualification" => "MBBS",
        "image" => "images/team3.jpg",
        "social" =>
        [
            "facebook" => "fa fa-facebook",
            "twitter" => "fa fa-twitter",
            "linkedin" => "fa fa-linkedin",
            "instagram" => "fa fa+instagram",
        ]
    ],

];

foreach ($doctors as $doctor) {
    ?>
    <div class="item">
        <div class="box">
            <div class="img-box">
                <img src="<?php echo $doctor['image']; ?>" alt="image" />
            </div>
            <div class="detail-box">
                <h5>
                    <?php echo $doctor['name'];?>
                </h5>
                <h6>
                    <?php echo $doctor ['qualification']; ?>
                </h6>
                <div class="social_box">
                    <?php
                    foreach ($doctor['social'] as $socialPlatform => $socialLink) {
                        ?>
                        <a href="<?php echo $socialLink; ?>">
                        <i class= "fa fa-<?php echo $socialPlatform; ?>" aria-hidden= "true"></i>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}