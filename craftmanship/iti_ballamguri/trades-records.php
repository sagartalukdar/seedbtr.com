<?php
   $recordsPerPage = 1;
   
   $page = isset($_GET['page']) ? $_GET['page'] : 1;
   
   $startFrom = ($page - 1) * $recordsPerPage;
   
   if (isset($_POST['search'])) {
       $valueToSearch = $_POST['valueToSearch'];
   
       
       if ($valueToSearch === "1") {
           $query = "SELECT * FROM `courses`";
       } else {
           $query = "SELECT * FROM `courses` WHERE CONCAT(`id`, `head`, `eligibility`, `duration`) LIKE '%".$valueToSearch."%'";
       }
   
       $query .= " LIMIT $startFrom, $recordsPerPage";
   
       $search_result = filterTable($query);
   } else {
       $query = "SELECT * FROM `courses`";
   
     
       $query .= " LIMIT $startFrom, $recordsPerPage";
   
       $search_result = filterTable($query);
   }
   
    
   function filterTable($query)
   {
       $connect = mysqli_connect("localhost", "u355669643_ballamguri", "Craftmanship@2023", "u355669643_ballamguri");
       $filter_Result = mysqli_query($connect, $query);
       return $filter_Result;
   }
   ?>
<?php include("header.php") ?>
      <!-- #header -->
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home">
         <div class="overlay overlay-bg"></div>
         <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
               <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     Trainee       
                  </h1>
                  <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.php"> Details of Trainee</a></p>
               </div>
            </div>
         </div>
      </section>
      <section class="sample-text-area">
         <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
               <div class="title text-center">
                  <h1 class="mb-10">Attendance of Trainee</h1>
               </div>
            </div>
         </div>
         <form action="trainee2.php" method="post">
            <div class="default-select" id="default-select">
               <select name="valueToSearch" >
                  <option value="1">all</option>
                  <option value="fitter">fitter</option>
                  <option value="pump">pump</option>
               </select>
               <button type="submit" class="genric-btn success-border" name="search" value="Filter">filter</button>
            </div>
            <div class="whole-wrap">
               <div class="container">
                  <div class="section-top-border">
                     <h3 class="mb-30">Records</h3>
                     <div class="progress-table-wrap">
                        <div class="progress-table">
                           <div class="table-head">
                              <div class="serial">Sl. No.</div>
                              <div class="country">Name of Instructor</div>
                              <div class="visit">eligibility</div>
                              <div class="percentage">duration</div>
                           </div>
                           <?php while($row = mysqli_fetch_array($search_result)):?>
                           <div class="table-row">
                              <div class="serial"><?php echo $row['id'];?></div>
                              <div class="country"><?php echo $row['head'];?></div>
                              <div class="visit"><?php echo $row['eligibility'];?></div>
                              <div class="percentage">
                                 <?php echo $row['duration'];?>
                              </div>
                           </div>
                           <?php endwhile;?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pagination">
                  <?php
                     $connect = mysqli_connect("localhost", "u355669643_ballamguri", "Craftmanship@2023", "u355669643_ballamguri");
                     $countQuery = "SELECT COUNT(*) as total FROM `courses`";
                     $countResult = mysqli_query($connect, $countQuery);
                     $row = mysqli_fetch_assoc($countResult);
                     $totalRecords = $row['total'];
                     
                     
                     $totalPages = ceil($totalRecords / $recordsPerPage);
                     
                     
                     
                     ?>
                  <nav class="blog-pagination justify-content-center d-flex">
                     <ul class="pagination">
                        <?php if ($page > 1) { ?>
                        <li class="page-item">
                           <a href="trainee2.php?page=<?= $page - 1 ?>" class="page-link" aria-label="Previous">
                           <span aria-hidden="true">
                           <span class="lnr lnr-chevron-left"></span>
                           </span>
                           </a>
                        </li>
                        <?php } ?>
                        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                        <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                           <a class="page-link" href="trainee2.php?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                        <?php } ?>
                        <?php if ($page < $totalPages) { ?>
                        <li class="page-item">
                           <a href="trainee2.php?page=<?= $page + 1 ?>" class="page-link" aria-label="Next">
                           <span aria-hidden="true">
                           <span class="lnr lnr-chevron-right"></span>
                           </span>
                           </a>
                        </li>
                        <?php } ?>
                     </ul>
                  </nav>
               </div>
         </form>
         </div>
      </section>
      <!-- Start cta-two Area -->
       <?php include("query.php");?>
         <!-- End cta-two Area -->     
      <!-- start footer Area -->        
      <?php include("footer.php") ?>
