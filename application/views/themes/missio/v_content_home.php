<?php
echo '
<section id="home" class="mt-0 pt-0">
<div class="rev_slider_wrapper fullscreen-container">
      <div id="slider10" class="rev_slider fullscreenbanner dark-wrapper" data-version="5.4.7">
        <ul>';
        $slide = select("slide","*","WHERE flag_aktif='1' ORDER BY created DESC");
        foreach($slide as $i => $r){
            echo '
            <li data-transition="fade" data-thumb="'.base_url().'upload/slide/img_slide/'.$r['img_slide'].'">
                <img src="'.base_url().'upload/slide/img_slide/'.$r['img_slide'].'" alt="Image">
            </li>';
        }
        
        echo '
        </ul>
        <div class="tp-static-layers">
            <div class="tp-caption tp-static-layer tp-shape tp-shapewrapper tp-gradient" 
                data-frames=\'[{"delay":0,"speed":300,"frame":"0","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
                data-x="center" data-y="bottom" data-width="full" data-height="200" data-startslide="0" data-endslide="4" data-responsive_offset="on" 
                data-textalign="[\'center\',\'center\',\'center\',\'center\']" data-type="shape" data-basealign="slide" data-whitespace="nowrap" style="z-index: 6;">
            </div>
            <div style="text-shadow:-1px -1px 0 #000,0   -1px 0 #000,1px -1px 0 #000,1px  0   0 #000,1px  1px 0 #000,0    1px 0 #000,-1px  1px 0 #000,-1px  0   0 #000;" 
                class="tp-caption tp-static-layer font-weight-700 color-white text-center" data-x="center" data-y="middle" 
                data-voffset="[\'-80\',\'-80\',\'-80\',\'-60\']" data-fontsize="[\'55\',\'55\',\'55\',\'35\']" data-lineheight="[\'65\',\'65\',\'65\',\'45\']"
                data-width="[\'800\',\'800\',\'680\',\'340\']" data-textAlign="[\'center\',\'center\',\'center\',\'center\']" data-whitespace="[\'normal\',\'normal\',\'normal\',\'normal\']" 
                data-frames=\'[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
                data-startslide="0" data-endslide="4" data-responsive="on" data-responsive_offset="on" style="z-index: 9;">
                '.$r['name'].'
            </div>
            <div style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;" 
                class="tp-caption tp-static-layer font-weight-400 color-white text-center" data-x="center" data-y="middle" 
                data-voffset="[\'0\',\'0\',\'0\',\'0\']" data-fontsize="[\'26\',\'26\',\'26\',\'20\']" data-lineheight="[\'36\',\'36\',\'36\',\'30\']" data-width="[\'800\',\'800\',\'680\',\'340\']"
                data-textAlign="[\'center\',\'center\',\'center\',\'center\']" data-whitespace="[\'normal\',\'normal\',\'normal\',\'normal\']" 
                data-frames=\'[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]\'
                data-startslide="0" data-endslide="4" data-responsive="on" data-responsive_offset="on" style="z-index: 9; letter-spacing: 1px;">
                '.$r['detail'].'
            </div>
            <a class="tp-caption tp-static-layer btn btn-l btn-white scroll" data-x="center" data-y="middle" data-voffset="[\'90\',\'90\',\'90\',\'70\']" data-width="[\'auto\',\'auto\',\'auto\',\'auto\']" data-textAlign="[\'center\',\'center\',\'center\',\'center\']"
                data-frames=\'[{"delay":2000,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]\' 
                data-startslide="0" data-endslide="4" data-responsive="on" data-responsive_offset="on" style="z-index: 9;" href="'.base_url().'pages/content/about/data" target="_blank">
                About
            </a>
        </div>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
</section>';
?>

{CONTENT}
