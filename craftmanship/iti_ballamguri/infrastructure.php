
<?php 
include("include/header.php");
$areaInfra = $crud->Read("area_infrastructure","1 order by `id` desc"); 
$trade = $crud->Read("trade_infrastructure","1 order by `id` desc");
$electric = $crud->Read("electric_power_supply","1 order by `id` desc");
// $areaInfra = $crud->Read("photos","1"); 
// $trade = $crud->Read("photos","1");
// $electric = $crud->Read("photos","1");
?>

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

      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Infrastructure			
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event-details.php"> Infrastructure</a></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End banner Area -->
    
      <!-- Start event-details Area -->
      <section class="event-details-area section-gap">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Infrastructure, Building and Workshop</h1>
                     
                  </div>
               </div>
            </div>
            
            <div class="row" style="display: flex;align-items: center;">
            <?php if ($areaInfra) { ?>
             <div class="col-lg-7 event-details-left table-responsive">
               <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Ownership Documents/Lease agreement for rented building</th>
                        <th scope="col">In Square Meters</th>                       
                     </tr>
                  </thead>
                  <tbody>              
                      <tr>
                        <td class="table-info">1</td>
                        <th class="table-info">Total Area</th>
                        <th class="table-info"><?php echo $areaInfra[0]['TotalArea']; ?></th>
                        
                      </tr>
                      <tr>
                        <td class="table-info">2</td>
                        <th class="table-info">Area Covered</th>
                        <th class="table-info"><?php echo $areaInfra[0]['CoveredArea']; ?></th>
                        
                      </tr>
                      <tr>
                        <td class="table-info">3</td>
                        <th class="table-info">Total Classrooms Area</th>
                        <th class="table-info"><?php echo $areaInfra[0]['TotalClassRoomsArea']; ?>
                        
                        </th>
                      </tr>
                      <tr>
                        <td class="table-info">4</td>
                        <th class="table-info">Workshops Area</th>
                        
                        <th class="table-info"><?php echo $areaInfra[0]['TotalWorkshopsArea']; ?>
                        


                          </th>
                        </th>
                      </tr>
                      <tr>
                        <td class="table-info">5</td>
                        <th class="table-info">Drawing Hall</th>
                        <th class="table-info"><?php echo $areaInfra[0]['DrawingHall']; ?>
                        
                         
                        </th>
                      </tr>
                      <tr>
                        <td class="table-info">6</td>
                        <th class="table-info">Audio Visual Hall</th>
                        <th class="table-info"><?php echo $areaInfra[0]['AudioVisualHall']; ?>
                        
                        </th>
                      </tr>
                      <tr>
                        <td class="table-info">7</td>
                        <th class="table-info">Computer Lab</th>
                        <th class="table-info"><?php echo $areaInfra[0]['ComputerLab']; ?>
                        
                         
                        </th>
                      </tr>
                      <tr>
                        <td class="table-info">8</td>
                        <th class="table-info">Library</th>
                        <th class="table-info"><?php echo $areaInfra[0]['Library']; ?>
                        
                        </th>
                      </tr>                  
                                         
                  </tbody>
               </table>
                  
               </div>
               <div class="col-lg-5 event-details-right">
                   <div class="main-img">
                     <img class="img-fluid" style="height: 400px;width: 500px;" src="admin/<?php echo $areaInfra[0]['image']; ?>" alt="">                
                  </div>                  									
               </div>
                <?php 
                  }else{
               ?>
               <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Ownership Documents/Lease agreement for rented building</th>
                        <th scope="col">In Square Meters</th>                       
                     </tr>
                  </thead>
                  <tbody>
                                                  
                  </tbody>
               </table>
               <?php
                  }                
                ?>
            </div>
         </div>
      </section>
      <!-- End event-details Area -->

      <!-- Start event-details Area2 -->
      
      <section class="event-details-area section-gap">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Trade Specific Infrastructure, Building and Workshop</h1>
                     
                  </div>
               </div>
            </div>
            <div class="row" style="display: flex;margin: auto;">
               <div class="col-12 event-details-left table-responsive" >               
                  <table id="example" class="display wrap" style="width:100%">
                     <thead style="background-color: black; color: white">
                        <tr>
                           <th scope="col">Trade</th>
                           <th scope="col">Unit</th>
                           <th scope="col" style="min-width: 180px;">Class Room Area Per Unit</th>
                           <th scope="col" style="min-width: 180px;"> Total Class Room Area for Trade</th>
                           <th scope="col" style="min-width: 180px;"> Workshop Area Per Unit</th>
                           <th scope="col" style="min-width: 180px;"> Workshop Area for Trade</th>
                           <th scope="col">Image</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           if ($trade) {
                              $n=0;
                              foreach ($trade as $tradeinfra) { ?>
                        <tr style="font-size: 16px;">
                           
                           <td class="table-info"><?php echo $tradeinfra['Trade'] ;?></td>
                           <td class="table-info" style="text-align: center;"><?php echo $tradeinfra['Unit'] ;?></td>
                           <td class="table-info" style="text-align: center;"><?php echo $tradeinfra['ClassRoomArea'] ;?></td>
                           <td class="table-info" style="text-align: center;"><?php echo $tradeinfra['TotalClassRoom'] ;?></td>
                           <td class="table-info" style="text-align: center;"><?php echo $tradeinfra['WorkshopArea'] ;?></td>
                           <td class="table-info" style="text-align: center;"><?php echo $tradeinfra['Total_WorkshopArea'] ;?></td>
                           <td class="table-info">
                           <img class="img-fluid" src="admin/<?php echo $tradeinfra['image']; ?>" style="height:100px;width:100px;" alt=""> 
                           </td>
                           
                        </tr>
                        <?php }}?>
                     </tbody>
                  </table>                  
               </div>
            </div>
         </div>
      </section>
     
      <!-- End event-details Area2 -->
      <!-- Start event-details Area3 -->
      <section class="event-details-area section-gap">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="menu-content pb-70 col-lg-8">
                  <div class="title text-center">
                     <h1 class="mb-10">Electric Power Supply</h1>
                     
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 event-details-left" style="overflow-x: scroll">
                  <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                     <tr>
                        <th scope="col">Present Electric Load(in KW)</th>
                        <th scope="col">Date of Connection</th>
                        <th scope="col">Connection name</th>
                        <th scope="col">Photo</th>                  
                     </tr>
                  </thead>
                  <tbody>
                       <?php 
                           if ($electric) {
                              $n=0;
                       ?>      
                        <tr>                        
                           <td class="table-info"><?php echo $electric[0]['electric_load'] ;?></td>
                           <td class="table-info"><?php echo $electric[0]['Date_of_Connection'] ;?></a></td>
                           <td class="table-info"><?php echo $electric[0]['Connection_name'] ;?></td>
                           <td class="table-info">
                           <img class="img-fluid" src="admin/<?php echo $electric[0]['image']; ?>" style="height:100px;width:100px;" alt=""> 
                           </td>
                        </tr>
                        <?php }?>
                      
                  </tbody>
               </table>                  
               </div>                
            </div>
         </div>
      </section>

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
