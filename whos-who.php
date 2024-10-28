<?php include 'include/head.php'; ?>

</head>

<body class="index-corporate">


    <?php
       include 'classes/Crud.php';
       $crud=new Crud();
       $who = $crud->Read("who", "1 GROUP BY `designation` ORDER BY `id` ASC");
    //   $who =$crud->Read("about_compet","1");
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
    <?php 
        $otherSlider=$crud->Read("other_slider","1 order by `id` desc");
        $otherSliderImage=$otherSlider[0]['image'];
    ?>
    <header class="bg-img parallaxie valign" data-background="seed-admin/admin/<?php
     if($otherSlider && $otherSliderImage){
        echo $otherSliderImage;
     }
    ?>"
        data-overlay-dark="3" style="height: 50vh;">
        <div class="container">
            <h1 class="text-center mt-50">Who's Who ?</h1>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Services ==================== -->

    <div class="row">
        <section class="services pb-15" data-background="seed-admin/admin/images/static/bodoArnoi.jpg" data-overlay-dark="6"
            style="background-repeat: repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="round-head text-center mb-30">
                            <h6 class="ls2 text-u fz-12 mb-15"><span></span></h6>
                            <h4 class="fw-700">About SEED Honourables</h4>
                        </div>
                    </div>
                </div>
                <div class="row mb-80" style="display: flex;justify-content: space-around;">
                    <?php
                    
                    if($who){
                        foreach($who as $hon){
                    ?>
                    <div class="col-lg-4">
                        <div class="item padding-rl-50">
                            <div class="profImg">
                                <div style=" border: 5px solid #f3eeee;border-radius: 50%;padding: 20px; width: 13rem;">
                                    <img src="seed-admin/admin/<?= $hon['image']; ?>"
                                        style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                        alt="">
                                </div>
                              
                                <div class="profText">
                                    <h4 class="fw-700 mb-10"><?= $hon['name']; ?></h4>
                                    <h6 class="mb-5">Hon'ble <?=$hon['designation']; ?>, BTR</h6>                                    
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
                            <div class="item padding-rl-50">
                                <div class="profImg">
                                    <div style="border: 5px solid #f3eeee;border-radius: 50%;padding: 20px; width: 13rem;">
                                        <img src=""
                                            style="background-position: cover;background-repeat: no-repeat; border-radius: 50%; width: 10rem; height: 10rem;"
                                            alt="">
                                    </div>
                                
                                    <div class="profText">
                                        <h4 class="fw-700 mb-10">Name of the person</h4>
                                        <h6 class="mb-5">Hon'ble _ _ _ , BTR</h6>
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

        <!-- ==================== End Services ==================== -->



        <?php include'include/footer.php'; ?>

</body>


</html>