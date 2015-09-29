@section('styles')
<!-- Revolution Slider -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/js-plugin/revolution-slider/rs-plugin/css/navstylechange.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/js-plugin/revolution-slider/rs-plugin/css/settings-hideo.css') }}" media="screen" />
@stop

@section('scripts')
<!-- Revolution slider -->
<script type="text/javascript" src="{{ asset('assets/js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js-plugin/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
@stop

<!-- slider -->
<section id="rsDemoWrapper">

<div class="tp-banner-container">
<div class="tp-banner" >
<ul>	<!-- SLIDE  -->
<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
<!-- MAIN IMAGE -->
<img src="assets/images/slider/rs-slider/demo/slidebg1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
<!-- LAYERS -->

<!-- LAYER NR. 1 -->
<div class="tp-caption lightgrey_divider skewfromrightshort customout"
     data-x="85"
     data-y="224"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1200"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 2">
</div>

<!-- LAYER NR. 2 -->
<div class="tp-caption customin customout"
     data-x="center" data-hoffset="100"
     data-y="bottom" data-voffset="0"
     data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="800"
     data-start="700"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     style="z-index: 3"><img src="assets/images/slider/rs-slider/demo/woman.png" alt="">
</div>

<!-- LAYER NR. 3 -->
<div class="tp-caption large_bold_grey skewfromrightshort customout"
     data-x="80"
     data-y="96"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="800"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 4">Slider Revolution
</div>




<!-- LAYER NR. 6 -->
<div class="tp-caption medium_thin_grey skewfromleftshort customout"
     data-x="80"
     data-y="152"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="300"
     data-start="1100"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 7">Included
</div>

<!-- LAYER NR. 7 -->
<div class="tp-caption small_thin_grey customin customout"
     data-x="80"
     data-y="240"
     data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1300"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 8">Slider Revolution is the highly acclaimed<br/> slide-based displaying solution, thousands of<br/> businesses, theme developers and everyday<br/> people use and love!
</div>

<!-- LAYER NR. 8 -->
<div class="tp-caption skewfromrightshort customout"
     data-x="816"
     data-y="207"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1750"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 9"><img src="assets/images/slider/rs-slider/demo/graph.png" alt="" data-ww="52" data-hh="44">
</div>

<!-- LAYER NR. 9 -->
<div class="tp-caption large_bold_darkblue skewfromleftshort customout"
     data-x="right" data-hoffset="-90"
     data-y="60"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1600"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 10">1000's
</div>

<!-- LAYER NR. 10 -->
<div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
     data-x="right" data-hoffset="-90"
     data-y="125"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1650"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 11">Of Happy Users
</div>

<!-- LAYER NR. 11 -->
<div class="tp-caption medium_bold_red skewfromrightshort customout"
     data-x="right" data-hoffset="-90"
     data-y="200"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1800"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 12">Rekord Breaking
</div>

<!-- LAYER NR. 12 -->
<div class="tp-caption medium_light_red skewfromrightshort customout"
     data-x="right" data-hoffset="-90"
     data-y="center" data-voffset="-10"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1850"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 13">Sales on CodeCanyon
</div>

<!-- LAYER NR. 13 -->
<div class="tp-caption medium_bg_red skewfromrightshort customout"
     data-x="right" data-hoffset="-90"
     data-y="bottom" data-voffset="-200"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="1900"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 14">A Professional Solution
</div>

<!-- LAYER NR. 14 -->
<div class="tp-caption medium_bold_orange skewfromleftshort customout"
     data-x="right" data-hoffset="-90"
     data-y="340"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="2000"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 15">4.7<span style="font-weight:300;">/5 Stars</span>
</div>

<!-- LAYER NR. 15 -->
<div class="tp-caption customin customout"
     data-x="right" data-hoffset="-90"
     data-y="bottom" data-voffset="-103"
     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="1000"
     data-start="2050"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 16"><img src="assets/images/slider/rs-slider/demo/star.png" alt="" data-ww="20" data-hh="20">
</div>

<!-- LAYER NR. 16 -->
<div class="tp-caption customin customout"
     data-x="right" data-hoffset="-115"
     data-y="bottom" data-voffset="-103"
     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="1000"
     data-start="2100"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 17"><img src="assets/images/slider/rs-slider/demo/star.png" alt="" data-ww="20" data-hh="20">
</div>

<!-- LAYER NR. 17 -->
<div class="tp-caption customin customout"
     data-x="right" data-hoffset="-140"
     data-y="bottom" data-voffset="-103"
     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="1000"
     data-start="2150"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 18"><img src="assets/images/slider/rs-slider/demo/star.png" alt="" data-ww="20" data-hh="20">
</div>

<!-- LAYER NR. 18 -->
<div class="tp-caption customin customout"
     data-x="right" data-hoffset="-165"
     data-y="bottom" data-voffset="-103"
     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="1000"
     data-start="2200"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 19"><img src="assets/images/slider/rs-slider/demo/star.png" alt="" data-ww="20" data-hh="20">
</div>

<!-- LAYER NR. 19 -->
<div class="tp-caption customin customout"
     data-x="right" data-hoffset="-190"
     data-y="bottom" data-voffset="-103"
     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="1000"
     data-start="2250"
     data-easing="Power4.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 20"><img src="assets/images/slider/rs-slider/demo/star.png" alt="" data-ww="20" data-hh="20">
</div>

<!-- LAYER NR. 20 -->
<div class="tp-caption medium_bg_orange skewfromleftshort customout"
     data-x="right" data-hoffset="-90"
     data-y="bottom" data-voffset="-50"
     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
     data-speed="500"
     data-start="2300"
     data-easing="Back.easeOut"
     data-endspeed="500"
     data-endeasing="Power4.easeIn"
     data-captionhidden="on"
     style="z-index: 21">Customer Rating
</div>
</li>
<!-- SLIDE  -->
<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
    <!-- MAIN IMAGE -->
    <img src="assets/images/slider/rs-slider/demo/darkblurbg.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption customin"
         data-x="474"
         data-y="189"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="800"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 2"><img src="assets/images/slider/rs-slider/demo/macbook2.png" alt="">
    </div>

    <!-- LAYER NR. 2 -->
    <div class="tp-caption customin"
         data-x="245"
         data-y="92"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="500"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 3"><img src="assets/images/slider/rs-slider/demo/imac1.png" alt="">
    </div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption customin"
         data-x="693"
         data-y="69"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1300"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 4"><img src="assets/images/slider/rs-slider/demo/lupe_macbook.png" alt="">
    </div>

    <!-- LAYER NR. 4 -->
    <div class="tp-caption customin"
         data-x="100"
         data-y="171"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1400"
         data-easing="Power3.easeInOut"
         data-endspeed="300"
         style="z-index: 5"><img src="assets/images/slider/rs-slider/demo/lupe_imac.png" alt="">
    </div>

    <!-- LAYER NR. 5 -->
    <div class="tp-caption medium_bg_asbestos skewfromleft customout"
         data-x="104"
         data-y="154"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="1500"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 6">Cool animation
    </div>

    <!-- LAYER NR. 6 -->
    <div class="tp-caption medium_bg_red skewfromright customout"
         data-x="820"
         data-y="274"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="1700"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 7">Instant wow effect!
    </div>

    <!-- LAYER NR. 7 -->
    <div class="tp-caption medium_bg_orange skewfromright customout"
         data-x="820"
         data-y="314"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="1800"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 8">don't you love it?
    </div>

    <!-- LAYER NR. 8 -->
    <div class="tp-caption medium_bg_darkblue skewfromleft customout"
         data-x="168"
         data-y="193"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="800"
         data-start="1600"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 9">With Style
    </div>

    <!-- LAYER NR. 9 -->
    <div class="tp-caption medium_light_white customin customout"
         data-x="500"
         data-y="51"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1100"
         data-easing="Back.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         style="z-index: 10">Be
    </div>

    <!-- LAYER NR. 10 -->
    <div class="tp-caption large_bold_white customin customout"
         data-x="536"
         data-y="51"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1200"
         data-easing="Back.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         style="z-index: 11">creative
    </div>
</li>
<!-- SLIDE  -->
<li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" >
    <!-- MAIN IMAGE -->
    <img src="assets/images/slider/rs-slider/demo/transparent.png" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption customin skewtoleft"
         data-x="877"
         data-y="54"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1500"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 2"><img src="assets/images/slider/rs-slider/demo/cloud2.png" alt="">
    </div>

    <!-- LAYER NR. 2 -->
    <div class="tp-caption customin skewtoleft"
         data-x="84"
         data-y="80"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1300"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 3"><img src="assets/images/slider/rs-slider/demo/cloud3.png" alt="">
    </div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption customin skewtoleft"
         data-x="473"
         data-y="123"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1700"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 4"><img src="assets/images/slider/rs-slider/demo/cloud1.png" alt="">
    </div>

    <!-- LAYER NR. 4 -->
    <div class="tp-caption sfb ltl"
         data-x="639"
         data-y="346"
         data-speed="600"
         data-start="1200"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         data-captionhidden="on"
         style="z-index: 5"><img src="assets/images/slider/rs-slider/demo/hill3.png" alt="">
    </div>

    <!-- LAYER NR. 5 -->
    <div class="tp-caption sfb ltl"
         data-x="228"
         data-y="360"
         data-speed="600"
         data-start="1100"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         data-captionhidden="on"
         style="z-index: 6"><img src="assets/images/slider/rs-slider/demo/hill4.png" alt="">
    </div>

    <!-- LAYER NR. 6 -->
    <div class="tp-caption grassfloor lfb ltb"
         data-x="center" data-hoffset="0"
         data-y="bottom" data-voffset="50"
         data-speed="600"
         data-start="500"
         data-easing="Back.easeOut"
         data-endspeed="600"
         data-endeasing="Power4.easeIn"
         data-captionhidden="on"
         style="z-index: 7">
    </div>

    <!-- LAYER NR. 7 -->
    <div class="tp-caption sfb ltl"
         data-x="142"
         data-y="375"
         data-speed="600"
         data-start="800"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         data-captionhidden="on"
         style="z-index: 8"><img src="assets/images/slider/rs-slider/demo/hill2.png" alt="">
    </div>

    <!-- LAYER NR. 8 -->
    <div class="tp-caption sfb ltl"
         data-x="496"
         data-y="367"
         data-speed="600"
         data-start="900"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         data-captionhidden="on"
         style="z-index: 9"><img src="assets/images/slider/rs-slider/demo/hill1.png" alt="">
    </div>

    <!-- LAYER NR. 9 -->
    <div class="tp-caption sfb ltl"
         data-x="918"
         data-y="379"
         data-speed="600"
         data-start="1000"
         data-easing="Back.easeOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         data-captionhidden="on"
         style="z-index: 10"><img src="assets/images/slider/rs-slider/demo/hill2.png" alt="">
    </div>

    <!-- LAYER NR. 10 -->
    <div class="tp-caption lfb skewtoleft"
         data-x="122"
         data-y="133"
         data-speed="2000"
         data-start="1300"
         data-easing="Power4.easeOut"
         data-endspeed="400"
         data-endeasing="Power1.easeIn"
         style="z-index: 11"><img src="assets/images/slider/rs-slider/demo/guy1.png" alt="">
    </div>


    <!-- LAYER NR. 12 -->
    <div class="tp-caption customin ltl"
         data-x="769"
         data-y="177"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-speed="1000"
         data-start="2000"
         data-easing="Back.easeInOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 13"><img src="assets/images/slider/rs-slider/demo/clock.png" alt="">
    </div>

    <!-- LAYER NR. 13 -->
    <div class="tp-caption large_bold_white customin ltl"
         data-x="620"
         data-y="101"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-speed="1000"
         data-start="1850"
         data-easing="Back.easeInOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 14">Design
    </div>

    <!-- LAYER NR. 14 -->
    <div class="tp-caption medium_light_white customin ltl"
         data-x="813"
         data-y="124"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-speed="1000"
         data-start="1900"
         data-easing="Back.easeInOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 15">&
    </div>

    <!-- LAYER NR. 15 -->
    <div class="tp-caption large_bold_white customin ltl"
         data-x="845"
         data-y="102"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-speed="1000"
         data-start="1950"
         data-easing="Back.easeInOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 16">Create
    </div>

    <!-- LAYER NR. 16 -->
    <div class="tp-caption mediumlarge_light_white customin ltl"
         data-x="652"
         data-y="282"
         data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
         data-speed="1000"
         data-start="2050"
         data-easing="Back.easeInOut"
         data-endspeed="400"
         data-endeasing="Back.easeIn"
         style="z-index: 17">With Total Layer Control
    </div>
</li>

<!-- SLIDE  -->
<li data-transition="zoomin" data-slotamount="7" data-masterspeed="600" >
    <!-- MAIN IMAGE -->
    <img src="assets/images/slider/rs-slider/demo/videobg1.jpg"  alt="videobg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption medium_bg_darkblue sfr customout"
         data-x="149"
         data-y="88"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1600"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 2">Extensive Video Support
    </div>

    <!-- LAYER NR. 2 -->
    <div class="tp-caption medium_bg_red sfr customout"
         data-x="293"
         data-y="130"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1700"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 3">Youtube
    </div>

    <!-- LAYER NR. 3 -->
    <div class="tp-caption medium_bg_red sfr customout"
         data-x="304"
         data-y="173"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1800"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 4">Vimeo
    </div>

    <!-- LAYER NR. 4 -->
    <div class="tp-caption medium_bg_red sfr customout"
         data-x="184"
         data-y="216"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="1900"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 5">Self-Hosted HTML 5
    </div>

    <!-- LAYER NR. 5 -->
    <div class="tp-caption medium_bg_orange sfr customout"
         data-x="90"
         data-y="357"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="500"
         data-start="2200"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 6">Next Slide: Full Screen Video
    </div>

    <!-- LAYER NR. 6 -->
    <div class="tp-caption sft customout"
         data-x="399"
         data-y="385"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="1000"
         data-start="1500"
         data-easing="Back.easeOut"
         data-endspeed="500"
         data-captionhidden="on"
         style="z-index: 7"><img src="assets/images/slider/rs-slider/demo/videoshadow.png" alt="">
    </div>

    <!-- LAYER NR. 7 -->
    <div class="tp-caption customin customout"
         data-x="center" data-hoffset="134"
         data-y="center" data-voffset="-6"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="600"
         data-start="1000"
         data-easing="Power4.easeOut"
         data-endspeed="500"
         data-endeasing="Power4.easeOut"
         data-autoplay="false"
         data-autoplayonlyfirsttime="false"
         style="z-index: 8"><iframe src='http://player.vimeo.com/video/76512663?title=0&byline=0&portrait=0;api=1' width='640' height='360' style='width:640px;height:360px;'></iframe>
    </div>
</li>
<!-- SLIDE  -->
<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
    <!-- MAIN IMAGE -->
    <img src="assets/images/slider/rs-slider/demo/transparent.png"  alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption customin fullscreenvideo"
         data-x="0"
         data-y="0"
         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
         data-speed="700"
         data-start="500"
         data-easing="Power4.easeInOut"
         data-endspeed="700"
         data-autoplay="false"
         data-autoplayonlyfirsttime="false"
         style="z-index: 2"><iframe src='http://player.vimeo.com/video/76995667?title=0&byline=0&portrait=0;api=1' width='100%' height='100%' style='width:100%px;height:100%px;'></iframe>
    </div>
</li>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>



</section>
<!-- slider -->