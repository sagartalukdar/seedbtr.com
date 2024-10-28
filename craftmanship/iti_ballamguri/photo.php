<?php
include("../admin/classes/Crud.php");
$crud = new Crud();

// Pagination variables
$limit = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch paginated photos
$read2 = $crud->Read("photos", "1 limit 3" );

// Fetch total number of photos
$total_records = $crud->Count("photos", "1");
$total_pages = ceil($total_records / $limit);
?>

<!-- Start gallery Area -->
<section class="gallery-area section-gap">
   <div class="container">
      <div class="row">
         <?php 
         if ($read2) {
            foreach ($read2 as $photo) {
               ?>
               <div class="col-lg-4">
                  <a href="img/gallery/g1.jpg" class="img-gal">
                     <div class="single-imgs relative">
                        <div class="overlay overlay-bg"></div>
                        <div class="relative">           
                           <img class="img-fluid" src="../admin/<?php echo $photo['image']; ?>" alt="">    
                        </div>
                     </div>
                  </a>
               </div>
               <?php
            }
         }
         ?>
      </div>

      <nav class="blog-pagination justify-content-center d-flex">
         <ul class="pagination">
            <?php if ($page > 1) { ?>
               <li class="page-item">
                  <a href="gallery.php?page=<?= $page - 1 ?>" class="page-link" aria-label="Previous">
                     <span aria-hidden="true">
                        <span class="lnr lnr-chevron-left"></span>
                     </span>
                  </a>
               </li>
            <?php } ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
               <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                  <a class="page-link" href="gallery.php?page=<?= $i ?>"><?= $i ?></a>
               </li>
            <?php } ?>

            <?php if ($page < $total_pages) { ?>
               <li class="page-item">
                  <a href="gallery.php?page=<?= $page + 1 ?>" class="page-link" aria-label="Next">
                     <span aria-hidden="true">
                        <span class="lnr lnr-chevron-right"></span>
                     </span>
                  </a>
               </li>
            <?php } ?>
         </ul>
      </nav>
   </div>
</section>
