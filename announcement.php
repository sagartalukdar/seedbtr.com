<?php include "include/head.php" ?>

</head>

<body class="cr-agency">

    <?php
       include 'classes/Crud.php';
       $crud=new Crud();
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
            <h1 class="text-center">Announcement</h1>
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
        window.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;
    
            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('assets/img/about/announcement.jpeg')";
            } else {
                header.style.backgroundImage = "url('assets/img/about/announcement.jpeg')";
            }
        });
    
        window.addEventListener('resize', function() {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;
    
            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('assets/img/about/announcement.jpeg')";
            } else {
                header.style.backgroundImage = "url('assets/img/about/announcement.jpeg')";
            }
        });
    </script>
    
    
    <!-- ==================== End about Slider ==================== -->

    <main class="main-content">
    
        <div class="simple-head text-center mb-30 mt-30">
           
            <h4>Notice Board</h4>
            <h6>Home | Announcement</h6>
        </div>
       
        <style>
            body.cr-agency .bg-gray {
            background: white;
}
        </style>

     <!-- ==================== imgae auto scroll start ==================== -->
     <?php include "include/verticle-newsScroll.php" ?>
    <!-- ==================== imgae auto scroll end==================== -->


       


     <!-- ==================== imgae auto scroll start ==================== -->
     <?php include "include/image-auto-scroll.php" ?>
    <!-- ==================== imgae auto scroll end==================== -->



        <!-- ==================== Start Footer ==================== -->

        <?php include "include/footer.php" ?>
        <!-- ==================== End Footer ==================== -->



    </main>

    





