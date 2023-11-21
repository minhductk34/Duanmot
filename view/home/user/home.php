<?php
require_once('view/globle/user/header.php');
require_once('DAO/ProductDAO.php');
?>
<!-- <h1>Home user</h1> -->
<!--==============================
      Hero Area
    ==============================-->
<div class="  ">
  <div class="vs-hero-carousel hero-layout6" data-globalbgimage="./src/assets/img/hero/hero-bg-6-1.jpg" data-height="810" data-container="1900" data-slidertype="responsive">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
      <img width="781" height="534" src="./src/assets/img/hero/hero-6-1.png" class="ls-l ls-hide-tablet ls-hide-phone ls-hide-hd" alt="image" style="
              top: 257px;
              left: 1119px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetxin:100; durationin:1500; delayin:500; static:forever;" />
      <img width="781" height="534" src="./src/assets/img/hero/hero-6-1.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 237px;
              left: 1121px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetxin:100; durationin:1500; delayin:500; static:forever;" />
      <img width="658" height="543" src="./src/assets/img/hero/hero-6-1-1.png" class="ls-l ls-hide-tablet ls-hide-phone" alt="image" style="
              top: 215px;
              left: 969px;
              background-size: inherit;
              background-position: inherit;
            " />
      <p style="
              top: 365px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 35px;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        100% Organic Fruits
      </p>
      <p style="
              top: 405px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Plants and
      </p>
      <p style="
              top: 485px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        100% Fresh Fruits
      </p>
      <div style="
              top: 611px;
              left: 375px;
              background-size: inherit;
              background-position: inherit;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:100; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint;">
        <a href="index.php?controller=product_show" class="vs-btn style5 ls-btn">Start Shopping<i class="far fa-angle-right"></i></a>
      </div>
      <img width="658" height="543" src="./src/assets/img/hero/hero-6-1-1.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 54px;
              left: 916px;
              background-size: inherit;
              background-position: inherit;
              width: 835px;
              height: 689px;
            " />
      <p style="
              top: 150px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
              font-size: 70px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        100% Organic Fruits
      </p>
      <p style="
              top: 240px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Plants and
      </p>
      <p style="
              top: 358px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        100% Fresh Fruits
      </p>
      <span style="
              top: 550px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 60px;
              padding-bottom: 30px;
              padding-left: 60px;
              font-family: 'Lato', sans-serif;
              font-size: 30px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 30px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 120px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Plants and
      </p>
      <p style="
              top: 270px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        100% Fresh Fruits
      </p>
      <span style="
              top: 490px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 100px;
              padding-bottom: 50px;
              padding-left: 100px;
              font-family: 'Lato', sans-serif;
              font-size: 60px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 50px;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 420px;
              left: 1760px;
              text-align: center;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 16px;
              font-family: 'Lato', sans-serif;
              line-height: 40px;
              width: 40px;
              height: 40px;
              border-radius: 100%;
              color: #ffffff;
              background-color: #76a713;
              z-index: 1000;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff;">
        1
      </p>
      <a class="ls-l ls-hide-tablet ls-hide-phone" href="#1" target="_self" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff; static:forever;">
        <p style="
                top: 420px;
                left: 1760px;
                text-align: center;
                font-weight: 700;
                background-size: inherit;
                background-position: inherit;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                line-height: 40px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                color: #000000;
                background-color: #ffffff;
              " class="">
          1
        </p>
      </a>
      <a class="ls-l ls-hide-tablet ls-hide-phone" href="#2" target="_self" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff; static:forever;">
        <p style="
                top: 470px;
                left: 1760px;
                text-align: center;
                font-weight: 700;
                background-size: inherit;
                background-position: inherit;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                line-height: 40px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                color: #000000;
                background-color: #ffffff;
              " class="">
          2
        </p>
      </a>
      <a class="ls-l ls-hide-tablet ls-hide-phone" href="#3" target="_self" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff; static:forever;">
        <p style="
                top: 520px;
                left: 1760px;
                text-align: center;
                font-weight: 700;
                background-size: inherit;
                background-position: inherit;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                line-height: 40px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                color: #000000;
                background-color: #ffffff;
              " class="">
          3
        </p>
      </a>
      <a class="ls-l ls-hide-tablet ls-hide-phone" href="#4" target="_self" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff; static:forever;">
        <p style="
                top: 570px;
                left: 1760px;
                text-align: center;
                font-weight: 700;
                background-size: inherit;
                background-position: inherit;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                line-height: 40px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                color: #000000;
                background-color: #ffffff;
              " class="">
          4
        </p>
      </a>
      <a class="ls-l ls-hide-tablet ls-hide-phone" href="#5" target="_self" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff; static:forever;">
        <p style="
                top: 620px;
                left: 1760px;
                text-align: center;
                font-weight: 700;
                background-size: inherit;
                background-position: inherit;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                line-height: 40px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                color: #000000;
                background-color: #ffffff;
              " class="">
          5
        </p>
      </a>
      <img width="126" height="151" src="./src/assets/img/hero/hero-6-leaf-4.png" class="ls-l" alt="image" style="
              top: -300px;
              left: 642px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:15000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:6000; static:forever;" />
      <img width="114" height="97" src="./src/assets/img/hero/hero-6-leaf-1.png" class="ls-l" alt="leaf" style="
              top: -300px;
              left: 1500px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:2000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:6000; static:forever;" />
      <img width="60" height="66" src="./src/assets/img/hero/hero-6-leaf-3.png" class="ls-l" alt="image" style="
              top: -300px;
              left: 50px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:5000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:6000; static:forever;" />
      <img width="115" height="96" src="./src/assets/img/hero/hero-6-leaf-2.png" class="ls-l" alt="leaf" style="
              top: -300px;
              left: 1200px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:4000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:6000; static:forever;" />
      <img width="60" height="66" src="./src/assets/img/hero/hero-6-leaf-3.png" class="ls-l" alt="image" style="
              top: -300px;
              left: 489px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:6000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:3000; static:forever;" />
      <img width="114" height="97" src="./src/assets/img/hero/hero-6-leaf-1.png" class="ls-l" alt="leaf" style="
              top: -300px;
              left: 1200px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:7000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:3000; static:forever;" />
      <img width="115" height="96" src="./src/assets/img/hero/hero-6-leaf-2.png" class="ls-l" alt="leaf" style="
              top: -300px;
              left: 200px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:10000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:4000; static:forever;" />
      <img width="115" height="96" src="./src/assets/img/hero/hero-6-leaf-2.png" class="ls-l" alt="leaf" style="
              top: -300px;
              left: 800px;
              background-size: inherit;
              background-position: inherit;
            " data-ls="offsetyin:top; durationin:1500; delayin:8000; easingin:easeOutQuint; rotatein:random(-160,160); loop:true; loopoffsety:150sh; loopduration:10000; looprotate:random(-180,180); loopcount:-1; looprepeatdelay:4000; static:forever;" />
    </div>

    <!-- Slide 2-->
    <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
      <img width="687" height="554" src="./src/assets/img/hero/hero-6-1-2.png" class="ls-l ls-hide-tablet ls-hide-phone" alt="image" style="
              top: 215px;
              left: 969px;
              background-size: inherit;
              background-position: inherit;
            " />
      <p style="
              top: 365px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 35px;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Blessed Be The Fruit
      </p>
      <p style="
              top: 405px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Green Paradise Farm
      </p>
      <p style="
              top: 485px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        &amp; Healthy Fridge
      </p>
      <div style="
              top: 611px;
              left: 375px;
              background-size: inherit;
              background-position: inherit;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:100; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint;">
        <a href="index.php?controller=product_show" class="vs-btn style5 ls-btn">Start Shopping<i class="far fa-angle-right"></i></a>
      </div>
      <img width="687" height="554" src="./src/assets/img/hero/hero-6-1-2.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 54px;
              left: 916px;
              background-size: inherit;
              background-position: inherit;
              width: 835px;
              height: 689px;
            " />
      <p style="
              top: 150px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
              font-size: 70px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Blessed Be The Fruit
      </p>
      <p style="
              top: 240px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Green Paradise Farm
      </p>
      <p style="
              top: 358px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        &amp; Healthy Fridge
      </p>
      <span style="
              top: 550px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 60px;
              padding-bottom: 30px;
              padding-left: 60px;
              font-family: 'Lato', sans-serif;
              font-size: 30px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 30px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 120px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Green Paradise Farm
      </p>
      <p style="
              top: 270px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        &amp; Healthy Fridge
      </p>
      <span style="
              top: 490px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 100px;
              padding-bottom: 50px;
              padding-left: 100px;
              font-family: 'Lato', sans-serif;
              font-size: 60px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 50px;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 470px;
              left: 1760px;
              text-align: center;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 16px;
              font-family: 'Lato', sans-serif;
              line-height: 40px;
              width: 40px;
              height: 40px;
              border-radius: 100%;
              color: #ffffff;
              background-color: #76a713;
              z-index: 1000;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff;">
        2
      </p>
    </div>

    <!-- Slide 3-->
    <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
      <img width="639" height="536" src="./src/assets/img/hero/hero-6-1-3.png" class="ls-l ls-hide-tablet ls-hide-phone" alt="image" style="
              top: 215px;
              left: 969px;
              background-size: inherit;
              background-position: inherit;
            " />
      <p style="
              top: 365px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 35px;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Tip Top Quality
      </p>
      <p style="
              top: 405px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Grass-Fed &amp; Gorgeous
      </p>
      <p style="
              top: 485px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Natural Radiance
      </p>
      <div style="
              top: 611px;
              left: 375px;
              background-size: inherit;
              background-position: inherit;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:100; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint;">
        <a href="index.php?controller=product_show" class="vs-btn style5 ls-btn">Start Shopping<i class="far fa-angle-right"></i></a>
      </div>
      <img width="639" height="536" src="./src/assets/img/hero/hero-6-1-3.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 54px;
              left: 916px;
              background-size: inherit;
              background-position: inherit;
              width: 835px;
              height: 689px;
            " />
      <p style="
              top: 150px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
              font-size: 70px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Tip Top Quality
      </p>
      <p style="
              top: 240px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Grass-Fed &amp; Gorgeous
      </p>
      <p style="
              top: 358px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Natural Radiance
      </p>
      <span style="
              top: 550px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 60px;
              padding-bottom: 30px;
              padding-left: 60px;
              font-family: 'Lato', sans-serif;
              font-size: 30px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 30px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 120px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Grass-Fed &amp; Gorgeous
      </p>
      <p style="
              top: 270px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Natural Radiance
      </p>
      <span style="
              top: 490px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 100px;
              padding-bottom: 50px;
              padding-left: 100px;
              font-family: 'Lato', sans-serif;
              font-size: 60px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 50px;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 520px;
              left: 1760px;
              text-align: center;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 16px;
              font-family: 'Lato', sans-serif;
              line-height: 40px;
              width: 40px;
              height: 40px;
              border-radius: 100%;
              color: #ffffff;
              background-color: #76a713;
              z-index: 1000;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff;">
        3
      </p>
    </div>

    <!-- Slide 4-->
    <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
      <img width="627" height="537" src="./src/assets/img/hero/hero-6-1-4.png" class="ls-l ls-hide-tablet ls-hide-phone" alt="image" style="
              top: 215px;
              left: 969px;
              background-size: inherit;
              background-position: inherit;
            " />
      <p style="
              top: 365px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 35px;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Say Yes To Health
      </p>
      <p style="
              top: 405px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Feast Health
      </p>
      <p style="
              top: 485px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Green Machine
      </p>
      <div style="
              top: 611px;
              left: 375px;
              background-size: inherit;
              background-position: inherit;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:100; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint;">
        <a href="index.php?controller=product_show" class="vs-btn style5 ls-btn">Start Shopping<i class="far fa-angle-right"></i></a>
      </div>
      <img width="627" height="537" src="./src/assets/img/hero/hero-6-1-4.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 54px;
              left: 916px;
              background-size: inherit;
              background-position: inherit;
              width: 835px;
              height: 689px;
            " />
      <p style="
              top: 150px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
              font-size: 70px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Say Yes To Health
      </p>
      <p style="
              top: 240px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Feast Health
      </p>
      <p style="
              top: 358px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Green Machine
      </p>
      <span style="
              top: 550px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 60px;
              padding-bottom: 30px;
              padding-left: 60px;
              font-family: 'Lato', sans-serif;
              font-size: 30px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 30px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 120px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Organic Feast Health
      </p>
      <p style="
              top: 270px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Green Machine
      </p>
      <span style="
              top: 490px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 100px;
              padding-bottom: 50px;
              padding-left: 100px;
              font-family: 'Lato', sans-serif;
              font-size: 60px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 50px;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 570px;
              left: 1760px;
              text-align: center;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 16px;
              font-family: 'Lato', sans-serif;
              line-height: 40px;
              width: 40px;
              height: 40px;
              border-radius: 100%;
              color: #ffffff;
              background-color: #76a713;
              z-index: 1000;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff;">
        4
      </p>
    </div>

    <!-- Slide 5-->
    <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
      <img width="649" height="537" src="./src/assets/img/hero/hero-6-1-5.png" class="ls-l ls-hide-tablet ls-hide-phone" alt="image" style="
              top: 215px;
              left: 969px;
              background-size: inherit;
              background-position: inherit;
            " />
      <p style="
              top: 365px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 35px;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Farm To Market
      </p>
      <p style="
              top: 405px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Good Food On The
      </p>
      <p style="
              top: 485px;
              left: 375px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 65px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Move of Happy
      </p>
      <div style="
              top: 611px;
              left: 375px;
              background-size: inherit;
              background-position: inherit;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="offsetyin:100; durationin:1500; delayin:800; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint;">
        <a href="index.php?controller=product_show" class="vs-btn style5 ls-btn">Start Shopping<i class="far fa-angle-right"></i></a>
      </div>
      <img width="649" height="537" src="./src/assets/img/hero/hero-6-1-5.png" class="ls-l ls-hide-desktop" alt="image" style="
              top: 54px;
              left: 916px;
              background-size: inherit;
              background-position: inherit;
              width: 835px;
              height: 689px;
            " />
      <p style="
              top: 150px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-family: Amatic SC;
              color: #ffffff;
              letter-spacing: 1px;
              font-size: 70px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:-100; durationin:1500; delayin:800; easingin:easeOutQuint;">
        Farm To Market
      </p>
      <p style="
              top: 240px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Good Food On The
      </p>
      <p style="
              top: 358px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 100px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Move of Happy
      </p>
      <span style="
              top: 550px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 60px;
              padding-bottom: 30px;
              padding-left: 60px;
              font-family: 'Lato', sans-serif;
              font-size: 30px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 30px;
            " class="ls-l ls-hide-desktop ls-hide-phone" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 120px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint;">
        Good Food On The
      </p>
      <p style="
              top: 270px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 120px;
              color: #fcd55c;
              font-family: 'Advent Pro', sans-serif;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetxin:-200; durationin:1500; delayin:400; easingin:easeOutQuint;">
        Move of Happy
      </p>
      <span style="
              top: 490px;
              left: 100px;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              padding-right: 100px;
              padding-bottom: 50px;
              padding-left: 100px;
              font-family: 'Lato', sans-serif;
              font-size: 60px;
              color: #fff;
              border-radius: 9999px;
              border-top: 3px solid #fff;
              border-right: 3px solid #fff;
              border-bottom: 3px solid #fff;
              border-left: 3px solid #fff;
              padding-top: 50px;
            " class="ls-l ls-hide-desktop ls-hide-tablet" data-ls="offsetyin:200; durationin:1500; delayin:400; easingin:easeOutQuint; offsetyout:200; durationout:1500; easingout:easeOutQuint; hover:true; hovereasingin:easeOutQuint; hoverbgcolor:#ffffff; hovercolor:#76a713;">START SHOPPING</span>
      <p style="
              top: 620px;
              left: 1760px;
              text-align: center;
              font-weight: 700;
              background-size: inherit;
              background-position: inherit;
              font-size: 16px;
              font-family: 'Lato', sans-serif;
              line-height: 40px;
              width: 40px;
              height: 40px;
              border-radius: 100%;
              color: #ffffff;
              background-color: #76a713;
              z-index: 1000;
            " class="ls-l ls-hide-tablet ls-hide-phone" data-ls="hover:true; hoverbgcolor:#76a713; hovercolor:#ffffff;">
        5
      </p>
    </div>
  </div>
</div>
<!--==============================
    Categories Area
    ==============================-->
<!-- <section class="space-top">
  <div class="container">
    <div class="row vs-carousel" data-slide-show="3" id="catboxSlide4645">
      <div class="col-xl-4">
        <div class="cat-box">
          <div class="cat-box__img">
            <img src="./src/assets/img/category/cat-1-1.png" alt="Category image" />
          </div>
          <h3 class="cat-box__title">
            <a href="index.php?controller=product_show">Organic Fruits</a>
          </h3>
          <p class="cat-box__text">
            Phasellus enim libero, blandit vel sapien vitae, condimentum
            ultricies magna et. Quisque euismod orci lobortis...
          </p>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="cat-box">
          <div class="cat-box__img">
            <img src="./src/assets/img/category/cat-1-2.png" alt="Category image" />
          </div>
          <h3 class="cat-box__title">
            <a href="index.php?controller=product_show">Organic Vagitables</a>
          </h3>
          <p class="cat-box__text">
            Phasellus enim libero, blandit vel sapien vitae, condimentum
            ultricies magna et. Quisque euismod orci lobortis...
          </p>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="cat-box">
          <div class="cat-box__img">
            <img src="./src/assets/img/category/cat-1-3.png" alt="Category image" />
          </div>
          <h3 class="cat-box__title">
            <a href="index.php?controller=product_show">Farms and Family</a>
          </h3>
          <p class="cat-box__text">
            Phasellus enim libero, blandit vel sapien vitae, condimentum
            ultricies magna et. Quisque euismod orci lobortis...
          </p>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="cat-box">
          <div class="cat-box__img">
            <img src="./src/assets/img/category/cat-1-4.png" alt="Category image" />
          </div>
          <h3 class="cat-box__title">
            <a href="index.php?controller=product_show">Dairy Products</a>
          </h3>
          <p class="cat-box__text">
            Phasellus enim libero, blandit vel sapien vitae, condimentum
            ultricies magna et. Quisque euismod orci lobortis...
          </p>
        </div>
      </div>
    </div>
    <div class="row text-center justify-content-around align-items-center">
      <div class="col-auto d-none d-sm-block">
        <button class="slick-arrow" data-slick-prev="#catboxSlide4645" type="button">
          <i class="fas fa-angle-left"></i>
        </button>
      </div>
      <div class="col-auto">
        <a href="index.php?controller=product_show" class="vs-btn style3">Start Shopping<i class="fas fa-angle-right"></i></a>
      </div>
      <div class="col-auto d-none d-sm-block">
        <button class="slick-arrow" data-slick-next="#catboxSlide4645" type="button">
          <i class="fas fa-angle-right"></i>
        </button>
      </div>
    </div>
  </div>
</section> -->
<!--==============================
      About Us Area
    ==============================-->
<!-- <section class="space">
  <div class="container">
    <div class="row justify-content-between align-items-center align-items-xl-start">
      <div class="col-md-9 col-lg-7 col-xl-8">
        <div class="section-title">
          <span class="sub-title4">WE ARE FeeTech</span>
          <h2 class="sec-title3">
            We believe in working with accredited farmers
          </h2>
        </div>
      </div>
      <div class="col-auto mb-30 mb-xl-0 d-none d-lg-block">
        <img src="./src/assets/img/about/ab-6-1.png" alt="About image" />
      </div>
    </div>
  </div>
  <div class="container vs-container_style3">
    <div class="row">
      <div class="col-lg-6 col-xxl-auto mb-40 mb-lg-0">
        <div class="img-box2">
          <div class="img-1">
            <img src="./src/assets/img/about/ab-6-2.png" alt="About image" />
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
            <div class="img-2">
              <img src="./src/assets/img/about/ab-6-3.png" alt="About image" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xxl">
        <div class="about-box1">
          <p class="block-text">
            Alienum phaedrum torquatos nec eu, vis detraxit periculis ex,
            nihil is in mei. Mei an periculaeuripidis, hincartem ei est.
            Alienum phaed is in mei. Mei an periculaeuripidis, hincartem ei
            est.
          </p>
          <div class="row justify-content-between">
            <div class="col-sm-auto">
              <div class="block-list">
                <ul>
                  <li>Natural livestock and crop</li>
                  <li>through submission</li>
                  <li>Organic system plan</li>
                  <li>Production to consumption</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="block-list">
                <ul>
                  <li>farming are maintaining</li>
                  <li>Nurturing crops</li>
                  <li>Organic farming</li>
                </ul>
              </div>
            </div>
          </div>
          <a href="about.html" class="vs-btn style3">More Information<i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--==============================
    Feature Products
    ==============================-->

<section class="sec-bg3 vs-shop-wrapper" data-bg-src="./src/assets/img/shape/bg-00778.png">
  <div class="section-title text-center">
    <div class="sec-icon">
      <img src="./src/assets/img/icons/sec-icon-2.png" alt="icon" />
    </div>
    <span class="sub-title4">Latest Arrivals</span>
    <h2 class="sec-title3">Feature Products</h2>
  </div>
  <div class="container position-relative">
    <div class="filter-menu2 vs-slideTab" data-asnavfor="#shopSlide8440">
      <button class="tab-btn active" data-bs-toggle="tooltip" data-bs-placement="left" title="Best Seller">
        <img src="./src/assets/img/shape/filter-icon-bg-1-2.png" alt="image" class="bg-1" />
        <img src="./src/assets/img/shape/filter-icon-bg-1-1.png" alt="image" class="bg-2" />
        <i class="flaticon-salad"></i>
      </button>
      <button class="tab-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Popular">
        <img src="./src/assets/img/shape/filter-icon-bg-1-2.png" alt="image" class="bg-1" />
        <img src="./src/assets/img/shape/filter-icon-bg-1-1.png" alt="image" class="bg-2" />
        <i class="flaticon-salvsadbox-1"></i>
      </button>
      <button class="tab-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Trend">
        <img src="./src/assets/img/shape/filter-icon-bg-1-2.png" alt="image" class="bg-1" />
        <img src="./src/assets/img/shape/filter-icon-bg-1-1.png" alt="image" class="bg-2" />
        <i class="flaticon-vegetables"></i>
      </button>
      <button class="tab-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Season">
        <img src="./src/assets/img/shape/filter-icon-bg-1-2.png" alt="image" class="bg-1" />
        <img src="./src/assets/img/shape/filter-icon-bg-1-1.png" alt="image" class="bg-2" />
        <i class="flaticon-healthy-food"></i>
      </button>
    </div>
    <div class="vs-carousel" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-fade="true" id="shopSlide8440">
      <div id="BestSeller">
        <div class="row gx-2px justify-content-center">

          <?php
          require_once 'DAO/ProductDAO.php';

          $productDao = new ProductDao();
          $products = $productDao->select(); // Lấy danh sách sản phẩm
          // var_dump($products);

          $linkpro = "index.php?controller=product_details&idpro="; // Xây dựng đường dẫn sản phẩm


          ?>

          <?php foreach ($products as $product) : ?>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">

              <div class="vs-product-box3">
                <div class="product-img">
                  <!-- <a href="shop-details.html"><img src="<?php echo $product->getImage(); ?>" alt="Product Image" class="w-100" /></a>
                 -->
                  <a href="shop-details.html"><img src="./src/assets/img/shop/product-3-3.png" alt="Product Image" class="w-100" /></a>
                </div>
                <div class="actions-btn">
                  <a href="<?php echo $product->getImage(); ?>" class="icon-btn popup-image"><i class="far fa-search"></i></a>
                  <a href="index.php?controller=wishlistCart" class="icon-btn"><i class="fal fa-heart"></i></a>
                  <a href="<?php echo $linkpro . $product->getId(); ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
                </div>

                <div class="product-content">
                  <div class="product-rating-box">
                    5.0
                    <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
                      <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of
                        5</span>
                    </div>
                  </div>
                  <h4 class="product-title">
                    <a href="shop-details.html"><?php echo $product->getName(); ?></a>
                  </h4>
                  <span class="price"><strong><?php echo $product->getPrice(); ?></strong><del><?php echo $product->getPrice(); ?></del></span>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
          <div class="bottom-btn">
            <a href="index.php?controller=product_show" class="vs-btn style3">All Product<i class="fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
</section>
<!--==============================
    Latest Arrivals
    ==============================-->
<?php
require_once 'DAO/ProductDAO.php';

$productDao = new ProductDao();
$product = $productDao->selectOneItem($id = 20);
?>
<section class="mb-60 mb-xl-0">
  <div class="container">
    <div class="section-title text-center">
      <div class="sec-icon">
        <img src="./src/assets/img/icons/sec-icon-2.png" alt="icon" />
      </div>
      <span class="sub-title4">Latest Arrivals</span>
      <h2 class="sec-title3">Deals Of the Day</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4 order-3 order-lg-1">
        <div class="content-style1">


          <span class="about-subtitle"><?php echo $product->getName(); ?></span>
          <h3 class="about-title"><?php echo $product->getName(); ?></h3>
          <p class="about-text">
            <?php echo $product->getDescription(); ?>
          </p>
          <div class="about-price"><?php echo $product->getPrice(); ?>
            <del><?php echo $product->getPrice(); ?></del>
          </div>

          <div class="product-rating-box">
            5.0
            <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
              <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of 5</span>
            </div>
          </div>
          <div>
            <a href="<?php echo $linkpro; ?>" class="vs-btn style4"><i class="fal fa-cart-plus"></i>Add To Cart</a>
          </div>
        </div>
      </div>
      <div class="col-lg order-1 order-lg-2">
        <div class="img-box3">
          <img src="./src/assets/img/about/ab-7-1.png" alt="About Image" />
        </div>
        <!-- <div class="img-box3">
                    <img src=" echo $product->getImage(); ?>" alt="About Image" />
                </div> -->
      </div>


      <div class="col-lg-auto order-2 order-lg-3">
        <div class="offer-counter counter-style1" data-offer-date="01/2/2024">
          <span class="day">Days</span>
          <span class="hour">Hours</span>
          <span class="minute">Mins</span>
          <span class="second">Secs</span>
          <!-- Expire Message -->
          <span class="message">Offer closed</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
    Feature Area
    ==============================-->
<section class="space-md-bottom">
  <div class="container">
    <div class="row gx-10">
      <div class="col-md-6 col-lg-3">
        <div class="feature-style1">
          <div class="feature-icon">
            <img src="./src/assets/img/icons/feature-icon-1-1.png" alt="icon" />
          </div>
          <h3 class="feature-title">Easy Returns</h3>
          <p class="feature-text">No Questions Asked</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-style1">
          <div class="feature-icon">
            <img src="./src/assets/img/icons/feature-icon-1-2.png" alt="icon" />
          </div>
          <h3 class="feature-title">Certified Organic</h3>
          <p class="feature-text">100% Guarantee</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-style1">
          <div class="feature-icon">
            <img src="./src/assets/img/icons/feature-icon-1-3.png" alt="icon" />
          </div>
          <h3 class="feature-title">Huge Savings</h3>
          <p class="feature-text">At Lowest Price</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="feature-style1">
          <div class="feature-icon">
            <img src="./src/assets/img/icons/feature-icon-1-4.png" alt="icon" />
          </div>
          <h3 class="feature-title">Easy Returnsz</h3>
          <p class="feature-text">No Questions Asked</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
    Popular Package Box
    ==============================-->
<section class="position-relative space-top space-md-bottom">
  <div class="sec-bg4" data-bg-src="./src/assets/img/shape/bg-00779.png"></div>
  <div class="container">

    <div class="section-title text-center">
      <div class="sec-icon">
        <img src="./src/assets/img/icons/sec-icon-2.png" alt="icon" />
      </div>
      <span class="sub-title4">Dưới đây là</span>
      <h2 class="sec-title3">Những ản phẩm yêu thích nhất</h2>
    </div>
    <!-- <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-sm-slide-show="1">
      <div class="col-xl-4">
        <div class="package-style1">
          <div class="package-img">
            <img src="./src/assets/img/package/p-1-1.jpg" alt="Package" />
          </div>
          <div class="package-quantity" data-bg-src="./src/assets/img/shape/pack-bg.png">
            <div class="number">12</div>
            <div class="label">Organic Varieties</div>
          </div>
          <div class="package-price">
            $16.75
            <div class="text">/ Lowest</div>
          </div>
          <h3 class="package-title">Seasonal organic veg box - medium</h3>
          <div class="package-list">
            <ul>
              <li><i class="far fa-check"></i>The UK Red potatoes</li>
              <li><i class="far fa-check"></i>The UK Carrots</li>
              <li><i class="far fa-check"></i>The UK Parsnips</li>
              <li><i class="far fa-check"></i>Spain Broccoli</li>
              <li><i class="far fa-check"></i>Spain Italy Courgettes</li>
            </ul>
          </div>
          <a href="<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="package-style1">
          <div class="package-img">
            <img src="./src/assets/img/package/p-1-2.jpg" alt="Package" />
          </div>
          <div class="package-quantity" data-bg-src="./src/assets/img/shape/pack-bg.png">
            <div class="number">08</div>
            <div class="label">Organic Varieties</div>
          </div>
          <div class="package-price">
            $35.75
            <div class="text">/ Medium</div>
          </div>
          <h3 class="package-title">Familiar Favourites organic veg box</h3>
          <div class="package-list">
            <ul>
              <li><i class="far fa-check"></i>The UK Red potatoes</li>
              <li><i class="far fa-check"></i>The UK Carrots</li>
              <li><i class="far fa-check"></i>The UK Parsnips</li>
              <li><i class="far fa-check"></i>Spain Broccoli</li>
              <li><i class="far fa-check"></i>Spain Italy Courgettes</li>
            </ul>
          </div>
          <a href="<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="package-style1">
          <div class="package-img">
            <img src="./src/assets/img/package/p-1-3.jpg" alt="Package" />
          </div>
          <div class="package-quantity" data-bg-src="./src/assets/img/shape/pack-bg.png">
            <div class="number">14</div>
            <div class="label">Organic Varieties</div>
          </div>
          <div class="package-price">
            $45.75
            <div class="text">/ Highest</div>
          </div>
          <h3 class="package-title">
            Zero packaging organic veg box medium top
          </h3>
          <div class="package-list">
            <ul>
              <li><i class="far fa-check"></i>The UK Red potatoes</li>
              <li><i class="far fa-check"></i>The UK Carrots</li>
              <li><i class="far fa-check"></i>The UK Parsnips</li>
              <li><i class="far fa-check"></i>Spain Broccoli</li>
              <li><i class="far fa-check"></i>Spain Italy Courgettes</li>
            </ul>
          </div>
          <a href="<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="package-style1">
          <div class="package-img">
            <img src="./src/assets/img/package/p-1-4.jpg" alt="Package" />
          </div>
          <div class="package-quantity" data-bg-src="./src/assets/img/shape/pack-bg.png">
            <div class="number">19</div>
            <div class="label">Organic Varieties</div>
          </div>
          <div class="package-price">
            $99.75
            <div class="text">/ VIP</div>
          </div>
          <h3 class="package-title">
            Intermix and alphabets to get to uniqueness
          </h3>
          <div class="package-list">
            <ul>
              <li><i class="far fa-check"></i>The UK Red potatoes</li>
              <li><i class="far fa-check"></i>The UK Carrots</li>
              <li><i class="far fa-check"></i>The UK Parsnips</li>
              <li><i class="far fa-check"></i>Spain Broccoli</li>
              <li><i class="far fa-check"></i>Spain Italy Courgettes</li>
            </ul>
          </div>
          <a href="<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
        </div>
      </div>
    </div> -->
    <div class="vs-carousel" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-fade="true" id="shopSlide8440">
      <div id="BestSeller">
        <div class="row gx-2px justify-content-center">

          <?php
          require_once 'DAO/ProductDAO.php';

          $productDao = new ProductDao();
          $products = $productDao->select(); // Lấy danh sách sản phẩm
          // var_dump($products);

          $linkpro = "index.php?controller=product_details&idpro="; // Xây dựng đường dẫn sản phẩm


          ?>

          <?php foreach ($products as $product) : ?>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">

              <div class="vs-product-box3">
                <div class="product-img">
                  <!-- <a href="shop-details.html"><img src="<?php echo $product->getImage(); ?>" alt="Product Image" class="w-100" /></a>
       -->
                  <a href="shop-details.html"><img src="./src/assets/img/shop/product-3-3.png" alt="Product Image" class="w-100" /></a>
                </div>
                <div class="actions-btn">
                  <a href="<?php echo $product->getImage(); ?>" class="icon-btn popup-image"><i class="far fa-search"></i></a>
                  <a href="index.php?controller=wishlistCart" class="icon-btn"><i class="fal fa-heart"></i></a>
                  <a href="<?php echo $linkpro . $product->getId(); ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
                </div>

                <div class="product-content">
                  <div class="product-rating-box">
                    5.0
                    <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
                      <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of
                        5</span>
                    </div>
                  </div>
                  <h4 class="product-title">
                    <a href="shop-details.html"><?php echo $product->getName(); ?></a>
                  </h4>
                  <span class="price"><strong><?php echo $product->getPrice(); ?></strong><del><?php echo $product->getPrice(); ?></del></span>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
          <div class="bottom-btn">
            <a href="index.php?controller=product_show" class="vs-btn style3">All Product<i class="fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--==============================
    Buy Whole Food Online at Real Foods
    ==============================-->
<section class="space-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 mb-40 mb-xl-0">
        <div class="img-box4">
          <div class="img-1">
            <img src="./src/assets/img/about/ab-8-1.png" alt="About Image" />
          </div>
          <div class="img-2">
            <img src="./src/assets/img/about/ab-8-2.png" alt="About Image" />
          </div>
          <div class="content">
            <div class="title">Natural Organic</div>
            <div class="text">
              Alienum phaedrum torquat os nec eu, vis detrax.
            </div>
          </div>
        </div>
      </div>
      <?php

      require_once('DAO/ProductDAO.php');
      $productDao = new ProductDao();
      $linkpro = "index.php?controller=product_details&idpro=" . $id;
      $result = $productDao->getProductsByCategory("Bánh");
      $products = $result['products'];
      $category = $result['category'];
      ?>
      <div class="col-xl-6">
        <div class="content-style2">
          <span class="sub-title4"><?php echo $result['category']->getName(); ?></span>
          <h2 class="sec-title3">Buy Whole Food Online at Real Foods</h2>
          <p class="sec-text">
            <?php echo $result['category']->getDescription(); ?>
          </p>
          <div class="row mt-lg-3 pt-3 gy-4">
            <?php foreach ($result['products'] as $product) { ?>
              <div class="col-md-6">
                <div class="vs-product-box3 style2">
                  <div class="product-img">
                    <a href="shop-details.html"><img src="./src/assets/img/shop/product-3-32.png" alt="Product Image" class="w-100" /></a>
                    <!-- <a href="shop-details.html"><img src="<?php echo $product->getImage(); ?>" alt="Product Image" class="w-100" /></a> -->
                    <span class="product-tag1">Hot</span>
                  </div>
                  <div class="actions-btn">
                    <a href="./src/assets/img/shop/product-3-32.png" class="icon-btn popup-image"><i class="far fa-search"></i></a>
                    <!-- <a href="<?php echo $product->getImage(); ?>" class="icon-btn popup-image"><i class="far fa-search"></i></a> -->
                    <a href="index.php?controller=wishlistCart" class="icon-btn"><i class="fal fa-heart"></i></a>
                    <a href="<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
                  </div>
                  <div class="product-content">
                    <div class="product-rating-box">
                      5.0
                      <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
                        <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of
                          5</span>
                      </div>
                    </div>
                    <h4 class="product-title">
                      <a href="<?php echo $linkpro; ?>"><?php echo $product->getName(); ?></a>
                    </h4>
                    <span class="price"><strong><?php echo $product->getPrice(); ?></strong></span>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- <div class="col-md-6">
              <div class="vs-product-box3 style2">
                <div class="product-img">
                  <a href="shop-details.html"><img src="./src/assets/img/shop/product-3-13.png" alt="Product Image" class="w-100" /></a>
                </div>
                <div class="actions-btn">
                  <a href="./src/assets/img/shop/product-3-13.png" class="icon-btn popup-image"><i class="far fa-search"></i></a>
                  <a href="index.php?controller=wishlistCart" class="icon-btn"><i class="fal fa-heart"></i></a>
                  <a href="index.php?controller=<?php echo $linkpro; ?>" class="vs-btn style4 cart-btn"><i class="fal fa-cart-plus"></i>Add To Cart</a>
                </div>
                <div class="product-content">
                  <div class="product-rating-box">
                    5.0
                    <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
                      <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of
                        5</span>
                    </div>
                  </div>
                  <h4 class="product-title">
                    <a href="shop-details.html">Careful Compounds</a>
                  </h4>
                  <span class="price"><strong>$63.00</strong><del>$99.00</del></span>
                </div>
              </div>
            </div> -->
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
<!--==============================
    Subscribe Area
    ==============================-->
<!-- <section class="space" data-bg-src="./src/assets/img/bg/newsletter-bg-1-2.jpg">
  <div class="container">
    <div class="newsletter-style2" data-bg-src="./src/assets/img/shape/newsletter-bg-1-1.png">
      <div class="shape-1 d-none d-md-block">
        <img src="./src/assets/img/shape/newsletter-s-008.png" alt="shape" />
      </div>
      <span class="sub-title4">Subscribe and Get new Tips and Updates</span>
      <h2 class="sec-title3">Subscribe & Get 10% Off</h2>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter Your Email Address...." />
        <button class="vs-btn style4" type="submit">
          <i class="fas fa-envelope"></i>Subscribe
        </button>
      </div>
    </div>
  </div>
</section> -->
<!--==============================
        Blog Area
    ==============================-->
<section class="vs-blog-wrapper space-top space-md-bottom">
  <div class="container">
    <div class="section-title text-center">
      <div class="sec-icon">
        <img src="./src/assets/img/icons/sec-icon-2.png" alt="icon" />
      </div>
      <span class="sub-title4">Tips & News</span>
      <h2 class="sec-title3">Recent Articles</h2>
    </div>
    <div class="row vs-carousel" data-slide-show="3" data-sm-slide-show="1">
      <div class="col-xl-4">
        <div class="vs-blog blog-style1">
          <div class="blog-img image-scale-hover">
            <a href="blog-details.html"><img src="./src/assets/img/blog/blog-4-1.jpg" alt="Blog Image" class="w-100" /></a>
          </div>
          <div class="blog-content">
            <div class="tags">
              <a href="blog-details.html">Organic</a>
            </div>
            <a href="blog-details.html" class="blog-date">Dec 22,2022</a>
            <h3 class="blog-title">
              <a href="blog-details.html">From its medieval origins to the digital
              </a>
            </h3>
            <p class="blog-text">
              Nvidunt ut labore et dolore magna aliqu accusam et justo duo
              dolores et ea rebu Lorem ipsum dolor sit ametrit.
            </p>
          </div>
          <div class="meta-box">
            <a href="blog-details.html">Posted By Admin</a>
            <a href="blog-details.html">5 Comments</a>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="vs-blog blog-style1">
          <div class="blog-img image-scale-hover">
            <a href="blog-details.html"><img src="./src/assets/img/blog/blog-4-2.jpg" alt="Blog Image" class="w-100" /></a>
          </div>
          <div class="blog-content">
            <div class="tags">
              <a href="blog-details.html">Popular</a>
            </div>
            <a href="blog-details.html" class="blog-date">Dec 18,2022</a>
            <h3 class="blog-title">
              <a href="blog-details.html">Latin derived from Cicero's 1st-century</a>
            </h3>
            <p class="blog-text">
              Nvidunt ut labore et dolore magna aliqu accusam et justo duo
              dolores et ea rebu Lorem ipsum dolor sit ametrit.
            </p>
          </div>
          <div class="meta-box">
            <a href="blog-details.html">Posted By Ripon</a>
            <a href="blog-details.html">3 Comments</a>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="vs-blog blog-style1">
          <div class="blog-img image-scale-hover">
            <a href="blog-details.html"><img src="./src/assets/img/blog/blog-4-3.jpg" alt="Blog Image" class="w-100" /></a>
          </div>
          <div class="blog-content">
            <div class="tags">
              <a href="blog-details.html">Fresh</a>
            </div>
            <a href="blog-details.html" class="blog-date">Jan 21,2022</a>
            <h3 class="blog-title">
              <a href="blog-details.html">Creation timelines for the standard lorem</a>
            </h3>
            <p class="blog-text">
              Nvidunt ut labore et dolore magna aliqu accusam et justo duo
              dolores et ea rebu Lorem ipsum dolor sit ametrit.
            </p>
          </div>
          <div class="meta-box">
            <a href="blog-details.html">Posted By Admin</a>
            <a href="blog-details.html">9 Comments</a>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="vs-blog blog-style1">
          <div class="blog-img image-scale-hover">
            <a href="blog-details.html"><img src="./src/assets/img/blog/blog-4-4.jpg" alt="Blog Image" class="w-100" /></a>
          </div>
          <div class="blog-content">
            <div class="tags">
              <a href="blog-details.html">Natural</a>
            </div>
            <a href="blog-details.html" class="blog-date">Mar 1,2022</a>
            <h3 class="blog-title">
              <a href="blog-details.html">Lorem ipsum was purposefully designed</a>
            </h3>
            <p class="blog-text">
              Nvidunt ut labore et dolore magna aliqu accusam et justo duo
              dolores et ea rebu Lorem ipsum dolor sit ametrit.
            </p>
          </div>
          <div class="meta-box">
            <a href="blog-details.html">Posted By Admin</a>
            <a href="blog-details.html">3 Comments</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
        Blog Area
    ==============================-->
<div class="space-bottom">
  <div class="container">
    <div class="row gx-0 gy-4 justify-content-center text-center">
      <div class="col-6 col-sm-4 col-md-4 col-lg-3 brand-style1">
        <img src="./src/assets/img/brand/logo-1-1.png" alt="Barnad Image" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-3 brand-style1">
        <img src="./src/assets/img/brand/logo-1-2.png" alt="Barnad Image" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-3 brand-style1">
        <img src="./src/assets/img/brand/logo-1-3.png" alt="Barnad Image" />
      </div>
      <div class="col-6 col-sm-4 col-md-4 col-lg-3 brand-style1">
        <img src="./src/assets/img/brand/logo-1-4.png" alt="Barnad Image" />
      </div>
    </div>
  </div>
</div>
<!--==============================
    Banner Area
    ==============================-->
<section class="banner-wrap1">
  <div class="container-fluid">
    <div class="row gy-30">
      <div class="col-lg-4">
        <div class="banner-style1" data-bg-src="./src/assets/img/banner/banner-1-1.jpg">
          <div class="banner-content">
            <span class="banner-subtitle">End of season -50%</span>
            <h3 class="banner-title">100% Organic Fresh Natural Food</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="banner-style1" data-bg-src="./src/assets/img/banner/banner-1-2.jpg">
          <div class="banner-content">
            <span class="banner-subtitle">End of season -50%</span>
            <h3 class="banner-title">
              New Skin Food
              <span class="fw-light">100 natural origins</span>
            </h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="banner-style1" data-bg-src="./src/assets/img/banner/banner-1-3.jpg">
          <div class="banner-content">
            <span class="banner-subtitle">End of season -50%</span>
            <h3 class="banner-title">Eat Organic & Healthy Food</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Area -->
<?php
require_once('view/globle/user/footer.php');
?>
</body>

</html>