<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

    .headimg {
        width: 229px;
        height: 183px;
        margin: 0px auto;
        overflow: hidden;
    }

    .wrap {
        /* height: auto; */
        /* width: 229px; */
        /* max-width: 229px; */
        overflow: hidden;
        box-sizing: border-box;
        padding: 10px;
    }

    .newsTickerCon {
        font-family: 'Open Sans';
        font-weight: 400;
        width: 100%;
        height: 400px;
        overflow: hidden;
        padding: 0;
        margin: 0;
    }

    .headline {
        color: #000;
        text-align: left;
        font-size: 13px;
        font-weight: bold;
        min-height: 58px;
    }

    .newsTickerCon p {
        text-align: left;
        color: #000;
        overflow: hidden;
        text-overflow: _ellipsis;
        /*white-space: nowrap;*/
        line-height: 20.8px;
        margin-top: 5px;
    }

    .newsTickerCon ul {
        list-style: none;
        position: relative;
        padding: 0px;
        margin: 0px
    }

    .newsTickerCon li {
        margin-bottom: 24px;
        background-color: #EEEFF1;
        text-align: center;
        border-bottom: 0px solid #a1a9a5;
        font-size: 13px;
        padding: 6px;
    }

    .newsTickerCon a {
        color: #ab192d;
    }

    li img {
        margin-right: 10px;
        float: left;
    }

    .three-scroll{
        position: relative;
        padding: 70px;
        
    }

    @media only screen and (max-width: 500px) {
    .three-scroll{
        
        padding: 60px;
        
    }

    /* @media screen and (min-width: 720px)  and (max-width: 1010px) {
     .useful{
        width: 40rem;
        background-color: #ab192d;
     }
   } */
}

    
.borders{
    position: absolute;
    /* background-image: url('assets/img/about/assam-mark.PNG'); */
    /* height: 50px;
    width: 100%; */
    z-index: 100;
    /* background-repeat: repeat-x; */
    opacity: 0.7
}
  
.border1 {
    background-image: url('assets/img/about/assam-mark-top.png');
    background-repeat: repeat-x;
    background-position: top;
}

.border2 {
    background-image: url('assets/img/about/assam-mark.PNG');
    background-repeat: repeat-x;
    background-position: bottom;
}

.border3 {
    background-image: url('assets/img/about/assam-mark-vertical.png');
    background-repeat: repeat-y;
}

.border4 {
    background-image: url('assets/img/about/assam-mark-vertical2.png');
    background-repeat: repeat-y;
    background-position: right;
}



.border1 {
    width: 100%;
    height: 50px;
    top: 0;
    left: 0; 
   
}
  
.border2 {
    height: 50px;
   bottom: 0;
   left: 0;
   right: 0;
}

.border3 {
    height: 100%;
    width: 60px;
    top: 0;
   left: 0;
}

.border4 {
    height: 100%;
    width: 60px;
    top: 0;
    right: 0;
}







</style>

<?php
   $reports_documents=$crud->Read("reports_documents","1 order by `id` desc");
   $press=$crud->Read("press","1 order by `id` desc");
?>

<section class="intro-out-box border border-3  mt-30 bg-gray three-scroll">

     <div>
        <div class="borders border1"></div>
        <div class="borders border2"></div>
        <div class="borders border3"></div>
        <div class="borders border4"></div>
     </div>

    <div class="">
        <div class="d-flex justify-content-evenly flex-wrap" >
            <div class=" border p-3 mt-30   rounded" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; height: 24rem; width: 21rem;">  <!-- border -->
                <div class="flex flex-column   w-100 h-100">  <!-- border -->
                    <div class=" flex justify-content-between " style="width: 100%; height: 13%;">  <!-- border -->
                        <h6 style=" font-family: 'Roboto'; font-weight: bold; color: rgb(44, 141, 221);">Reports & Documents</h6>
                        <div class="" style="height: 100%; width: 60%;">  <!-- border -->
                            <img src="assets/img/about/seed4.png" style="object-fit: cover; " alt="">
                       </div>
                    </div>
                    <hr>

                    <div class="wrap " style="width: 100%; height: 87%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">  <!-- border -->
                        <div class="" style="height: 20%; width: 100%; background-image: url('assets/img/about/di.png'); background-repeat: no-repeat; background-size: contain;
                        background-position: center;">   <!-- border -->
                            <!-- <img src="assets/img/about/btr-logo-rounded.jpeg" style="object-fit: cover;" alt=""> -->
                       </div>
                        <div class="newsTickerCon">
                            <ul class="newsTicker">
                                <!--********************************************************************************************-->
                                <?php
                                    if($reports_documents){
                                        foreach($reports_documents as $rd){
                                ?>
                                <li>
                                    <div class="" style="text-align: justify;">
                                    <?php
                                       $news=strip_tags($rd['news'],'<a></a>');
                                    ?>
                                     <?= "<h7 style='color:green;'>". $rd['date_uploaded']." :</h7>". $news; ?>
                                    </div>
                                    <span><a href="seed-admin/admin/<?= $rd['pdf']; ?>"><img src="seed-admin/admin/images/static/pdfcover.png" alt="" style="height: 30px;width: 30px;"></a></span>
                                </li>
                                <?php
                                        }
                                    }else{
                                        for($i=0;$i<5;$i++){
                                ?>
                                <li>
                                    <div class="">announcement for reports and documents ..</div>
                                </li>
                                <?php
                                        }
                                    }
                                ?>
                               
                            </ul>
                        </div>
                    </div>

                </div>

            </div>


            <div class="  p-3 mt-30 border  rounded" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; height: 24rem; width: 21rem">  <!-- border -->
                <div class="flex flex-column   w-100 h-100">  <!-- border -->
                    <div class=" flex justify-content-between " style="width: 100%; height: 13%;">  <!-- border -->
                        <h6 style=" font-family: 'Roboto'; font-weight: bold; color: rgb(44, 141, 221);">Press Release</h6>
                        <div class="" style="height: 100%; width: 60%;">  <!-- border -->
                            <img src="assets/img/about/seed4.png" style="object-fit: cover; " alt="">
                       </div>
                    </div>
                    <hr>

                    <div class="wrap " style="width: 100%; height: 87%; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">  <!-- border -->
                        <div class="" style="height: 20%; width: 100%; background-image: url('assets/img/about/skill-india.png'); background-repeat: no-repeat; background-size: contain;
                        background-position: center;">   <!-- border -->
                            <!-- <img src="assets/img/about/btr-logo-rounded.jpeg" style="object-fit: cover;" alt=""> -->
                       </div>
                        <div class="newsTickerCon">
                            <ul class="newsTicker2">
                                <!--********************************************************************************************-->
                                <?php
                                   if($press){
                                    foreach($press as $pr){
                                ?>


                                <li>
                                    <h6 class="text-primary text-center"><?= $pr['head']; ?></h6>
                                    <img src="seed-admin/admin/<?= $pr['image']; ?>" style="width:100%;height:160px;"/>
                                    <div  class="headline">
                                    <?php
                                      $news=strip_tags($pr['description'],'<a></a>');
                                      $address=strip_tags($pr['address']);
                                    ?>
                                    <p style="text-align:left;" ><?= "<h6 style='color:green;'>Date :- ". $pr['date_uploaded']." , Address :- ".$address." </h6>"?>
                                     
                                    </p>
                                    <p style="text-align:justify;" ><?= $news;  ?></p>
                                    
                                    </div>                                  
                                </li>

                                <?php
                                    }
                                   }else{
                                    for($i=0;$i<5;$i++){
                                ?>
                                <li>
                                    <img src="" alt="news"/>
                                    <div class="headline">Press NEWS Here....</div>                                 
                                </li>
                                <?php
                                    }
                                   }
                                ?>                           
                                                                                                                             
                            </ul>

                            <ul class="newsTicker2">
                               
                            </ul>

                        </div>
                    </div>

                </div>

            </div>

          

            
            <div class=" border p-3 mt-30 useful rounded" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; height: 24rem; width: 21rem">  <!-- border -->
                <div class="flex flex-column   w-100 h-100">  <!-- border -->
                    <div class=" flex align-items-center " style="width: 100%; height: 13%;">  <!-- border -->
                        <h6 style=" font-family: 'Roboto'; font-weight: bold; color: rgb(44, 141, 221);">Useful links  <i class="fas fa-link large-icon"></i></h6>
                        
                    </div>
                    <hr>

                    
                        <div class="newsTickerCon" style="overflow-y: scroll;">
                            <ul class="newsTicker" >
                                <!--********************************************************************************************-->
                                <li><a href="https://www.msde.gov.in/" target="_blank"> Ministry of Skill Development and Entrepreneurship  <i class="fas fa-external-link-alt large-icon"></i></a>
                                </li>
                                <li><a href="https://skill.assam.gov.in/" target="_blank">
                                    Government of Assam Skill Employment and Entrepreneurship  <i class="fas fa-external-link-alt large-icon"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pmkvyofficial.org/" target="_blank">
                                    Pradhan Mantri Kaushal Vikash Yojna(PMKVY)  <i class="fas fa-external-link-alt large-icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bodoland.gov.in/" target="_blank">
                                    Bodoland Web Portal  <i class="fas fa-external-link-alt large-icon"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://btrjobportal.com/" target="_blank">
                                    BTR Job Portal  <i class="fas fa-external-link-alt large-icon"></i>
                                    </a>
                                </li>
                                                               
                            </ul>
                            
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
           


</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    $(document).ready(function (e) {
        var newsNum = $(".newsTicker li").length;

        var totalNews_H = 0;
        for (var i = 0; i < newsNum; i++) {
            var news_H = $(".newsTicker li").eq(i).outerHeight(true);
            totalNews_H = totalNews_H + news_H;
        }

        $(".newsTicker").css('height', totalNews_H + 'px');

        var speed = 1, animAmount, animInterval;

        animateNews();

        function animateNews() {
            $(".newsTicker li").eq(0).animate({
                'marginTop': '-=' + speed + 'px'
            }, 1, function () {
                animAmount = speed;
                var animNews_H = $(".newsTicker li").eq(0).outerHeight(true);

                if (animAmount >= animNews_H) {
                    $(this).parent().append($(this));
                    $(this).removeAttr('style');
                }

                animInterval = setTimeout(function () {
                    animateNews();
                }, 50);
            });
        }

        $(".newsTicker").hover(function () {
            clearTimeout(animInterval);
            $(".newsTicker li").eq(0).stop();
        }, function () {
            animateNews();
        });
    });



    $(document).ready(function (e) {
        var newsNum = $(".newsTicker2 li").length;

        var totalNews_H = 0;
        for (var i = 0; i < newsNum; i++) {
            var news_H = $(".newsTicker2 li").eq(i).outerHeight(true);
            totalNews_H = totalNews_H + news_H;
        }

        $(".newsTicker2").css('height', totalNews_H + 'px');

        var speed = 1, animAmount, animInterval;

        animateNews();

        function animateNews() {
            $(".newsTicker2 li").eq(0).animate({
                'marginTop': '-=' + speed + 'px'
            }, 1, function () {
                animAmount = speed;
                var animNews_H = $(".newsTicker2 li").eq(0).outerHeight(true);

                if (animAmount >= animNews_H) {
                    $(this).parent().append($(this));
                    $(this).removeAttr('style');
                }

                animInterval = setTimeout(function () {
                    animateNews();
                }, 50);
            });
        }

        $(".newsTicker2").hover(function () {
            clearTimeout(animInterval);
            $(".newsTicker2 li").eq(0).stop();
        }, function () {
            animateNews();
        });
    });

</script>