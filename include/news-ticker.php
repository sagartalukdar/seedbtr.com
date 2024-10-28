

<?php
  $press=$crud->Read("press","1 order by `id` desc limit 3");
?>

<style>
        
        .breaking-news { 
        position: relative; 
          /* border:1px solid #777;   */
        background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
          font-family:'Oswald',serif;
        } 
        
        .breaking-news, .breaking-news .headertext { 
        padding: 7px; 
        background-color: #fff; 
        color: #626060; 
        font-weight: bold; 
        } 
        
        .breaking-news .headertext { 
        position: absolute; 
        top: 0; 
        left: 0; 
        z-index: 10; 
        padding: 10px 10px;
        border-right:1px solid #777;  
        background:#C8102E;
        color:#fff ;
        text-shadow: 1px 1px #111;
  
        } 
        
        
        .breaking-news marquee { 
        line-height: 1.5; 
        } 
        
        .breaking-news marquee p { 
        margin: 0; 
        
        } 
              </style>
                    
                <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
                <div class="breaking-news mt-60" id="news-animation"> 
                <div class="headertext">Recent News</div> 
        
                <div>
                  <marquee style="width:100%;color:black;" 
                  onmouseover="this.stop();" onmouseout="this.start();" 
                  direction="left" behavior="scroll" scrollamount="7" >
                <?php
                   if($press){
                    foreach($press as $pr){ 
                         $news=strip_tags($pr['description'],'<a></a>');
                            echo $news."|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                    }
                   } 
                   ?>
                  </marquee>
               
                </div>
        
                </div> 


