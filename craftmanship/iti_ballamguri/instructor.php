<?php 
include("include/header.php") ;
$readFaculties = $crud->Read("faculty_details","1 order by `faculty_id` desc");
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

      <!-- #header -->
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home" style="margin-bottom: -55px;">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Instructors       
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Details of Instructors</a></p>
               </div>
            </div>
         </div>
      </section>
      <section class="sample-text-area">
         <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="menu-content pb-20 col-lg-8">
               <div class="title text-center">
                  <h1 class="mb-10">Details of Instructors in ITI Ballamguri</h1>
               </div>
            </div>
         </div>
      
         <table id="example" class="display wrap" style="width:100%">
           <thead style="background-color: black; color: white">
            <tr>
                <th>Sl. No</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Trade</th>
                <th>Date_of_joining</th>
                <th>Post</th>
                <th>CTI Trained</th>
                <th>Photo</th>
                
                
            </tr>
           </thead>
            <tbody>
               <?php if ($readFaculties) {
                  $n=1;
               foreach ($readFaculties as $facultyKey) { ?>
                  <tr>
                     <td class="percentage"><?php echo $n++; ?></td>
                     <td><?php echo $facultyKey['full_name']; ?></td>
                     <td><?php echo $facultyKey['designation']; ?></td>
                     <td><?php echo $facultyKey['qualification']; ?></td>
                     <td><?php echo $facultyKey['trade']; ?></td>
                     <td><?php echo $facultyKey['date_of_joining']; ?></td>
                     <td><?php echo $facultyKey['post']; ?></td>
                     <td><?php echo $facultyKey['CTI_trained']; ?></td>
                     <td><img width="80px" height="80px" src="admin/<?php echo $facultyKey['image']; ?>"></td>
                     
                  </tr>
                  <?php }
                  } ?>
               
            </tbody>
         </table>
              
         </div>
      </section>
      <!-- Start cta-two Area -->

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
