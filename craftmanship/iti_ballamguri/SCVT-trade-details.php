<?php include("include/header.php") ; ?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">

      <!-- data table css styles -->
      <style>
        .dt-button{
            border: none;
            background-color:white;  
            padding: 4px;         
        }
        .dt-button span{
            border: none;
            padding: 3px 20px;
            border: none !important;
            outline: none !important;
            background: linear-gradient(#c49fbf, transparent,rgb(189, 151, 199));
            border-radius: 10px;
            color: rgb(32, 28, 28);
            font-weight: 700;
            margin-left: 10px;
        }
        .dt-layout-cell{
            overflow-x: scroll;
        }
      </style>
     <!-- data table css styles -->

<!-- #header -->
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
   <div class="overlay overlay-bg"></div>
   <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
            <h1 class="text-white">
               Trade Details     
            </h1>
            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="readcourses.php">Trade Details </a></p>
         </div>
      </div>
   </div>
</section>
<!-- End banner Area -->   
<section class="popular-course-area section-gap">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
               <h1 class="mb-10">Trades Affiliated to NCVT and SCVT</h1>
               
            </div>
         </div>
      </div>
      <div class="col-lg-12 right-contents">
            <div class="table-responsive">
               <table id="example" class="display wrap" style="width:100%">
                  <thead style="background-color: black; color: white">                    
                     <tr>
                        <th scope="col">Names of the Trade (linked to the respective
                           Syllabus with DGET website)
                        </th>
                        <th scope="col">Certificate</th>                       
                        <th scope="col">Total Seating Capacity</th>
                        <th scope="col">Duration</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                       $ReadTrades=$crud->Read("trades","`certificate`='SCVT(State Council for Vocational Training)' OR `certificate`='NCVT(National Council for Vocational Training)' order by `id` desc");
                       if($ReadTrades){
                        foreach($ReadTrades as $trades){
                     ?>
                        <tr style="font-size: 17px;">
                           <td class="table-info"><?= $trades['trade_name']; ?></td>                          
                           <td class="table-info"><?= $trades['certificate']; ?></td>
                           <td class="table-info text-center"><?= $trades['description']; ?></td>
                           <td class="table-info text-center"><?= $trades['duration']; ?></td>
                        </tr>
                     <?php
                        }
                       }
                     ?>                   
                                         
                  </tbody>
               </table>
            </div>
         </div>
      
   </div>
</section>

<!-- End popular-course2 Area -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- data table -->
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
 <script>
       new DataTable('#example', {
          layout: {
             topStart: {
                   buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
             }
          }
       });
 </script>
 <!-- data table -->

    	<!-- Start cta-two Area -->
       <?php include("include/query.php");?>
      <!-- End cta-two Area -->						    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>
