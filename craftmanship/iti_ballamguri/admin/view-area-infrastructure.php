<?php include("include/header.php");
$area_infrastructure = $crud->Read("area_infrastructure","1");
?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php include("include/topSection.php");?>

  <?php include("include/sidebar.php");?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item">Navbar</li>
          <li class="breadcrumb-item active">View Infrastructure Building Workshop</li>
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

                <?php
                $area_infrastructure=$crud->Read("area_infrastructure","1 order by `id` desc");
              ?>

                <div class="card-body pb-0">
                  <h5 class="card-title">View infrastructure <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl no.</th>
                        <th scope="col">Ownership Documents/Lease agreement for rented building</th>
                        <th scope="col">In Square Meters</th>

                        <th scope="col">Date Uploaded</th>
                        <th scope="col">ACTION</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($area_infrastructure) { ?>
                      <tr>
                        <td>1</td>
                        <th scope="row">Total Area</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['TotalArea']; ?>
                        </th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>
                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                      </tr>
                      <tr>
                        <td>2</td>
                        <th scope="row">Area Covered</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['CoveredArea']; ?>
                        </th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>

                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                      </tr>
                      <tr>
                        <td>3</td>
                        <th scope="row">Total Classrooms Area</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['TotalClassRoomsArea']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>
                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>4</td>
                        <th scope="row">Workshops Area</th>

                        <th scope="row">
                          <?php echo $area_infrastructure[0]['TotalWorkshopsArea']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>
                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>


                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>5</td>
                        <th scope="row">Drawing Hall</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['DrawingHall']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>

                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>6</td>
                        <th scope="row">Audio Visual Hall</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['AudioVisualHall']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>
                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>7</td>
                        <th scope="row">Computer Lab</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['ComputerLab']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>

                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>8</td>
                        <th scope="row">Library</th>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['Library']; ?>
                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>

                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>
                      <tr>
                        <td>9</td>
                        <th scope="row">infrastructure image <img width="100px"
                            src="<?php echo $area_infrastructure[0]['image']; ?>"></th>
                        <th scope="row"></th>

                        <th scope="row">
                          <?php echo $area_infrastructure[0]['date_uploaded']; ?>
                        </th>

                        <th scope="row"><button type="button" data-id="<?php echo  $area_infrastructure[0]['id']; ?>"
                            class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#largeModal">update</button>
                        </th>
                        </th>
                      </tr>

                      <?php }?>

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
          <form class="row g-3" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-floating">

                <input type="hidden" class="form-control" id="ModalID" name="area_infra_id" placeholder="Your Email">

              </div>
            </div>

            <div class="col-md-6">
              <div class="form-floating">

                <input type="text" class="form-control" id="total_area" name="total_area" placeholder="Your Email">
                <label for="floatingEmail">Total area</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="covered_area" id="covered_area" class="form-control" placeholder="Password">
                <label for="floatingPassword">Covered area</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="total_classroom_area" id="total_classroom_area" class="form-control"
                  placeholder="Password">
                <label for="total_classroom_area">Total Classrooms area </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="total_workshop_area" id="total_workshop_area" class="form-control" placeholder="Password">
                <label for="total_workshop_area">Total Workshops area </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="drawing_hall" id="drawing_hall" class="form-control" >
                <label for="drawing_hall">Drawing Hall</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="visual_audio_hall" id="visual_audio_hall" class="form-control" >
                <label for="visual_audio_hall">Audio Visual Hall</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="computer_lab" id="computer_lab" class="form-control" >
                <label for="computer_lab">Computer Lab</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" name="library" id="library" class="form-control" >
                <label for="library">Library</label>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-floating">
                <input type="date" name="date_uploaded" id="date_uploaded" class="form-control">
                <label for="date_uploaded">Date Uploaded</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="imageupload">
                <input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);"
                  id="upload-image">
              </div>
            </div>
            <div class="col-md-6">
              <figure class="image-container">
                <img id="chosen-image" class="image-style">
              </figure>
            </div>


            <div class="text-center">
              <button id="update" name="update" class="btn btn-primary">update</button>
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
      $('#ModalID').val(dataId);

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "fetch/fetch-area-infrastructure.php",
        data: {
          dataId: dataId
        },
        success: function (response) {
          $("#total_area").val(response.total_area);
          $("#covered_area").val(response.covered_area);
          $("#total_classroom_area").val(response.classroom_area);
          $("#total_workshop_area").val(response.workshop_area);
          $("#drawing_hall").val(response.drawing_hall);
          $("#visual_audio_hall").val(response.audio_hall);
          $("#computer_lab").val(response.computer_lab);
          $("#library").val(response.library);
          $("#date_uploaded").val(response.date_uploaded);
          $('#chosen-image').attr("src", response.image);

        },
        error: function (error) {
          console.log("Error:");
          console.log(error);
        }

      });

    });
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#chosen-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      } else {
        $('#chosen-image').attr('src', '');
      }
    }

    $("#chosen-image").change(function () {
      readURL(this);
    });


    $('#update').click(function(e){
      e.preventDefault();
	  var id=$('#ModalID').val();
	  var image=$('#upload-image')[0].files[0];
	  var date=$('#date_uploaded').val();
	  var total_area=$('#total_area').val();
	  var covered_area=$('#covered_area').val();
    var total_classroom_area=$('#total_classroom_area').val();
    var total_workshop_area=$('#total_workshop_area').val();
    var drawing_hall=$('#drawing_hall').val();
    var visual_audio_hall=$('#visual_audio_hall').val();
    var computer_lab=$('#computer_lab').val();
    var library=$('#library').val();


	  var formData=new FormData();
	  formData.append('id',id);
	  formData.append('image',image);
	  formData.append('date',date);
    formData.append('total_area',total_area);
    formData.append('covered_area',covered_area);
    formData.append('total_classroom_area',total_classroom_area);
	  formData.append('total_workshop_area',total_workshop_area);
	  formData.append('drawing_hall',drawing_hall);
	  formData.append('visual_audio_hall',visual_audio_hall);
    formData.append('computer_lab',computer_lab);
    formData.append('library',library);

	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit-area-infrastructure.php",
		mimeType: 'multipart/form-data',
		data: formData,
		success: function (response) {
			$('#model4').hide();
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
				}, 1000);

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
  })


  </script>

</body>

</html>