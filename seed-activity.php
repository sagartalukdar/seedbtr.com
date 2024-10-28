<?php include'include/head.php'; ?>

</head>

<body class="index-bus1">

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
                    $seedActivity=$crud->Read("seedactivity","`id`=$id");
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
       $seedActivityAll=$crud->Read("seedactivity","1 order by `id` desc");
       
    ?>

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



    <main class="position-re pt-100">


        <!-- ==================== Start Blog ==================== -->

        <?php
           if($seedActivity){
            $image=$seedActivity[0]['image'];
            $head=$seedActivity[0]['head'];
            $description=strip_tags($seedActivity[0]['description']);
            $date=$seedActivity[0]['date_uploaded'];
            $place=$seedActivity[0]['place'];
           }
        ?>

        <section class="mt-10">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="main-post md-mb50">
                            <div class="item pb-60">
                                <div class="cont">
                                    <div class="title">
                                        <h3 class="fw-800">
                                            <?php if($seedActivity && $head){
                                                echo $head;
                                            }else{
                                                echo "seed activity head title ..";
                                            }
                                            ?>
                                        </h3>
                                    </div>
                                    <div class="info flex mt-15">
                                        <div class="author mr-30 opacity-8 fz-14">
                                            <span>
                                                <?php if($seedActivity && $place){
                                                    echo $place;
                                                }else{
                                                    echo "seed activity location ";
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="tags mr-30 opacity-8 fz-14">
                                            <a href="#0" class="gat">Bodoland SEED Mission</a>
                                        </div>
                                        <div class="date fz-14">
                                            <span>
                                            <?php if($seedActivity && $date){
                                                echo $date;
                                            }else{
                                                echo "date _ _ _";
                                            }
                                            ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                   if($seedActivity && $image){
                                ?>    
                                    <div class="main-img mt-40 mb-40 radius-5">
                                    <img src="seed-admin/admin/<?= $image ?>" alt="" style="width: 100%;height: 25rem;"> 
                                    </div>                   
                                <?php
                                   }else{
                                ?>    
                                    <div class="main-img mt-40 mb-40 radius-5">
                                    <img src="" alt="" style="height: 250px;width: 100%;border: 1px solid gray;border-radius: 15px;box-shadow: 0px 0px 13px;">
                                    </div>
                                <?php    
                                   }
                                ?>
                              
                                <div class="text mb-20">
                                    <p>
                                        <?php
                                           if($seedActivity && $description){
                                            echo $description;
                                           }else {
                                            echo "<h5>description for this seed activity .....</h5>";
                                           }
                                        ?>
                                    </p>
                                </div>
                                
                              
                            </div>
                                                        
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="side-bar">
                            
                           
                            <div class="widget last-post-thum">
                                <h6 class="title-widget">Related Posts</h6>
                                <?php
                                   if($seedActivityAll){
                                    foreach($seedActivityAll as $sa){
                                ?>
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="seed-activity.php?id=<?= base64_encode($sa['id']); ?>"><img src="seed-admin/admin/<?= $sa['image'] ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6>
                                            <a href="seed-activity.php?id=<?= base64_encode($sa['id']); ?>">
                                              <?php
                                              $head=$sa['head'];
                                              if(strlen($head)>50){
                                                echo substr($head,0,50)." ...";
                                              }else{
                                                echo $head;
                                              }
                                              ?>                                           
                                            </a>
                                        </h6>
                                        <span><a href="seed-activity.php?id=<?= base64_encode($sa['id']); ?>"><?= $sa['date_uploaded']; ?></a></span>
                                    </div>
                                </div>
                                <?php
                                    }
                                   }else{
                                    for($i=0;$i<3;$i++){
                                ?>
                                <div class="item">
                                    <div class="valign">
                                        <div class="img">
                                            <a href="javascript:void();"><img src="" alt="" style="border: 1px solid rgb(236, 226, 226);"></a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h6><a href="javascript:void();">head title  ...</a></h6>
                                        <span><a href="javascript:void();">date _ _ _ </a></span>
                                    </div>
                                </div>
                                <?php
                                    }
                                   }
                                ?>
                        
                            </div>                            
                          
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- ==================== End Blog ==================== -->



        <?php include'include/footer.php'; ?>

    </main>

</body>


</html>