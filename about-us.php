<?php include'include/head.php'; ?>

</head>

<body class="cr-agency">

    <?php
      include('classes/Crud.php');
      $crud=new Crud();
      $aboutUs=$crud->Read("aboutseed","1 order by `id` desc");
      $seedMission=$crud->Read("seedmission","1 order by `id` desc");
      $seedVision=$crud->Read("seedvision","1 order by `id` desc");
      $strategy=$crud->Read("strategy","1 order by `id` desc");
      $background=$crud->Read("background","1 order by `id` desc");
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


    <!-- ==================== Start about Slider ==================== -->
    <?php
       if($aboutUs){
        $image=$aboutUs[0]['image'];      
       }
    ?>
    <header class="bg-img parallaxie valign" data-background='seed-admin/admin/<?=$image?>'
        data-overlay-dark="4" style="height: 55vh;">
        <div class="container">
            <h1 class="text-center mt-80">About Us</h1>
        </div>
    </header>

    <style>
        .pg-header-sipm {
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.5;
            min-height: 70vh;
            position: relative;
            inset: 0;
        }
    </style>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;

            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('assets/img/bodoland-gov/herotender2.PNG')";
            } else {
                header.style.backgroundImage = "url('assets/img/slider/2.jpg')";
            }
        });

        window.addEventListener('resize', function () {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;

            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('assets/img/bodoland-gov/herotender2.PNG')";
            } else {
                header.style.backgroundImage = "url('assets/img/slider/2.jpg')";
            }
        });
    </script>


    <!-- ==================== End about Slider ==================== -->


    <main class="main-content">

       <!-- ==================== start abouticon-image info ==================== -->
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 valign">
                    <div class="content md-mb50">
                        <div class="sub-head radius fz-12 ls2 text-u mb-60 mt-10">
                            <span><?= $aboutUs[0]['head'];  ?></span>
                        </div>
                        
                        <p style="font-weight: bold; text-align: justify; "><?= $aboutUs[0]['description'];  ?></p>

                        <div class="clients-rate-img flex mt-40">
                            <div class="imgs valign">
                                <div class="img border feedback-imgs">
                                    <img src="assets/img/about/logog20.png" alt="">
                                </div>
                                <div class="img border feedback-imgs">
                                    <img src="assets/img/about/iti1.png" alt="">
                                </div>
                                <div class="img border feedback-imgs">
                                    <img src="assets/img/about/skill-india.jpg" alt="">
                                </div>
                            </div>
                            <div class="text">
                                <h6>
                                    <span>100%</span>
                                    <span class="rate-star fz-10">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h6>
                                <span class="fz-13">Positive Feedback</span>
                            </div>
                        </div>
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


        <!-- ==================== Start About ==================== -->

        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <?php
                        if($seedVision){
                        $head=$seedVision[0]['head'];
                        $title=$seedVision[0]['title'];
                        $description=strip_tags($seedVision[0]['description']);
                        $image1=$seedVision[0]['image1'];
                        $image2=$seedVision[0]['image2'];
                    ?>
                    <div class="col-lg-5 valign">
                        <div class="cont md-mb50">
                            <span class="sub-title mt-60">
                                <?= $head; ?>
                            </span>     
                            <h4 class="mb-20 fz-45 fw-700"><?= $title; ?></p>
                                <span class="sub-title"><?= $description; ?></span>                                                                       
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                        <div class="two-img">
                            <div class="img1">
                                <img class="img-1-2-about" src="seed-admin/admin/<?= $image1 ?>" alt="">

                            </div>
                            <div class="img2">
                                <img class="img-1-2-about" src="seed-admin/admin/<?= $image2 ?>" alt="">
                            </div>

                            <div id="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#3b3f82">
                                            <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                                <div class="bord">
                                    <div class="cont">
                                        <h3 class="fz-70 font-numb">
                                            <img src="assets/img/about/btrseed.png" alt="" height="7rem" width="9rem"
                                                style="filter: brightness(5px);">
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php }else {?>
                        <div class="col-lg-5 valign">
                            <div class="cont md-mb50">   
                            <span class="sub-title mt-60">
                                Title text for seed vision
                            </span>                         
                                <h4 class="mb-20 fz-45 fw-700">Our Vission</h4>
                                    <span class="sub-title"> Description for seed vision</span>                                               
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                            <div class="two-img">
                                <div class="img1">
                                    <img class="img-1-2-about" src="" alt="">

                                </div>
                                <div class="img2">
                                    <img class="img-1-2-about" src="" alt="">
                                </div>

                                <div id="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                        height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                        xml:space="preserve">
                                        <defs>
                                            <path id="circlePath"
                                                d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#3b3f82">
                                                <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                                </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                    <div class="bord">
                                        <div class="cont">
                                            <h3 class="fz-70 font-numb">
                                                <img src="assets/img/about/btrseed.png" alt="" height="7rem" width="9rem"
                                                    style="filter: brightness(5px);">
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="container mt-60">
                <?php
                    if($strategy){
                    $head=$strategy[0]['head'];
                    $title=$strategy[0]['title'];
                    $description=strip_tags($strategy[0]['description']);
                    $image1=$strategy[0]['image1'];
                    $image2=$strategy[0]['image2'];
                ?>
                <div class="row">

                    <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                        <div class="two-img">
                            <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image1 ?>" alt="">
                            </div>
                            <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image2 ?>" alt="">
                            </div>



                            <div id="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#3b3f82">
                                            <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                                <div class="bord">
                                    <div class="cont">
                                        <h3 class="fz-70 font-numb">
                                            <img src="assets/img/about/goi.jpg" style="border-radius: 50%;" alt=""
                                                height="3rem" width="7rem"
                                                style="filter: brightness(5px); position: relative; z-index: -10;">
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 valign">
                        <div class="cont md-mb50">
                            <span class="sub-title mt-60">
                            <?= $head ?>
                            </span>
                            <h4 class="mb-20 fz-45 fw-700"> <?= $title ?></p>
                                <span class="sub-title"><?= $description ?></span>                               
                        </div>
                    </div>

                </div>
                <?php }else {?>
                    <div class="row">

                        <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                            <div class="two-img">
                                <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>
                                <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>



                                <div id="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                        height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                        xml:space="preserve">
                                        <defs>
                                            <path id="circlePath"
                                                d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#3b3f82">
                                                <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                                </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                    <div class="bord">
                                        <div class="cont">
                                            <h3 class="fz-70 font-numb">
                                                <img src="assets/img/about/goi.jpg" style="border-radius: 50%;" alt=""
                                                    height="3rem" width="7rem"
                                                    style="filter: brightness(5px); position: relative; z-index: -10;">
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5 valign">
                            <div class="cont md-mb50">


                                <span class="sub-title mt-60">
                                   title for strategy
                                </span>
                                <h4 class="mb-20 fz-45 fw-700">Our Strategy</h4>
                                    <span class="sub-title">description for strategy</span>
                            </div>
                        </div>

                    </div>
                <?php } ?>    
            </div>


            <div class="container mt-60">
                <?php
                    if($seedMission){
                    $head=$seedMission[0]['head'];
                    $title=$seedMission[0]['title'];
                    $description=strip_tags($seedMission[0]['description']);
                    $image1=$seedMission[0]['image1'];
                    $image2=$seedMission[0]['image2'];
                ?>
                <div class="row">
                    <div class="col-lg-5 valign">
                        <div class="cont md-mb50">
                            <span class="sub-title mt-60">
                            <?= $head; ?>
                            </span>
                            <h4 class="mb-20 fz-45 fw-700"> <?= $title; ?></p>
                                <span class="sub-title"><?= $description ?></span>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                        <div class="two-img">
                            <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image1 ?>" alt="">
                            </div>
                            <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image2 ?>" alt="">
                            </div>

                            <div id="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#3b3f82">
                                            <textPath xlink:href="#circlePath">
                                                BTR GOVT. of Assam . Skill, Employment
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                                <div class="bord">
                                    <div class="cont">
                                        <h3 class="fz-70 font-numb">
                                            <img src="assets/img/about/skill-india.png" style="border-radius: 50%;"
                                                alt="" height="3rem" width="7rem"
                                                style="filter: brightness(5px); position: relative; z-index: -10;">
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <?php }else {?>
                    <div class="row">
                        <div class="col-lg-5 valign">
                            <div class="cont md-mb50">
                            <span class="sub-title mt-60">
                                Title text for seed mission
                            </span>
                                <h4 class="mb-20 fz-45 fw-700">Our Mission</p>
                                    <span class="sub-title">description for seed mission </span>
                            </div>
                        </div>

                        <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                            <div class="two-img">
                                <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>
                                <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>



                                <div id="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                        height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                        xml:space="preserve">
                                        <defs>
                                            <path id="circlePath"
                                                d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#3b3f82">
                                                <textPath xlink:href="#circlePath">
                                                    BTR GOVT. of Assam . Skill, Employment
                                                </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                    <div class="bord">
                                        <div class="cont">
                                            <h3 class="fz-70 font-numb">
                                                <img src="assets/img/about/skill-india.png" style="border-radius: 50%;"
                                                    alt="" height="3rem" width="7rem"
                                                    style="filter: brightness(5px); position: relative; z-index: -10;">
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        
            
            <div class="container mt-60">
                <?php
                    if($background){
                    $head=$background[0]['head'];
                    $title=$background[0]['title'];
                    $description=strip_tags($background[0]['description']);
                    $image1=$background[0]['image1'];
                    $image2=$background[0]['image2'];
                ?>
                <div class="row">

                    <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                        <div class="two-img">
                            <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image1 ?>" alt="">
                            </div>
                            <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                    src="seed-admin/admin/<?= $image2 ?>" alt="">
                            </div>



                            <div id="circle">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#3b3f82">
                                            <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                                <div class="bord">
                                    <div class="cont">
                                        <h3 class="fz-70 font-numb">
                                            <img src="assets/img/about/goi.jpg" style="border-radius: 50%;" alt=""
                                                height="3rem" width="7rem"
                                                style="filter: brightness(5px); position: relative; z-index: -10;">
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 valign">
                        <div class="cont md-mb50">
                            <span class="sub-title mt-60">
                            <?= $head ?>
                            </span>
                            <h4 class="mb-20 fz-45 fw-700">   <?= $title ?></p>
                                <span class="sub-title"><?= $description ?></span>                               
                        </div>
                    </div>

                </div>
                <?php }else {?>
                    <div class="row">

                        <div class="col-lg-6 offset-lg-1" style="background-image: url('');">
                            <div class="two-img">
                                <div class="img1" style="height: 460px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>
                                <div class="img2" style="height: 300px; width: 330px; overflow: hidden;">
                                    <img class="img-1-2-about" style="width: 100%; height: 100%; object-fit: cover;"
                                        src="" alt="">
                                </div>



                                <div id="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                        height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                        xml:space="preserve">
                                        <defs>
                                            <path id="circlePath"
                                                d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="100" r="75" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#3b3f82">
                                                <textPath xlink:href="#circlePath">BTR GOVT. of Assam . Skill, Employment
                                                </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                    <div class="bord">
                                        <div class="cont">
                                            <h3 class="fz-70 font-numb">
                                                <img src="assets/img/about/goi.jpg" style="border-radius: 50%;" alt=""
                                                    height="3rem" width="7rem"
                                                    style="filter: brightness(5px); position: relative; z-index: -10;">
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5 valign">
                            <div class="cont md-mb50">


                                <span class="sub-title mt-60">
                                   title for Background
                                </span>
                                <h4 class="mb-20 fz-45 fw-700">Our Background</h4>
                                    <span class="sub-title">description for Background</span>
                            </div>
                        </div>

                    </div>
                <?php } ?>    
            </div>



        </section>

        <!-- ==================== End About ==================== -->



        <!-- ==================== End Call To Action ==================== -->


        <!-- ==================== imgae auto scroll start ==================== -->
        <?php include "include/image-auto-scroll.php" ?>
        <!-- ==================== imgae auto scroll end==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include "include/footer.php" ?>
        <!-- ==================== End Footer ==================== -->



    </main>

</body>


</html>