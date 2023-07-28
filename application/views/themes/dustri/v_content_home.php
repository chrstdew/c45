<div class="flat-slider style1">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
            <?php
                $slide = select("slide","*","WHERE flag_aktif='1' ORDER BY created DESC");
                foreach($slide as $i => $r){
            ?>
                <li data-transition="random">
                    <img
                        src="<?php echo base_url().'upload/slide/img_slide/'.$r['img_slide']; ?>"
                        alt="image"
                        data-bgposition="center center"
                        data-no-retina=""
                    />
                    <div class="overlay"></div>

                    <div
                        class="
                            tp-caption tp-resizeme
                            text-ffb922
                            font-rubik font-weight-500
                            icon
                            slider2
                        "
                        data-x="['left','left','left','left']"
                        data-hoffset="['-17','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-185','-118','-98','-78']"
                        data-fontsize="['88','20','20','16']"
                        data-lineheight="['88','48','28','14']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-paddingleft="['3','3','3','3']"
                        data-responsive_offset="on"
                    >
                        <ul>
                            <li><img src="{BASE_URL}themes/{THEMES}/image/home/icon-slider-1.png" alt="icon" /></li>
                            <li><img src="{BASE_URL}themes/{THEMES}/image/home/icon-slider-2.png" alt="icon" /></li>
                        </ul>
                    </div>
                    <div
                        class="
                            tp-caption tp-resizeme
                            text-ffb922
                            font-rubik font-weight-500
                            all-you
                            slider2
                        "
                        data-x="['left','left','left','left']"
                        data-hoffset="['-17','30','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-96','-96','-118','-148']"
                        data-fontsize="['18','18','18','18']"
                        data-lineheight="['100','48','28','28']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="700"
                        data-splitin="none"
                        data-splitout="none"
                        data-paddingleft="['3','3','3','3']"
                        data-responsive_offset="on"
                    >
                        <?php echo $r['detail']; ?>
                    </div>
                    <div
                        class="
                            tp-caption tp-resizeme
                            font-rubik font-weight-700
                            best
                            creative
                            slider2
                        "
                        data-x="['left','left','left','left']"
                        data-hoffset="['-17','30','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['26','26','0','-40']"
                        data-fontsize="['100','70','60','60']"
                        data-lineheight="['100','80','70','70']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <?php echo $r['name']; ?>
                    </div>
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['-17','30','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','150','110']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-paddingtop="['0','0','0','0']"
                        data-paddingbottom="['0','0','0','0']"
                    >
                        <a href="#about" class="hvr-shutter-out-verticall">About</a>
                    </div>
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
    </div>
</div>

<div class="main-home1">
{CONTENT}
</div>
