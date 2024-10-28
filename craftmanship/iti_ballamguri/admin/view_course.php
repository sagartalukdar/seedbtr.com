<?php include("include/header.php");?>

<body>

  <?php include("include/topSection.php");?>

  <?php include("include/sidebar.php");?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Navbar</li>
          <li class="breadcrumb-item active">About us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
    <?php 
                  if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }
                ?>
              </div>
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


         

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">View courses <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Preview</th>
                        <th scope="col">head</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">course_fee</th>
                        <th scope="col">eligibility</th>
                        <th scope="col">seat availability</th>
                        <th scope="col">duration</th>
                        <th scope="col">status</th>
                        <th scope="col">date uploaded</th>
                        <th scope="col">actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                                        if ($read4) {
                                          $n=0;
                                          foreach ($read4 as $courses) { ?>
                      <tr>
                        <td><?php echo $courses['id'] ;?></td>
                        <th scope="row"><a href="#"><img width="100px" src="<?php echo $courses['image'];?>"></a></th>
                        <td><a href="#" class="text-primary fw-bold"><?php echo $courses['head'] ;?></a></td>
                        <td><?php echo $courses['title'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['description'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['course_fee'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['eligibility'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['seat_availability'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['duration'] ;?></td>
                        <td class="fw-bold"><?php echo $courses['status'] ;?></td>
                       
                        <td><span class="badge bg-success"><?php echo $courses['date_uploaded'] ;?></span></td>
                        <td><button type="button" data-id="<?php echo $courses['id'];?>" class="btn btn-outline-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button></td></button>

                      </tr>
                    <?php }}?>
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        
      </div>
    </section>

  </main><!-- End #main -->
  <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h5 class="card-title">Fill Data</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" action="forms/edit_courses.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control"  id="aboutID" name="aboutID" placeholder="">
                      <input class="form-control" name="image" type="file" id="image" accept="image/*" >
                    </div>
                    <img id="responseImage" width="100px" height="100px">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="head" id="head" placeholder="Your Email">
                    <label for="floatingEmail">Head</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Password">
                    <label for="floatingPassword">Title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Description" id="description" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Description</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="fee" class="form-control" id="fee" placeholder="Password">
                    <label for="floatingPassword">Course fee</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="eligibility" placeholder="Description" id="eligibility" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Eligibility</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="seat" class="form-control" id="seat" placeholder="Password">
                    <label for="floatingPassword">Seat availabilty</label>
                  </div>
                </div><div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="duration" class="form-control" id="duration" placeholder="Password">
                    <label for="floatingPassword">Duration</label>
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="date_uploaded" class="form-control" id="date_uploaded" placeholder="Password">
                    <label for="floatingPassword">Date Uploaded</label>
                  </div>
                </div>
                <div class="modal-footer">
                      
                      <button type="submit" name="submit" class="btn btn-primary">update</button>
                    <a href="" id="deletecourses" class="btn btn-danger waves-effect">DELETE</a>
                    </div>
                
                
              </form><!-- End floating Labels Form -->
                    </div>
                    
                  </div>
                </div>
              </div><!-- End Large Modal-->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>
  

  <script type="text/javascript">


  $(document).on("click touch", ".btn-sm", function () {
      var dataId = $(this).data('id');
      $('#aboutID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "fetch/fetch_course.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          var keyed = response.head.replace(/<br ?\/?>/g,"\n");
        $("#head").val(keyed);
        var keyed = response.title.replace(/<br ?\/?>/g,"\n");
        $("#title").val(keyed);
        var keyed = response.description.replace(/<br ?\/?>/g,"\n");
        $("#description").val(keyed);
        var keyed = response.fee.replace(/<br ?\/?>/g,"\n");
        $("#fee").val(keyed);
        var keyed = response.eligibility.replace(/<br ?\/?>/g,"\n");
        $("#eligibility").val(keyed);
        var keyed = response.seat.replace(/<br ?\/?>/g,"\n");
        $("#seat").val(keyed);
        var keyed = response.duration.replace(/<br ?\/?>/g,"\n");
        $("#duration").val(keyed);
        var keyed = response.date_uploaded.replace(/<br ?\/?>/g,"\n");
        $("#date_uploaded").val(keyed);
        $('#deletecourses').attr("href","forms/delete_courses.php?id="+dataId);

            $('#responseImage').attr("src",response.image);
            
         },
         error: function(error){
            console.log("Error:");
            console.log(error);
         }

      });
      
   });

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#responseImage').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  } else {
    $('#responseImage').attr('src', '');
  }
}

$("#image").change(function() {
  readURL(this);
});

</script>

</body>

</html>