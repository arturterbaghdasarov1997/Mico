<?php
    $subscribes = [
        [
            'logo' => 'images/logo.png',
            'placeholder' => "Your email",
            'button' => "Subscribe",
        ]
    ];

    function printInfoSubscribe($subscribes) : void {
        foreach ($subscribes as $subscribe) {
            echo '<div class="info_logo">
                    <a href="">
                    <img src="' . $subscribe['logo'] . '" alt="">
                    </a>
                </div>
                <div class="info_form">
                    <form action="">
                    <input type="email" placeholder="' . $subscribe['placeholder'] . '">
                    <button>
                        ' . $subscribe['button'] . '
                    </button>
                    </form>
                </div>';
        }
    }