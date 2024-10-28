<?php include'include/head.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />



 <!-- pagintion style  -->
 <link rel="stylesheet" href="assets/css/paginationStyle.css">
 <!-- pagintion style  -->

 

</head>

<?php
   include 'classes/Crud.php';
   $crud=new Crud();
   $schemes=$crud->Read("schemes","1 order by `id` desc");
?>

<body class="index-bus1">


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
            <h1 class="text-center">Schemes</h1>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <main class="position-re">



        <!-- ==================== Start Services ==================== -->

        <section class="services">
            <div class="container mt-30">   
                <div class="row mb-15 " id="itemList">    
                    <?php
                       if($schemes){
                        foreach($schemes as $scheme){
                    ?>
                    <div class="col-lg-4 pb-20 paginationItems">
                        <a href="scheme-details.php?id=<?= base64_encode($scheme['id']); ?>">
                            <div class="item text-center bord no-bord bg-gray-light pt-15" style="border: 1px solid rgb(223, 220, 220) !important; border-radius: 12px;">
                                <div class="icon fz-60 mb-20 rest">
                                    <img src="seed-admin/admin/<?= $scheme['image']; ?>" style="height: 200px;width: 200px; border-radius: 6px;" alt="">
                                </div>
                                <h5 class="mb-20 fz-20 fw-500 px-5">
                                    <?php  
                                       $head=$scheme['head'];
                                       if(strlen($head)>20){
                                        echo substr($head,0,20). "...";
                                       }else{
                                        echo $head;
                                       }
                                    ?>
                                </h5>
                                <p class="px-5 pb-10">
                                    <?php  
                                       $description=strip_tags($scheme['description']);
                                       if(strlen($description)>50){
                                        echo substr($description,0,50). "...";
                                       }else{
                                        echo $description;
                                       }
                                    ?>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                       }else{
                        for($i=0;$i<5;$i++){
                    ?>
                    <div class="col-lg-4 pb-20">
                        <a href="scheme-details.php">
                            <div class="item text-center bord no-bord bg-gray-light pt-15" style="border: 1px solid rgb(223, 220, 220) !important; ">
                                <div class="icon fz-60 mb-20 rest">
                                    <img src="" style="height: 200px;width: 200px;border: 1px solid rgb(207, 192, 192);border-radius: 12px;" alt="">
                                </div>
                                <h5 class="mb-20 fz-20 fw-500 px-5">
                                   Scheme head title
                                </h5>
                                <p class="px-5 pb-10">
                                    Description about this scheme ...
                                </p>
                            </div>
                        </a>
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
           if($schemes){
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



        <!-- ==================== End Services ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->

    </main>

</body>


</html>