

<?php include "include/head.php" ?>

</head>

<body class="cr-agency">

    <?php
       include 'classes/Crud.php';
       $crud=new Crud();

       // Function to check if a string is a valid Base64 encoded string
        function is_base64($str) {
            // Check if the string is base64 encoded
            return (bool) preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $str);
        }

       if(isset($_GET['id'])){
        if(is_base64($_GET['id'])){
            $id=base64_decode($_GET['id']);
            if(is_numeric($id)){
                $event=$crud->Read("events","`id`=$id");
            }else{
                header("Location: error.php");
                exit;
            }
        }else{
            header("Location: error.php");
            exit;
        }
       }else{
        header("Location: error.php");
        exit;
       }

    ?>

    <!-- ==================== Start progress-scroll-button ==================== -->

    <?php include'include/progressBar.php'; ?>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <?php include"include/navbar.php"; ?>

    <!-- ==================== End Navbar ==================== -->
    <style>
        nav .navbar-nav .nav-item .nav-link, nav .social .rest li a{
            color: white;
        }
        /* nav .container .navbar-brand .logo{
            background-color: white;
        } */
       
    </style>



    <!-- ==================== Start sticky sidebar ==================== -->
    <?php include'include/contact.php'; ?>

    <?php include'include/searchBar.php'; ?>

    <!-- ==================== End sticky sidebar ==================== -->


    <!-- ==================== Start Slider ==================== -->
    <?php 
        $otherSlider=$crud->Read("other_slider","1 order by `id` desc");
        if($otherSlider){
            $otherSliderImage=$otherSlider[0]['image'];
          }
    ?>
    <header class="bg-img parallaxie valign" data-background="seed-admin/admin/<?php
     if($otherSlider && $otherSliderImage){
        echo $otherSliderImage;
     }
    ?>"
        data-overlay-dark="5" style="height: 50vh;">
        <div class="container">
        <h1 class="fz-50 fw-600 text-center news-headline">NEWS / Event Details</h1>
        </div>
    </header>

         <style>
               @media only screen and (max-width: 800px) {
                    .news-headline{
                        font-size: large !important;
                    }
                }

         </style>
  
    <!-- ==================== End Slider ==================== -->      

    <main class="position-re">

        <!-- <div style="position: absolute; height: 100%; width: 100%; z-index: -210;">
            <img src="assets/img/about/gr-ar.jpeg" style="opacity: 0.4; object-fit: contain; border: 2px solid red;" alt="" >
        </div> -->


         <!-- ==================== News/press Release start ==================== -->
      
     <?php
        if($event){
            $eventImg=$event[0]['image'];
            $head=$event[0]['head'];
            $address=strip_tags($event[0]['address']);
            $desc=strip_tags($event[0]['description']);
            $date=$event[0]['date_uploaded'];        
     ?>
         
     <section class="blog pt-60" style="background-image: url('assets/img/about/event-details-square-background.avif');">
        <div class="container">

            <div class="row justify-content-center" >
                <div class="col-lg-9">
                   

                    <div class="item side-img box-shadow radius-15 mb-50">
                        <div class="row">
                        <div class="col-lg-12 rest">
                                <div class="img bg-img" data-background="seed-admin/admin/<?= $eventImg; ?>" style="min-height: 65vh;"></div>
                            </div>
                            <div class="col-lg-12 valign">
                                <div class="full-width">
                                    <div class="cont" style="padding: 33px;">

                                        <div class="info-top flex gap-3">
                                            <div>
                                                <div class="author flex">
                                                    <div class="flex-img">
                                                        <div class="author-img circle-60 mr-15">
                                                            <img src="assets/img/background/btr-circle-logo-rbg.png" alt=""
                                                            style="object-fit:cover; height: 100%; width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="flex-cont valign">
                                                        <div>
                                                            <h6 class="fz-16">SEED BTR</h6>
                                                            <span class="fz-12 mb-5 opacity-8">Development of skills </span>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-auto valign">
                                                <a href="#0">
                                                    <span class="gat">NEWS/EVENTS</span>
                                                </a>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="date text-u fz-13 fw-500 opacity-7 mb-10 mt-20">
                                            <span>Date : <?= $date; ?></span>
                                            <div class="date mt-3">
                                                <span>Location :- <i class="fa fa-map-marker"> <?= $address; ?> </i></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            
                                            <h5 class="fw-600 mb-10"><a href="#0"><?= $head; ?></a>
                                            </h5>
                                            <p style=" text-align: justify;"><?= $desc; ?></p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                  

                  
                </div>
            </div>
        </div>
    </section>

    <?php
        }else{
    ?>
         <section class="blog pt-60" style="background-image: url('assets/img/news-events/event-details-square-background.avif');">
        <div class="container">

            <div class="row justify-content-center" >
                <div class="col-lg-9">
                   

                    <div class="item side-img box-shadow radius-15 mb-50">
                        <div class="row">
                        <div class="col-lg-12 rest">
                                <div class="img bg-img" data-background="" style="min-height: 65vh;border: 1px solid black;"> Image </div>
                            </div>
                            <div class="col-lg-12 valign">
                                <div class="full-width">
                                    <div class="cont" style="padding: 33px;">

                                        <div class="info-top flex gap-3">
                                            <div>
                                                <div class="author flex">
                                                    <div class="flex-img">
                                                        <div class="author-img circle-60 mr-15">
                                                            <img src="assets/img/background/btr-circle-logo-rbg.png" alt=""
                                                            style="object-fit:cover; height: 100%; width: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="flex-cont valign">
                                                        <div>
                                                            <h6 class="fz-16">SEED BTR</h6>
                                                            <span class="fz-12 mb-5 opacity-8">Development of skills </span>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ml-auto valign">
                                                <a href="#0">
                                                    <span class="gat">NEWS/EVENTS</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="date text-u fz-13 fw-500 opacity-7 mb-10 mt-20">
                                            <span>Date : _ _ _</span>
                                            <div class="date mt-3">
                                                <span>Location :- <i class="fa fa-map-marker">address </i></span>
                                            </div>
                                        </div>
                                        <div class="title">
                                            
                                            <h5 class="fw-600 mb-10"><a href="#0">title of this event</a>
                                            </h5>
                                            <p style=" text-align: justify;">full description about this .</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                  

                  
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>

    <!-- ==================== News/press Release  end==================== -->
       
        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->

    </main>

</body>


</html>






