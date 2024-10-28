<?php include'include/head.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        function changeCol6(){
            const windowWidth=window.innerWidth;
            const col6=document.querySelectorAll(".it-col6");
            if(windowWidth<470){
                col6.forEach(e => {
                    e.classList.remove('col-lg-6');
                });
            }else{
                col6.forEach(e => {
                    if(!e.classList.contains('col-lg-6')){
                    e.classList.add('col-lg-6');
                    }
                });            
            }      
        }
        window.onload = changeCol6;
        window.onresize = changeCol6;         
    </script>

</head>

<body class="index-main">

    <?php include'classes/Crud.php'; 
    $crud=new Crud();
    $sliderBanner=$crud->Read("sliderphotos","1 order by `id` desc");
    $backGround=$crud->Read("background","1");


    $who = $crud->Read("who", "1 GROUP BY `designation` ORDER BY `id` desc");
    foreach($who as $hon){
        if(strtolower($hon['designation'])=='cem'){
            $Cem=$hon;
        }else if(strtolower($hon['designation'])=='em'){
            $Em=$hon;
        }
    }
    
    $programProjects=$crud->Read("programsprojects","1 order by `id` desc");
 
    $seedMission=$crud->Read("seedmission","1 order by `id` desc");
    $seedVision=$crud->Read("seedvision","1 order by `id` desc");
    $aboutBodolandSeedMission=$crud->Read("about_bodolandseed","1 order by `id` desc");
    ?>









    <!-- ==================== Start progress-scroll-button ==================== -->

    <?php include'include/progressBar.php'; ?>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <?php include"include/navbar.php"; ?>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start sticky sidebar ==================== -->

    <?php include'include/contact.php'; ?>

    <?php include'include/searchBar.php'; ?>


    <!-- ==================== End sticky sidebar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sevillana&display=swap');
    </style>

    <header class="slider slider-prlx o-hidden">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <?php 
                   if($sliderBanner){
                     for($i=0;$i<3;$i++){
                        $slider3[]=$sliderBanner[$i];
                     }
                     foreach($slider3 as $banner){
                ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="seed-admin/admin/<?= $banner['image']; ?>"
                        data-overlay-dark="3">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption text-center mt-30">
                                        <h1 class="fw-800" style=" font-family: Roboto Slab, serif;
                                        font-optical-sizing: auto;
                                        font-weight: 200;
                                        font-style: normal; color: gray;" data-splitting>
                                            <?php 
                                               $desc=strip_tags($banner['banner_title']);
                                               if(strlen($desc)>70){
                                                echo substr($desc,0,70)." ...";
                                               }else{
                                                echo $desc;
                                               }
                                            ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                   }else {
                ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="assets/img/slider/black.jpg" data-overlay-dark="5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption text-center mt-30">
                                        <h4 class="fw-800" data-splitting>
                                            Empty image title
                                        </h4>

                                        <div class="mt-30">
                                            <a href="about-creative.html"
                                                class="butn butn-md gr-purple-red-bg text-light radius-30">
                                                <span class="text slide-up">Login</span>
                                                <span class="text slide-down">Regsiter</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                   }
                ?>

            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="https://www.instagram.com/govtofbtr/ "></div>

            <!-- social icons -->
            <div class="social-icon">
                <a href="https://www.facebook.com/GovtofBTR/" target="_blank"  class="social-menu"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/GovtofBTR"  target="_blank" class="social-menu"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/@GovtofBTR" target="_blank"  class="social-menu"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/pramodboroofficial/?hl=en" target="_blank"  class="social-menu"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="curve-buttom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" height="100">
                <path d="M 0 0 L0 100 L100 100 L100 0 Q 50 200 0 0" fill="#fafafb"></path>
            </svg>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start intro ==================== -->

    <section class="intro-up bg-gray">
        <div class="container">
            <div class="row">
    
               

                <div class="col-lg-4">
                    <div class="item flex wow fadeInUp md-mb30" data-wow-delay=".1s">

                        <span class=" gr-purple-red-text mr-10">
                            <img src="assets\img\background\btr-circle-logo-rbg.png" alt="image1"
                                style="height: 7rem; width: 8rem; ">
                        </span>
                        <div class="cont">
                            <h6 class="mb-5 fw-600">
                                Government of BTR.
                            </h6>
                            <p>
                                Bodoland, officially the Bodoland Territ ... 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item flex wow fadeInUp md-mb30" data-wow-delay=".1s">

                        <span class=" gr-purple-red-text mr-10">
                            <img src="assets/img/about/btrseed.png" alt="image1"
                                style="height: 7rem; width: 8rem; ">
                        </span>
                        <div class="cont">
                            <h6 class="mb-5 fw-600">
                               BTR Seed Mission
                            </h6>
                            <p>
                                Skill, Employment & Entrepreneurship Department | BTR
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item flex wow fadeInUp md-mb30" data-wow-delay=".1s">

                        <div class=" gr-purple-red-text mr-10">
                            <img src="assets/img/about/skill-india.jpg" alt="image1"
                                style="height: 7rem; width: 8rem; ">
                        </div>
                        <div class="cont">
                            <h6 class="mb-5 fw-600">
                              SEED Department
                            </h6>
                            <p>
                                Biggest Knowledge Fest in Northeast Assam , Bodoland
                            </p>
                        </div>
                    </div>
                </div>


               
            </div>
        </div>
    </section>

    <!-- ==================== End intro ==================== -->

    <!-- ==================== News Ticker start ==================== -->
    <?php include "include/news-ticker.php" ?>
    <!-- ==================== New Ticker End ==================== -->

    
        <!-- ==================== imgae auto scroll start ==================== -->
        <?php include "include/image-auto-scroll.php" ?>
        <!-- ==================== imgae auto scroll end==================== -->

    <!-- ==================== imgae auto scroll start ==================== -->
    <?php include "include/verticle-newsScroll.php" ?>
    <!-- ==================== imgae auto scroll end==================== -->




          <!-- ==================== start abouticon-image info ==================== -->

            <?php

            $aboutUs=$crud->Read("aboutseed","1 order by `id` desc");
            $seedMission=$crud->Read("seedmission","1 order by `id` desc");
            $seedVision=$crud->Read("seedvision","1 order by `id` desc");
            $strategy=$crud->Read("strategy","1 order by `id` desc");
            $background=$crud->Read("background","1 order by `id` desc");
          ?>

          <section class="pb-0 mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign">
                        <div class="content md-mb50">
                            <div class="sub-head radius fz-12 ls2 text-u mb-10 mt-10">
                                <span><?= $aboutUs[0]['head'];  ?></span>
                            </div>
                            <h2 class="mb-20 fw-800"> <span class="gr-purple-red-text"><?= $aboutUs[0]['title'];  ?></span></h2>
                            <p style="font-weight: bold;">
                                <?php
                                 $desc=strip_tags($aboutUs[0]['description']);
                                 if(strlen($desc)>100){
                                    echo substr($desc,0,100)." <a class='text-danger' href='about-us.php'> ..read more</a>";
                                 }else {
                                    echo $desc;
                                 }
                                ?>
                            
                            </p>
    
                            
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="content">
                            <div class="crv-status text-center">
                                <div class="st-one item valign" style="background-image: url('assets/img/background/btr-circle-logo-rbg.png');  background-size: contain; background-repeat: no-repeat; background-position: center; ">
                                    <div class="cont full-width">
                                        <!-- <span class="icon fz-30 mb-10 pe-7s-mouse"></span>
                                        <h6 class="fz-16">ui / ux <br> Designer</h6> -->
                                    </div>
                                </div>
                                <div class="st-two item valign" style="background-image: url('assets/img/about/seed4.png');  background-size: contain; background-repeat: no-repeat; background-position: center;">
                                    <div class="cont full-width">
                                        <!-- <span class="icon fz-30 mb-10 pe-7s-vector"></span>
                                        <h6 class="fz-16">Web <br> Development</h6> -->
                                    </div>
                                </div>
                                <div class="st-three item valign" style="background-image: url('assets/img/about/di.png'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                                    <div class="cont full-width" >
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .feedback-imgs{
                box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
                font-size: large;
            }

          
            @media only screen and (max-width: 450px) {
              .st-one , .st-two , .st-three {
                 height: 160px !important;
                 width: 160px !important;
              }
            }

        </style>
    
         <!-- ==================== end abouticon-image info ==================== -->






    <!-- ==================== Start intro ==================== -->

    <style>
        @media screen and (max-width:470px) {
            .unigrid{
                display: grid !important;
                grid-template-columns: repeat(1,1fr) !important;
                gap: 15px;               
            }
        }
    </style>

 <!-- ==================== Start section ==================== -->

 <?php
 if($aboutBodolandSeedMission){
    $about_bodoland_seed_mission=strip_tags($aboutBodolandSeedMission[0]['description']);
    $missionImage=$aboutBodolandSeedMission[0]['image'];
 }
?>
<section class="mt-30">
    <div class="container">
        <div class="row">                
            <div class="col-md-3 col-lg-3  offset-lg-1 wow slideInUp">
                <div class="img wow imago">
                    <img src="
                    <?php
                      if($aboutBodolandSeedMission && $missionImage){
                        echo 'seed-admin/admin/'.$missionImage;
                      }
                    ?>
                    " alt="" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-md-2 col-lg-2"></div>

            <div class=" col-md-5 col-lg-5  valign">
                <div class="content">
                    <div class="sub-title gr-purple-red-text inline">
                        <h3>SEED Mission </h3>
                    </div>
                   
                    <div class="accordion bord">
                        <div class="img wow fadeInLeft mb-20" data-wow-delay=".3s" data-wow-duration="2s">
                            
                            <p style="text-align: justify;">
                              <?php
                                if($aboutBodolandSeedMission && $about_bodoland_seed_mission){
                                    $desc=$about_bodoland_seed_mission;
                                    if(strlen($desc)>150){
                                        echo substr($desc,0,150). '  <a class="text-danger" href="bodoland-seed-mission.php"> ..read more</a>';
                                    }else{
                                        echo $desc;
                                    }
                                }
                              ?>
                            </p>                               
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End section ==================== -->



                             <!-- // honorable -->


<section class="intro-out-box mt-30 p-3 bg-gray">
    <div class="container">
        <div class="row">
            <?php
            
                if($Cem && $Em){
                   $cem_id=$Cem['id'];                      
                   $cem_image=$Cem['image']; 
                   $cem_name=$Cem['name'];
                   $cem_role=$Cem['designation'];
                   $cem_description=strip_tags($Cem['description']);

                   $em_id=$Em['id'];
                   $em_image=$Em['image'];
                   $em_name=$Em['name'];
                   $em_role=$Em['designation'];
                   $em_description=strip_tags($Em['description']);
            ?>
            <div class="col-lg-6 it-col6 valign">
                <div class="img wow fadeInLeft md-mb80" data-wow-delay=".3s" data-wow-duration="2s">
                   
                    <img src="seed-admin/admin/images/static/assammap.png" alt="">
                   
                    <div class="svg-color">
                        <svg x="0px" y="0px" viewBox="0 0 288 288" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg1">
                            <defs>
                                <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="1000%" style="stop-color: #e8f0f4;"></stop>
                                    <stop offset="0%" style="stop-color: #e8f0f4;"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient1)" id="blob1" d="">
                                <animate repeatCount="indefinite" attributeName="d" dur="12s"
                                    values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z" />
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 it-col6 valign">
                <div class="cont">
                    <h6 class="sub-title gr-purple-red-text inline">Honours</h6>
                    <h4>Hon'ble Dignitaries</h4>

                    <div class="mt-50 unigrid" style="display: grid;grid-template-columns: repeat(2,1fr);">
                        <div class="item mr-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="profImg">
                                <div
                                    style="border: 5px solid #f3eeee;border-radius: 50%;padding: 20px; width: 13rem;">
                                    <img src="seed-admin/admin/<?php echo $cem_image; ?>"
                                        style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                        alt="">
                                </div>
                                <a href="profile.php?id=<?= base64_encode($cem_id); ?>">
                                    <button
                                        style="border: 2px solid plum;padding: 3px 19px;    transform: translate(-17px, -51px); border-radius:18px 6px 18px 18px;">Profile
                                    </button>
                                </a>
                                <div class="profText">
                                    <h4 class="fw-300 mb-10">
                                        <?php echo $cem_name; ?>
                                    </h4>
                                    <h6 class="mb-5">Hon'ble <?= $cem_role; ?>, BTR</h6>
                                    <p>
                                        <?php
                                          echo substr($cem_description,0,100)." ...";
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="profImg">
                                <div
                                    style="border: 5px solid #dad2d2;border-radius: 50%;padding: 20px;width: 13rem;">
                                    <img src="seed-admin/admin/<?php echo $em_image; ?>"
                                        style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                        alt="">
                                </div>
                                <a href="profile.php?id=<?= base64_encode($em_id); ?>"><button
                                        style="border: 2px solid plum;padding: 3px 19px;    transform: translate(-17px, -51px); border-radius:18px 6px 18px 18px;">Profile
                                    </button>
                                </a>
                                <div class="profText">
                                    <h4 class="fw-300 mb-10">
                                        <?php echo $em_name; ?>
                                    </h4>
                                    <h6 class="mb-5">Hon'ble <?= $em_role; ?>, BTR</h6>
                                    <p>
                                        <?php
                                          echo substr($em_description,0,100)." ...";
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php
               }else{
            ?>

            <div class="col-lg-6 it-col6 valign">
                <div class="img wow fadeInLeft md-mb80" data-wow-delay=".3s" data-wow-duration="2s">

                    <img src="assets\img\aboutBtr\assamBtrDefault.png" alt="">

                    <div class="svg-color">
                        <svg x="0px" y="0px" viewBox="0 0 288 288" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg1">
                            <defs>
                                <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="1000%" style="stop-color: #e8f0f4;"></stop>
                                    <stop offset="0%" style="stop-color: #e8f0f4;"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient1)" id="blob1" d="">
                                <animate repeatCount="indefinite" attributeName="d" dur="12s"
                                    values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z" />
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 it-col6 valign">
                <div class="cont">
                    <h6 class="sub-title gr-purple-red-text inline">Honors</h6>
                    <h4>Hon'ble Dignitaries</h4>

                    <div class="mt-50 unigrid" style="display: grid;grid-template-columns: repeat(2,1fr);">
                        <div class="item mr-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="profImg">
                                <div
                                    style="border: 5px solid #f3eeee;border-radius: 50%;padding: 20px; width: 13rem;">
                                    <img src="https://img.freepik.com/free-vector/user-circles-set_78370-4704.jpg?w=740&t=st=1714470724~exp=1714471324~hmac=c7a0bbb3cbe0678e7c1788dc6a2a1ac8dc9e26da24dbe74f27dec5f4331a750a"
                                        style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                        alt="">
                                </div>
                                <a href="profile.php?p=cem">
                                    <button
                                        style="border: 2px solid plum;padding: 3px 19px;    transform: translate(-17px, -51px); border-radius:18px 6px 18px 18px;">Profile
                                    </button>
                                </a>
                                <div class="profText">
                                    <h4 class="fw-300 mb-10">Name of the CEM</h4>
                                    <h6 class="mb-5">Hon'ble CEM, BTR</h6>
                                    <p>
                                        CEM Description ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="profImg">
                                <div
                                    style="border: 5px solid #dad2d2;border-radius: 50%;padding: 20px;width: 13rem;">
                                    <img src="https://img.freepik.com/free-vector/user-circles-set_78370-4704.jpg?w=740&t=st=1714470724~exp=1714471324~hmac=c7a0bbb3cbe0678e7c1788dc6a2a1ac8dc9e26da24dbe74f27dec5f4331a750a"
                                        style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                        alt="">
                                </div>
                                <a href="profile.php?p=em"><button
                                        style="border: 2px solid plum;padding: 3px 19px;    transform: translate(-17px, -51px); border-radius:18px 6px 18px 18px;">Profile
                                    </button>
                                </a>
                                <div class="profText">
                                    <h4 class="fw-300 mb-10">Name of the EM</h4>
                                    <h6 class="mb-5">Hon'ble EM, BTR</h6>
                                    <p>
                                        EM Description ....
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php           
               } 
            ?>

        </div>
    </div>
</section>





    <!-- ==================== End intro ==================== -->


    <!-- ==================== Start Team ==================== -->

    <section class="team-clas mt-25 p-3"
        data-background="https://t4.ftcdn.net/jpg/02/10/45/95/360_F_210459536_XmLDEcKq2DpeNLVmheuWeu9NM9aGKnih.jpg"
        style="background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-20">
                        <div class="flex no-flex">
                            <div class="m-title valign">
                                <div>
                                    <h6 class="ls2 text-u fz-13 mb-20 gr-purple-red-text rest inline">Under Seed
                                    </h6>
                                    <h2 class="fw-700">Programs & Projects</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>       
    </section>
  
    <section class="blog-grid" data-background="https://t4.ftcdn.net/jpg/02/10/45/95/360_F_210459536_XmLDEcKq2DpeNLVmheuWeu9NM9aGKnih.jpg"
    style="background-repeat: no-repeat;background-size: cover;">
        <div class="container">

            <div class="row">
                <?php
                  if($programProjects){
                    foreach($programProjects as $pp){
                ?>
                    <div class="col-lg-4">
                            <div class="item box-shadow mb-30">
                                <div class="img">
                                    <img src="seed-admin/admin/<?= $pp['image']; ?>" alt=""  style="height:300px;width: 100%;">

                                    <div class="tags">
                                        <a href="program-project.php?id=<?= base64_encode($pp['id']); ?>" class="gat"><?= $pp['head']; ?></a>
                                    </div>
                                </div>
                                <div class="" style="padding: 25px 20px;">
                                    <div class="">                                    
                                        <div class="">
                                            <span><?= $pp['date_uploaded']; ?></span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h5 style="font-size: 100%;">
                                            <a href="program-project.php?id=<?= base64_encode($pp['id']); ?>">
                                                <?php
                                                    $desc=strip_tags($pp['description']);
                                                    if(strlen($desc)>25){
                                                        echo substr($desc,0,25)."..<span class='text-danger'>read more</span>";
                                                    }else{
                                                        echo $desc;
                                                    }
                                                ?>
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>    
                    </div>
                <?php
                    }
                  }else{
                    for($i=0;$i<3;$i++){
                ?>
                    <div class="col-lg-4">
                        <div class="item box-shadow mb-30">
                            <div class="img " style="padding: 20px;">
                                <img src="" alt="" style="height: 230px;width: 100%;border: 1px solid rgb(232, 198, 235);box-shadow: 0px 0px 12px;">

                                <div class="tags">
                                    <a href="javascript:void();" class="gat">Head Title</a>
                                </div>
                            </div>
                            <div class="" style="padding: 25px 20px;">
                                <div class="">                                    
                                    <div class="">
                                        <span>date _ _ _</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h5 style="font-size: 100%;"><a href="javascript:void()">short description about this program and project.</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>            
                <?php
                    }
                  }
                ?>

            </div>
        </div>
    </section>

    <!-- ==================== End Team ==================== -->

    <!-- ==================== Start Blog ==================== -->

    <section class="blog-grid" style="background-image: url('assets/img/news-events/event-details-square-background.avif');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mb-80">
                        <div class="flex no-flex">
                            <div class="m-title valign">
                                <div>
                                    <h6 class="ls2 text-u fz-13 mb-10 mt-20 gr-purple-red-text rest inline">SEED Events
                                    </h6>
                                    <h2 class="fw-700">News / Events</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                $events=$crud->Read("events","1 order by `id` desc limit 3");
                ?>                
                <?php
                   if($events){
                    foreach($events as $e){ 
                        $news=strip_tags($e['description'],'<a></a>');
                       
                ?>
                <div class="col-lg-4 p-3">
                    <div class="item box-shadow crv wow fadeInUp" data-wow-delay=".3s">
                        <div class="img">
                            <img src="seed-admin/admin/<?= $e['image']; ?>" style="height: 250px;width: 100%;"
                                alt="">

                            <div class="tags">
                                <a href="event-details.php?id=<?= base64_encode($e['id']); ?>" class="gat">
                                <i class="fa-solid fa-eye"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10"
                                        viewBox="0 0 16 10">
                                        <polygon fill-rule="evenodd"
                                            points="104.988 9.2 109.488 9.2 109.488 13.7 107.76 11.972 103.062 16.688 100.074 13.7 95.574 18.2 94.512 17.138 100.074 11.594 103.062 14.582 106.716 10.928"
                                            transform="translate(-94 -9)"></polygon>
                                    </svg> 
                                </a>                                   
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <div class="author gr-purple-red-text">
                                    <span>Seed events</span>
                                </div>
                                <div class="date">
                                    <span><?= $e['date_uploaded']; ?></span>
                                </div>
                            </div>
                            <div class="title">
                                <h5 class="fz-18 fw-700">
                                   <a href="event-details.php?id=<?= base64_encode($e['id']); ?>">
                                        <?php
                                       
                                        if(strlen($news)>20){
                                            echo substr($news,0,20)."  ...";
                                        }else{
                                            echo $news;
                                        }
                                        ?>
                                   </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                   }
                 }else{
                    for($i=0;$i<3;$i++){
                ?>
                <div class="col-lg-4">
                    <div class="item box-shadow crv wow fadeInUp" data-wow-delay=".3s">
                        <div class="img" style="height: 20rem;width: 25rem;">
                            <img src=""
                                style="height: 100%;width: 100%;" alt="">

                            <div class="tags">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10">
                                        <polygon fill-rule="evenodd"
                                            points="104.988 9.2 109.488 9.2 109.488 13.7 107.76 11.972 103.062 16.688 100.074 13.7 95.574 18.2 94.512 17.138 100.074 11.594 103.062 14.582 106.716 10.928"
                                            transform="translate(-94 -9)"></polygon>
                                    </svg>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <div class="author gr-purple-red-text">
                                    <span>Seed events</span>
                                </div>
                                <div class="date">
                                    <span>date _ _ _</span>
                                </div>
                            </div>
                            <div class="title">
                                <h5 class="fz-18 fw-700">short description about this ...</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->


    <!-- ==================== Start section ==================== -->

    <!-- <?php
       if($seedMission){
          $mission=strip_tags($seedMission[0]['description']);
       }
       if($seedVision){
        $vision=strip_tags($seedVision[0]['description']);
     }
     if($aboutBodolandSeedMission){
        $about_bodoland_seed_mission=strip_tags($aboutBodolandSeedMission[0]['description']);
     }
    ?>
    <section style="padding:40px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 valign">
                    <div class="content">
                        <div class="sub-title gr-purple-red-text inline">
                            <h3>SEED Mission </h3>
                        </div>
                       
                        <div class="accordion bord">

                            <div class="item wow fadeInUp" data-wow-delay=".1s">
                                <div class="title">
                                    <h6 class="fz-15">About Bodoland SEED Mission</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info active">
                                    <p> 
                                        <?php
                                            if($aboutBodolandSeedMission && $about_bodoland_seed_mission){
                                               if(strlen($about_bodoland_seed_mission)>100){
                                                echo substr($about_bodoland_seed_mission,0,100).' <a href="bodoland-seed-mission.php" style="color: red;">..read
                                                more</a>';
                                               }else echo $about_bodoland_seed_mission;
                                            }else{
                                                 echo "Texts for About Seed .";
                                            }
                                        ?>                                      
                                    </p>
                                </div>
                            </div>

                            <div class="item active wow fadeInUp" data-wow-delay=".3s">
                                <div class="title">
                                    <h6 class="fz-15">Why SEED?</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info ">
                                    <p>
                                        <?php
                                            if($seedVision && $vision){
                                               if(strlen($vision)>100){
                                                echo substr($vision,0,100).' <a href="bodoland-seed-mission.php" style="color: red;">..read
                                                more</a>';
                                               }else echo $vision;
                                            }else{
                                                 echo "Texts for About Seed .";
                                            }
                                        ?>       
                                    </p>
                                </div>
                            </div>

                            <div class="item active wow fadeInUp" data-wow-delay=".3s">
                                <div class="title">
                                    <h6 class="fz-15">Our Mission</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info ">
                                    <p>
                                        <?php
                                            if($seedMission && $mission){
                                               if(strlen($mission)>100){
                                                echo substr($mission,0,100).' <a href="bodoland-seed-mission.php" style="color: red;">..read
                                                more</a>';
                                               }else echo $mission;
                                            }else{
                                                 echo "Texts for About Seed .";
                                            }
                                        ?>       
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow slideInUp">
                    <div class="img wow imago">
                        <img src="seed-admin/admin/images/static/BtrCulPress-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ==================== End section ==================== -->


    <?php include'include/footer.php'; ?>

</body>


</html>