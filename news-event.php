<?php include "include/head.php" ?>

 <!-- pagintion style  -->
<link rel="stylesheet" href="assets/css/paginationStyle.css">
 <!-- pagintion style  -->


</head>

<body class="cr-agency">

    <?php
       include 'classes/Crud.php';
       $crud=new Crud();
       $newsEvents=$crud->Read("events","1 order by `id` desc");
    ?>

    <!-- ==================== Start progress-scroll-button ==================== -->

    <?php include'include/progressBar.php'; ?>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <?php include "include/navbar.php"  ?>

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
            <h1 class="text-center">News & Events</h1>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->   

    <main class="position-re">

        <!-- <div style="position: absolute; height: 100%; width: 100%; z-index: -210;">
            <img src="assets/img/about/gr-ar.jpeg" style="opacity: 0.4; object-fit: contain; border: 2px solid red;" alt="" >
        </div> -->


          <!-- ==================== News Ticker start ==================== -->
          <?php include "include/news-ticker.php" ?>
          <!-- ==================== New Ticker End ==================== -->
        


        <!-- ==================== Start Events ==================== -->

        <style>
            .item{
                box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            }
        </style>

        <section class="blog-grid" style="position: relative; overflow: hidden;padding: 30px;" >

        
            <div style="background-image: url('assets/img/about/box-background.jpg'); position: absolute; inset: 0; z-index: 1;"></div>    <!-- border -->       
        

            <div class="container" style="position: relative; z-index: 100;" id="itemList">     <!-- itemList id for pagination parent box it is necessary to do pagination -->
                <div class="row">

                    <?php
                       if($newsEvents){
                        foreach($newsEvents as $ne){
                    ?>
                    <div class="col-lg-4 paginationItems">
                        <div class="item clean mb-30">
                            <div class="img radius-5">
                                <img src="seed-admin/admin/<?= $ne['image']; ?>" alt="" style="height: 15rem;">
                            </div>
                            <div class="cont shadow p-3 mb-5 bg-white rounded p-3">
                                <div class="info" style="min-height:35px;">
                                    <div class="tags">
                                        <a href="event-details.php?id=<?= base64_encode($ne['id']); ?>" class="gat">details</a>
                                    </div>
                                    <div class="date">
                                        <span class="font-italic"> <i class="fa fa-calendar"></i><?= $ne['date_uploaded']; ?></span>
                                    </div>
                                    <div class="date px-2">
                                        <span><i class="fa fa-map-marker"><?= strip_tags($ne['address']); ?></i></span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h5><a href="event-details.php?id=<?= base64_encode($ne['id']); ?>">
                                          <?php
                                            $head=$ne['head'];
                                            if(strlen($head)>29){
                                                echo substr($head,0,29)." ...";
                                            }else{
                                                echo $head;
                                            }
                                          ?>
                                        </a>
                                    </h5>
                                </div>
                                <a href="event-details.php?id=<?= base64_encode($ne['id']); ?>" class="butn butn-inline butn-gr mt-20 opacity-9">
                                    <span class="text" style="text-align: justify;">

                                    <?php
                                        $desc=strip_tags($ne['description']);
                                        if(strlen($desc)>150){
                                            echo substr($desc,0,150)." ...";
                                        }else{
                                            echo $desc;
                                        }
                                    ?>
                                        
                                    </span>
                                    <span class="underline-gr aqua-bg"></span>
                                        <div class="flex justify-content-end">
                                            <a href="event-details.php?id=<?= base64_encode($ne['id']); ?>" class="butn butn-xsm bg-blue text-hover-light margin-rl-5">
                                                <div class="text">
                                                    <span>More Info...</span>
                                                    <span class="icon fas fa-arrow-right ml-10"></span>
                                                </div>
                                                <span class="bg-hover in bg-gray"></span>
                                            </a>
                                        </div>
                                  
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                       }else{
                        for($i=0;$i<5;$i++){
                    ?>
                    <div class="col-lg-4 ">
                        <div class="item clean mb-30">
                            <div class="img radius-5">
                                <img src="" alt="" style="height: 15rem;">
                            </div>
                            <div class="cont shadow p-3 mb-5 bg-white rounded p-3">
                                <div class="info">
                                    <div class="tags">
                                        <a href="#0" class="gat">Events</a>
                                    </div>
                                    <div class="date">
                                        <span class="font-italic"> <i class="fa fa-calendar"></i>date _ _ _</span>
                                    </div>
                                    <div class="date px-2">
                                        <span><i class="fa fa-map-marker"> address</i></span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h5><a href="#0">
                                           event title ..
                                        </a></h5>
                                </div>
                                <a href="#0" class="butn butn-inline butn-gr mt-20 opacity-9">
                                    <span class="text" style="text-align: justify;">
                                        description for this event ....                                        
                                    </span>
                                    <span class="underline-gr aqua-bg"></span>                       
                                </a>
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


         <!-- This is a necessary div for pagination  -->
          <!-- this is pagination buttons will genarate by javascript -->
          <?php
           if($newsEvents){
          ?>
           <div class="container text-center mt-0">
            <div id="pagination" class="pagination"></div>
          </div>
          <?php
           }
          ?>
         
          <!-- here need to link paginationStyle.css to design pagination buttons -->

            <!-- pagintion script start -->
            <script src="assets/js/paginationScript.js"></script>
            <!-- pagintion script end -->


        <!-- ==================== End Events ==================== -->      


        <!-- ==================== imgae auto scroll start ==================== -->
        <?php include "include/image-auto-scroll.php" ?>
        <!-- ==================== imgae auto scroll end==================== -->


        <!-- ==================== End Blog ==================== -->

        <?php include'include/footer.php'; ?>

    </main>

    <script>
        var newsScroll=document.querySelector('#news-animation');
        newsScroll.classList.remove('mt-60');
    </script>

</body>


</html>






