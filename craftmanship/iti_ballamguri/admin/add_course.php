<?php include("include/header.php");?>

<body>

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Navbar</a></li>
          <li class="breadcrumb-item active">Add Events</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php include("include/topSection.php")?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

         

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fill Data</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" action="forms/add_course.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <div class="col-sm-10">
                      <input class="form-control" name="image" type="file" id="image" accept="image/*" >
                    </div>
                    <img id="responseImage" width="100px" height="100px">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="head" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Head</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Title</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Description</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="fee" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Course fee</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="eligibility" placeholder="Description" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Eligibility</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="seat" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Seat availabilty</label>
                  </div>
                </div><div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="duration" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Duration</label>
                  </div>
                </div>
                
                
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>


   <script type="text/javascript">
       function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      if(input.id === 'image') {
        $('#responseImage').attr('src', e.target.result);
      } 
    };
    reader.readAsDataURL(input.files[0]);
  }

  }

$("#image").change(function() {
  readURL(this);
});

    </script>

</body>

</html>