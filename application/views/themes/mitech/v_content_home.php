<?php

$slide = select2("slide","*","WHERE flag_aktif='1' ORDER BY created");
echo '
<div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120" style="background-image: url(\''.base_url().'/upload/slide/img_slide/'.$slide['img_slide'].'\')">
    <div class="container">
        <div class="row align-items-center" style="min-height: 50vh;">
            <div class="col-lg-6 col-md-6">
                <div class="appointment-hero-wrap wow move-up">
                    <div class="appointment-hero-text">
                        <h6 class="text-white">'.$slide['name'].'</h6>
                        <h1 class="font-weight--reguler text-white mb-30">'.$slide['detail'].'</span></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 me-auto ms-auto col-md-6">

            </div>
        </div>
    </div>
</div>';
?>

{CONTENT}