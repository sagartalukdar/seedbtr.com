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
            $scheme=$crud->Read("schemes","`id`='$id'");
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


if($scheme){
    $image=$scheme[0]['image'];
    $head=$scheme[0]['head'];
    $description=strip_tags($scheme[0]['description']);
    $date=$scheme[0]['date_uploaded'];
}
?>

<?php include'include/head.php'; ?>

<script>
    function changeImgTextDir(){
        const windowWidth=window.innerWidth;
        const col5=document.querySelector(".it-col5");
        const col7=document.querySelector(".it-col7");
        if(windowWidth<700){
            col5.classList.remove('col-5');
            col7.classList.remove('col-7');
        }else{
            if(!col5.classList.contains('col-5')){
                col5.classList.add('col-5');
            }
            if(!col7.classList.contains('col-7')){
                col7.classList.add('col-7');
            }                
        }      
    }
    window.onload = changeImgTextDir;
    window.onresize = changeImgTextDir;         
</script>

</head>

<body class="cr-agency">



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
            <h1 class="text-center">Schemes Details</h1>
        </div>
    </header>

    <!-- ==================== End about Slider ==================== -->

    <main class="main-content">

        <!-- ==================== Start Sec-half ==================== -->

        <div class="container pb-10 mt-20">
            <div class="">
                <h6 class="mb-20 fz-20 fw-500 headTitle" id="cardHeadTitle" style="width: 100%;">
                    <?php
                        if($scheme && $head){
                        echo $head;
                        }else {
                        echo "Scheme details title";
                        }
                    ?>
                </h6>
            </div>
            <div class="row img-text pb-30">
                
                <div class="col-5 it-col5">                   
                    
                    <div>
                        <?php
                            if($scheme && $image){
                        ?>
                        <div>
                            <img class=""
                                style="border-radius: 3%;height: 100%;width: 100%;"
                                src="seed-admin/admin/<?= $image; ?>"
                                alt=""
                            >
                        </div>
                        <?php
                            }else {
                        ?>         
                            <div>
                                <img class=""
                                    style="width: 100%;height: 100%;padding: 6rem; border: 1px solid rgb(180, 180, 253); border-radius: 20%; box-shadow: 0px 0px 12px rgb(191, 191, 236);"
                                    src=""
                                    alt="">
                            </div>
                        <?php        
                            }
                        ?>
                    </div>                 
                    
                </div>

                <div class="col-7 it-col7">
                    <div>
                        <p style="text-align: justify;">
                            <?php
                                if($scheme && $description){
                                    echo $description;
                                }else {
                                    echo "<h5>description ......</h5>";
                                }
                            ?>
                        </p>    
                        <p style="position: absolute;right: 7rem;">
                        Date :- 
                            <?php
                                if($scheme && $date){
                                    echo $date;
                                }else {
                                    echo "<p style='position: absolute;right: 7rem;'> Program Date :_ _ _</p>";
                                }
                            ?>
                        </p>
                    </div>                        
                </div>

            </div>

            <style>
                @media screen and (max-width:700px) {
                    .img-text{
                        display: flex;
                        flex-direction: column-reverse;
                        align-items: center;
                        text-align: justify;
                        gap: 40px;
                        
                    }                     
                }               
            </style>
        </div>

        <!-- ==================== End Sec-half ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->



    </main>



</body>


</html>