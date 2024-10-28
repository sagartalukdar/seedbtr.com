<?php include'include/head.php'; ?>

</head>

<body class="cr-agency">

    <?php include'classes/Crud.php'; 
      $crud=new Crud();
      $bodoland_seed_mission=$crud->Read("about_bodolandseed","1 order by `id` desc");
      $seedActivity=$crud->Read("seedactivity","1 order by `id` desc");
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
            <h1 class="text-center">Bodoland Seed Mission</h1>
        </div>
    </header>

    <style>
        .pg-header-sipm {
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.7;
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
                header.style.backgroundImage = "url('assets/img/bodoland-gov/bodolandassembly.jpg')";
            } else {
                header.style.backgroundImage = "url('assets/img/bodoland-gov/bodolandassembly.jpg')";
            }
        });

        window.addEventListener('resize', function () {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;

            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('assets/img/bodoland-gov/bodolandassembly.jpg')";
            } else {
                header.style.backgroundImage = "url('assets/img/bodoland-gov/bodolandassembly.jpg')";
            }
        });  
    </script>


    <!-- ==================== End about Slider ==================== -->

    <main class="main-content">

        <!-- ==================== Start Sec-half ==================== -->

        <div class="container mt-50">
            <?php
                if($bodoland_seed_mission){
                $head=$bodoland_seed_mission[0]['head'];
                $title=$bodoland_seed_mission[0]['title'];
                $description=strip_tags($bodoland_seed_mission[0]['description']);
                $image=$bodoland_seed_mission[0]['image'];               
            ?>
            <div class="row">
                <div class="col-lg-6 offset-lg-1 box-vw" style="background-image: url('');">
                    <div class="" style=" width: 100%; height: 100%;">
                        <div class="" style=" width: 100%; height: 100%;">
                            <img class="bsmImg"
                                src="seed-admin/admin/<?= $image ?>"
                                style="width: 100%; height: 100%;border-radius: 13px;" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 valign">
                    <div class="cont md-mb50">

                        <span class="sub-title mt-60">
                           <?= $head; ?>
                        </span>
                        <h4 class="mb-20 fz-45 fw-700"><?= $title; ?></p>
                            <span class="sub-title" style="text-align:justify;"> 
                                <?= $description; ?>
                            </span>
                    </div>
                </div>

            </div>
            <?php }else{ ?>
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 box-vw" style="background-image: url('');">
                        <div class="" style=" width: 100%; height: 100%;">

                            <div class="" style=" width: 100%; height: 100%;">
                                <img class="bsmImg"
                                    src=""
                                    style="width: 100%; height: 100%;border-radius: 13px;" alt="">
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-5 valign">
                        <div class="cont md-mb50">

                            <span class="sub-title mt-60">
                               title for bodoland seed mission
                            </span>
                            <h4 class="mb-20 fz-45 fw-700">About Bodoland SEED Mission</p>
                                <span class="sub-title" style="text-align:left;"> 
                                   texts about bodoland seed mission.                                 
                                </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- ==================== End Sec-half ==================== -->


        <!-- ==================== Start Blog ==================== -->

        <section class="blog-grid mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="simple-head text-center mb-80">
                            <h6>Latest organizations</h6>
                            <h4>SEED Activites Highlights</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                       if($seedActivity){
                        foreach($seedActivity as $SA){
                    ?>
                    <div class="col-lg-4 pb-20">
                        <div class="item box-shadow">
                            <div class="img">
                                <img src="seed-admin/admin/<?= $SA['image']; ?>"
                                    style="height: 14rem; width: 100%;" alt="">

                                <div class="tags bg-danger text-white">
                                    <a href="seed-activity.php?id=<?= base64_encode($SA['id']); ?>">details</a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <div class="author">
                                        <span>SEED UPDATES</span>
                                    </div>
                                    <div class="date opacity-7">
                                        <span><?= $SA['date_uploaded']; ?></span>
                                    </div>
                                </div>
                                <div class="title"  style="min-height: 60px;">
                                    <h5><a href="seed-activity.php?id=<?= base64_encode($SA['id']); ?>">
                                            <?php
                                              $head=$SA['head'];
                                              if(strlen($head)>50){
                                                echo substr($head,0,50). "...";
                                              }else echo $head;
                                            ?>
                                        </a></h5>
                                </div>
                                <a href="seed-activity.php?id=<?= base64_encode($SA['id']); ?>" class="butn butn-inline butn-gr mt-20 opacity-9">
                                    <span class="text" style="text-align: justify;">

                                        <?php
                                         $desc = strip_tags($SA['description']);
                                        if(strlen($desc)<=150){
                                            echo $desc;
                                        }else{
                                            echo substr($desc,0,150)." ....";
                                        }
                                        ?>
                                    </span>
                                    <span class="underline-gr aqua-bg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                       }else{
                        for($i=0;$i<3;$i++){
                    ?>        
                    <div class="col-lg-4 mb-50">
                        <div class="item box-shadow">
                            <div class="img">
                                <img src=""
                                    style="height: 14rem; width: 100%;" alt="">

                                <div class="tags bg-danger text-white">
                                    <a href="javascript:void()">Updates</a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <div class="author">
                                        <span>SEED UPDATES</span>
                                    </div>
                                    <div class="date opacity-7">
                                        <span> date _ _ _</span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h5><a href="javascript:void()">
                                           Activity title
                                        </a></h5>
                                </div>
                                <a href="javascript:void()" class="butn butn-inline butn-gr mt-20 opacity-9">
                                    <span class="text" style="text-align: justify;">
                                         short description about this activity ...
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

        <!-- ==================== End Blog ==================== -->

        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->



    </main>

</body>


</html>