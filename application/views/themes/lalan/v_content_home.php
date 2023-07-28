<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
    <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true"
        data-dots="false" data-space="0" data-loop="true" data-speed="800">
        <!-- Slide #1 -->
        <?php
            $slide = select("slide","*","WHERE flag_aktif='1' ORDER BY created DESC");
            foreach($slide as $i => $r){
                echo '
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="'.base_url().'upload/slide/img_slide/'.$r['img_slide'].'" alt="background" />
                    </div>
                    <div class="slider--content">
                    <div class="text-center">
                        <h1>'.$r['name'].'</h1>
                        <h1>'.$r['detail'].'</h1>
                    </div>
                </div>
                </div>';
            }
        ?>
    </div>
</section>

{CONTENT}
