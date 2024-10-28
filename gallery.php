<?php include'include/head.php'; ?>


 <!-- pagintion style  -->
 <link rel="stylesheet" href="assets/css/paginationStyle.css">
 <!-- pagintion style  --> 

</head>

<body class="cr-agency">

    <?php
      include 'classes/Crud.php';
      $crud=new Crud();
      $gallery=$crud->Read("photos","1 order by `id` desc");
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
            <h1 class="text-center">Gallery</h1>
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
            color: #fff;
        }
    </style>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('.pg-header-sipm');
            const screenWidth = window.innerWidth;

            if (screenWidth <= 900) {
                header.style.backgroundImage = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN0IjGnXMIR5wcdkX1_xAC29_TtechfZ5GtQ&s')";
            } else {
                header.style.backgroundImage = "url('https://images.pexels.com/photos/19987317/pexels-photo-19987317/free-photo-of-ceiling-of-the-library-at-the-university-of-cambridge.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load')";
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

    <main class="main-content" >

        <!-- ==================== Start Sec-half ==================== -->

        <!-- gallery css -->

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 16px;
            }

            #gallery {
                max-width: 100%;
                padding: 48px 0;
            }

            #gallery h3 {
                font-size: 36px;
                font-weight: 600;
                text-align: center;
                margin-bottom: 36px;
                opacity: 0.6;
            }

            #gallery .images {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 16px;
            }

            #gallery .images .img {
                border: 6px solid #e6e5e5;
                position: relative;
                overflow: hidden;
            }

            #gallery .images .img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: blur(0);
                transition: .3s ease;
            }

            #gallery .images .img:hover img {
                filter: blur(2px);
                cursor: zoom-in;
            }

            #gallery .images .img p {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #fff;
                padding: 16px 0;
                text-align: center;
                transform: translateY(150%);
                transition: .3s ease;
            }

            #gallery .images .img:hover p {
                transform: translateY(0);
            }
        </style>

        <section id="gallery">
            <div class="container">
                <h3>Seed Gallery</h3>
                <div class="images" id="itemList"> 

                    <?php
                       if($gallery){
                        foreach($gallery as $img){
                    ?>
                    <div class="img item paginationItems">
                        <img src="seed-admin/admin/<?= $img['image']; ?>"
                            alt="photo">
                        <p>
                            <?php
                             $desc=strip_tags($img['description']);
                             if(strlen($desc)>25){
                                echo substr($desc,0,25). "...";
                             }else{
                                echo $desc;
                             }
                            ?>
                        </p>
                    </div>
                    <?php
                        }
                       }else{
                        for($i=0;$i<5;$i++){
                    ?>
                    <div class="img item" style="height: 180px;">
                        <img src=""
                            alt="photo"                           
                        >
                        <p>
                            Image Title
                        </p>
                    </div>
                    <?php
                        }
                       }
                    ?>

                </div>
            </div>

            <div class="galleryModal">
                <span class="closeBtn"><i class="fas fa-times"></i></span>
                <div class="containerBox">
                    <span class="left"><i class="fas fa-angle-left"></i></span>
                    <div class="img-modal">
                        <img src="" alt="photo">
                    </div>
                    <span class="right"><i class="fas fa-angle-right"></i></span>
                </div>

            </div>

        </section>


          <!-- This is a necessary div for pagination  -->
          <!-- this is pagination buttons will genarate by javascript -->
          <?php
           if($gallery){
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





        <!-- gallery modal css -->
        <style>
            .galleryModal {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, .5);
                align-items: center;
                display: none;
                z-index: 1000;
            }

            .galleryModal.show {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .galleryModal .containerBox {
                display: flex;
                align-items: center;
            }

            .galleryModal .img-modal {
                width: 676px;
                ;
                height: 460px;
                margin: 0 24px;
            }

            .galleryModal .img-modal img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }

            .galleryModal span {
                cursor: pointer;
                font-size: 24px;
                color: #fff;
            }

            .galleryModal .closeBtn {
                position: absolute;
                top: 100px;
                right: 64px;
                font-size: 36px;
                color: #fff;
            }

            @media screen and (max-width: 768px) {
                #gallery .images {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 16px;
                }

                .galleryModal .img-modal {
                    width: 476px;
                    ;
                    height: 360px;
                    margin: 0 24px;
                }
            }

            @media screen and (max-width: 576px) {
                #gallery .images {
                    display: grid;
                    grid-template-columns: repeat(1, 1fr);
                    gap: 16px;
                }

                .galleryModal .containerBox {
                    position: relative;
                }

                .galleryModal span {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                }

                .galleryModal span.left {
                    left: 24px;
                    background: rgb(163, 154, 154);
                    padding: 5px 6px;
                    border-radius: 45%;
                }

                .galleryModal span.right {
                    right: 24px;
                    background: rgb(163, 154, 154);
                    padding: 5px 6px;
                    border-radius: 45%;
                }

                .galleryModal .img-modal {
                    width: 356px;
                    ;
                    height: 260px;
                    margin: 0 24px;
                }

            }

            @media screen and (max-width: 350px) {
                .galleryModal .img-modal {
                    width: 256px;
                    ;
                    height: 220px;
                    margin: 0 24px;
                }
            }
        </style>
        <!-- ==================== End Sec-half ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->



    </main>

    <script>
        const left = document.querySelector('.galleryModal span.left');
        const right = document.querySelector('.galleryModal span.right');
        const modalImg = document.querySelector('.galleryModal .img-modal img');
        const modal = document.querySelector('.galleryModal');
        const close = document.querySelector('.closeBtn');

        const allImg = document.querySelectorAll('#gallery .images .img img');

        let iterator = 0;
        for (let i = 0; i < allImg.length; i++) {
            allImg[i].addEventListener('click', function () {
                const urlImg = this.getAttribute('src');
                // alert(urlImg);
                modal.classList.add('show');
                modalImg.setAttribute('src', urlImg);
                iterator = i;
            });

        }

        left.addEventListener('click', function () {
            iterator === 0 ? iterator = allImg.length - 1 : iterator -= 1;
            const urlImg = allImg[iterator].getAttribute('src');
            modalImg.setAttribute('src', urlImg);
        });
        right.addEventListener('click', function () {
            iterator === allImg.length - 1 ? iterator = 0 : iterator += 1;
            const urlImg = allImg[iterator].getAttribute('src');
            modalImg.setAttribute('src', urlImg);
        });

        close.addEventListener('click', function () {
            modal.classList.remove('show');
        });

    </script>

</body>


</html>