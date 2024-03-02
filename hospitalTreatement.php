<?php 
  $hospitalTreatementInfo=[
    [
    "image"=>"images/t1.png",
    "title"=>"Nephrologist Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t2.png",
    "title"=>"Eye Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t3.png",
    "title"=>"Pediatrician Clinic",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t4.png",
    "title"=>"Parental Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
  ];
  
  function hospitalTreatement($hospitalTreatementInfo) {
    echo '
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">';
    foreach ($hospitalTreatementInfo as $info){
      echo '
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="'.$info["image"].'" alt="">
            </div>
            <div class="detail-box">
              <h4>
                '.$info["title"].'
              </h4>
              <p>
                '.$info["text"].'
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>';
    }
  };
?>