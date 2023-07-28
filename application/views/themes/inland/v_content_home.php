<div class="int_banner_slider"> 
    <div class="banner_box_wrapper">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 align-self-center">
                    <div class="main_contentblock">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php
                                $slide = select("slide","*","WHERE flag_aktif='1' ORDER BY created");
                                foreach($slide as $i => $r){
                                    echo '
                                    <div class="swiper-slide">
                                        <div class="swiper_imgbox imgbox1">
                                            <div class="swipper_img">
                                                <h4>Swapraja Sakti Mandiri</h4>
                                                <h2>'.$r['name'].'</h2>
                                                <p>'.$r['detail'].'</p>
                                                <a href="'.base_url().'#portfolio" class="int_btn">Portofolio <span class="btn_caret"><i class="fas fa-caret-right"></i></span></a>
                                                <h1 style="font-size: 50px; color: #040459;">Portofolio</h1>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-8 col-lg-8 col-md-7 align-self-center pr-0">
                    <!--=== Swiper ===-->
                    <div class="main_imgblock">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php
                                foreach($slide as $i => $r){
                                    echo '
                                    <div class="swiper-slide">
                                        <div class="swiper_contbox">
                                            <div class="swipper_conntent">
                                                <img src="'.base_url().'upload/slide/img_slide/'.$r['img_slide'].'" class="img-fluid" alt="images" style="min-height: 700px;" />
                                            </div>
                                        </div>
                                    </div>';
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Add Arrows ===-->
            <div class="banner_navi">
                <div class="swiper-button-next">Next</div>
                <div class="swiper-button-prev">Prev</div>
            </div>
        </div>
    </div>
</div>

{CONTENT}
