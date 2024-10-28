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
                $profile=$crud->Read("who","`id`=$id");
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
  
    if($profile){
        if(strtolower($profile[0]['designation'])=="cem"){
            $p="cem";                        
            $cem_image=$profile[0]['image']; 
            $cem_name=$profile[0]['name'];
            $cem_role=$profile[0]['designation'];
            $cem_description=strip_tags($profile[0]['description']);
          

        }else if(strtolower($profile[0]['designation'])=="em"){
            $p="em";
            $em_image=$profile[0]['image']; 
            $em_name=$profile[0]['name'];
            $em_role=$profile[0]['designation'];
            $em_description=strip_tags($profile[0]['description']);
          
        }
       
    }

?>


<?php
    $name="";
    $typeStr="";
    $role="";

    $facebook='';
    $twitwer='';
    $youtube='';
    $instagram='';

    if($p && $profile){
    if($p=="cem"){
        $name=$cem_name;
        $role=$cem_role;
        $typeStr=strip_tags($cem_description);

        $facebook='https://facebook.com/pramodboroofficial';
        $twitwer='https://twitter.com/PramodBoroBTR';
        $youtube='https://www.youtube.com/channel/UCsVyuFk-yxNsAsuHX-pIGkw';
        $instagram='https://instagram.com/pramodboroofficial/?hl=en';

    }else if($p=="em"){
        $name=$em_name;
        $role=$em_role;
        $typeStr=strip_tags($em_description);

        $facebook='https://www.facebook.com/iamwilsonhasda';
        $twitwer='https://x.com/iamwilsonhasda';
        $youtube='https://www.youtube.com/@wilsonhasda8616';
        $instagram='https://www.instagram.com/iamwilsonhasda/';
    }
    }
?>


<?php include'include/head.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

</head>

<body class="land-demo2">



    <!-- ==================== Start progress-scroll-button ==================== -->

    <?php include'include/progressBar.php'; ?>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <?php include"include/navbar.php"; ?>
    <style>
        .navbar{
            background-color:#c6c6ca;
        }
    </style>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start sticky sidebar ==================== -->

    <?php include'include/contact.php'; ?>

    <?php include'include/searchBar.php'; ?>


    <!-- ==================== End sticky sidebar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <style>
        .round {
            margin-top: 5rem;
            height: 30rem;
            width: 30rem;
            padding: 30px;
            border-radius: 50%;
            border: 3px solid rgb(230, 226, 219);
            cursor: none;
        }

        .round>img {
            display: flex;
            justify-content: center;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            cursor: none;
            border: 2px solid rgb(230, 226, 219);
        }

        @media screen and (max-width:1100px) {
            .round {
                height: 23rem;
                width: 21rem;
                padding: 25px;
            }

        }

        @media screen and (max-width:995px) {
            .row {
              display: flex !important;
             flex-wrap: wrap;
             flex-direction: column-reverse;
            }
            .data-Back{
                height: 100% !important;
                width: 100% !important;
                opacity: .2;
            }
            #aboutText{      
                font-size: x-large !important;    
                font-weight: 600 !important;
            }

        }

        @media screen and (max-width:650px) {
            .round {
                height: 20rem;
                width: 19rem;
            }

        }

        @media screen and (max-width:550px) {
            .round {
                height: 16rem;
                width: 15rem;
                padding: 20px;
            }
            .data-Back{               
                opacity: .1;
            }

        }

        @media screen and (max-width: 480px) {
        .swiper-slide, .bg-img {
            height: 0;
        }
        .midHide{
            display: none;
        }
        .prof{
            /* height: 300px; */
            margin-bottom: 250px;
            margin-top: 0;
            margin-left: 50px;
            padding: 0;
        }
    
        }

       
    </style>

    <header class="full-height rshp valign">
        <div class="front bg-img data-Back" data-background="seed-admin/admin/images/static/bihuErase3.jpg" style="display: block;"></div>
 
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-5 valign" style="padding: 18px;">
                    <div class="cont">

                        <a href=<?= $facebook; ?> target='_blank'>
                        <div class="sub-head radius mb-10">
                            <span> <i class="fa-brands fa-facebook"></i></span>
                        </div>
                        </a>

                        <a href=<?= $twitwer; ?> target='_blank'>
                        <div class="sub-head radius mb-10">
                            <span><i class="fa-brands fa-twitter"></i></span>
                        </div>
                        </a>

                        <a href=<?= $youtube; ?> target='_blank'>
                        <div class="sub-head radius mb-10">
                            <span><i class="fa-brands fa-youtube"></i></span>
                        </div>
                        </a>

                        <a href=<?= $instagram; ?> target='_blank'>
                        <div class="sub-head radius mb-10">
                        <span><i class="fa-brands fa-instagram"></i></span>
                        </div>
                        </a>

                        <div>
                        <h1 class="fw-800 fz-45" id="element"></h1>
                        <div>
                        <div>
                          <p id="aboutText" style="text-align: justify;"><?= $typeStr ?></p>
                        </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-2 midHide"></div>
                <?php 
                   if($profile){
                    if($p=='cem'){
                ?>
                        <div class="col-5 prof" style="padding: 0;">
                            <div class=" bg-img profImg" style="padding-left: 0px !important;padding-right: 0px !important;">
                                <div class="round">
                                    <img src="seed-admin/admin/<?php echo $cem_image; ?>"
                                        alt="">
                                </div>
                            </div>
                        </div>
                <?php                    
                    }else if($p=='em'){
                ?>
                
                <div class="col-5 prof" style="padding: 0;">
                    <div class=" bg-img profImg">
                        <div class="round">
                            <img src="seed-admin/admin/<?php echo $em_image; ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                
                <?php
                    }
                   }else{
                ?>
                    <div class="col-5 prof" style="padding: 0;">
                        <div class=" bg-img profImg">
                            <div class="round">
                                <img src="https://img.freepik.com/free-vector/user-circles-set_78370-4704.jpg?w=740&t=st=1714470724~exp=1714471324~hmac=c7a0bbb3cbe0678e7c1788dc6a2a1ac8dc9e26da24dbe74f27dec5f4331a750a"
                                    alt="">
                            </div>
                        </div>
                    </div>
                <?php
                   }
                ?>
               
            </div>
        </div>
        <div id="particles-js"></div>
    </header>
 

    <!-- ==================== End Slider ==================== -->
      

    <script>
        var typed = new Typed('#element', {
            strings: ['<i>Hon&apos;ble <?php echo htmlentities($role); ?>, </i>BTR  <?php echo htmlentities($name); ?>'],
            typeSpeed: 50,
        });

    </script>   

    <?php include'include/footer.php'; ?>

</body>


</html>