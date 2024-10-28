<?php include("include/header.php");?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Navbar</a></li>
          <li class="breadcrumb-item active">Add infrastructure, building and workshop</li>
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
              <form class="row g-3" method="post" enctype="multipart/form-data">
								<div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="TotalArea" class="form-control" id="TotalArea"
											placeholder="Total Area">
										<label for="TotalArea">Total Area</label>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="CoveredArea" class="form-control" id="CoveredArea"
											placeholder="Covered Area">
										<label for="CoveredArea">Covered Area</label>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="TotalClassroomArea" class="form-control" id="TotalClassroomArea"
											placeholder="TotalClassroom Area">
										<label for="TotalClassroomArea">TotalClassroom Area</label>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="TotalWorkshopsArea" class="form-control" id="TotalWorkshopsArea"
											placeholder="TotalWorkshops Area">
										<label for="TotalWorkshopsArea">TotalWorkshops Area</label>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="DrawingHall" class="form-control" id="DrawingHall"
											placeholder="Drawing Hall Area">
										<label for="DrawingHall">Drawing Hall Area</label>
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="AudioVisualHall" class="form-control" id="AudioVisualHall"
											placeholder="Audio Visual Hall">
										<label for="AudioVisualHall">Audio Visual Hall</label>
									</div>
								</div>
                
								<div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="ComputerLab" class="form-control" id="ComputerLab"
											placeholder="Computer Lab">
										<label for="ComputerLab">Computer Lab</label>
									</div>
								</div>    
                <div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="Library" class="form-control" id="Library"
											placeholder="Library">
										<label for="Library">Library</label>
									</div>
								</div>                    
								<div class="col-md-6">
									<div class="imageupload">
										<input class="form-control" type="file" name="image" accept="image/*"
											onchange="readURL(this);" id="upload-image">
									</div>
								</div>
								<div class="col-md-6">
									<figure class="image-container">
										<img id="chosen-image" class="image-style">
									</figure>
								</div>

								<p class="formError text-danger"></p>

								<div class="text-center">
									<button type="submit" name="submit" id="submit"
										class="btn btn-primary">Submit</button>
									<button type="reset" id="reset" class="btn btn-secondary">Reset</button>
								</div>
							</form>

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
      reader.onload = function (e) {
        if (input.id === 'image') {
          $('#responseImage').attr('src', e.target.result);
        }
      };
      reader.readAsDataURL(input.files[0]);
    }

  }

  $("#image").change(function () {
    readURL(this);
  });

</script>

<script>
  let uploadImage = document.getElementById("upload-image");
  let chosenImage = document.getElementById("chosen-image");

  uploadImage.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadImage.files[0]);
    reader.onload = () => {
      chosenImage.setAttribute("src", reader.result);
    }
    fileName.textContent = uploadImage.files[0].name;
  }
</script>

<script>

  $('#submit').click(function (event) {
    var image = $('#upload-image')[0].files[0];
    var TotalArea = $('#TotalArea').val();
    var CoveredArea = $('#CoveredArea').val();
    var TotalClassroomArea = $('#TotalClassroomArea').val();
    var TotalWorkshopsArea = $('#TotalWorkshopsArea').val();
    var DrawingHall = $('#DrawingHall').val();
    var AudioVisualHall = $('#AudioVisualHall').val();
    var ComputerLab = $('#ComputerLab').val();
    var Library = $('#Library').val();

    if (!image) {
      $('#upload-image').focus();
      event.preventDefault();
      Swal.fire({
        title: "please choose any image.",
        showClass: {
          popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
        `
        },
        hideClass: {
          popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
        `
        }
      });

    }

    if (!image || !TotalArea || !CoveredArea || !TotalClassroomArea || !TotalWorkshopsArea || !DrawingHall || !AudioVisualHall || !ComputerLab || !Library ) {
      event.preventDefault();
      $('.formError').html("please fill all details to continue !");
    } else {
      $('.formError').html("");
      event.preventDefault();
      var formData = new FormData();
      formData.append("image", image);
      formData.append("totalArea", TotalArea);
      formData.append("coveredArea", CoveredArea);
      formData.append("totalClassroomArea", TotalClassroomArea);
      formData.append("totalWorkshopsArea", TotalWorkshopsArea);
      formData.append("drawingHall", DrawingHall);
      formData.append("audioVisualHall", AudioVisualHall);
      formData.append("computerLab", ComputerLab);
      formData.append("library", Library);
      formData.append('ajax', "ajax");

      $.ajax({
        type: "POST",
        processData: false,
        contentType: false,
        cache: false,
        dataType: "json",
        url: "forms/add-area-infrastructure.php",
        mimeType: 'multipart/form-data',
        data: formData,
        success: function (response) {
          if (response.successMessage) {
            // showSuccessMessage ();
            // alert("DSA");
            Swal.fire({
              title: "SuccessFull !",
              text: response.successMessage,
              icon: "success"
            });
            setTimeout(function () {
              window.location.reload();
            }, 1500);

          } else if (response.errorMessage) {
            Swal.fire({
              title: "Error !",
              text: response.errorMessage,
              icon: "error"
            });
          }


        },
        error: function (error) {
          Swal.fire({
            title: "Error !",
            text: "something went wrong !",
            icon: "error"
          });
        }
      })

    }

  })

  $('#reset').click(function (e) {
    let chosenImage = document.getElementById("chosen-image");
    chosenImage.setAttribute("src", "");
  })

</script>

</body>

</html>