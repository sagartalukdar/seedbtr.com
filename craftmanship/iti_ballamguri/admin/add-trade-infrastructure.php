<?php include("include/header.php");
   $readTrades = $crud->Read("trades","`status`=1");
?>

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
          <li class="breadcrumb-item active">Add Trade Specific Infrastructure, Building and Workshop</li>
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
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select Trade</label>
                  <div class="col-sm-10">
                   <select class="form-select" name="trade" id="trade" aria-label="Default select example" required>
                      <option selected disabled>Select Trade</option>
                      <?php 
                        if ($readTrades) {
                            $trades[]=array();
                            $i=0;
                            foreach ($readTrades as $list){
                                          $trades[$i++]=$list['trade_name'];
                            }
                            $trades=array_unique($trades);
                            asort($trades);
                          foreach ($trades as $tradeKey) {
                            echo '<option value="'.$tradeKey.'">'.$tradeKey.'</option>';
                          }
                        }
                      ?>                      
                    </select>
                  </div>
                </div>   
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="unit" class="form-control" id="unit" placeholder="Password">
                    <label for="unit">Unit</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="classroom_area_per_unit" id="classroom_area_per_unit" class="form-control"  placeholder="classroom_area_per_unit">
                    <label for="classroom_area_per_unit">Class RoomArea per Unit</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="total_classroom_area" class="form-control" id="total_classroom_area" placeholder="total_classroom_area">
                    <label for="total_classroom_area">Total class room area for Trade </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="workshop_area_per_unit" id="workshop_area_per_unit" class="form-control"  placeholder="workshop_area_per_unit">
                    <label for="workshop_area_per_unit">Workshop Area per unit</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="total_workshop_area" id="total_workshop_area" class="form-control"  placeholder="total_workshop_area">
                    <label for="total_workshop_area">Total Workshop area for Trade</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="imageupload">
                    <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image">
                  </div>
                </div>
                <div class="col-md-6">
                  <figure class="image-container">
                      <img id="chosen-image" class="image-style">
                  </figure>
                </div>
                
                <p class="formError text-danger"></p>
                                
                <div class="text-center">
                  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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

    $('#submit').click(function (event) {
			var image = $('#upload-image')[0].files[0];
			var unit = $('#unit').val();
			var classroom_area_per_unit = $('#classroom_area_per_unit').val();
      var total_classroom_area = $('#total_classroom_area').val();
      var workshop_area_per_unit = $('#workshop_area_per_unit').val();
      var total_workshop_area = $('#total_workshop_area').val();
      var trade = $('#trade').val();
      
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

			if (!image || !unit || !classroom_area_per_unit || !total_classroom_area || !workshop_area_per_unit || !total_workshop_area || !trade) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("image", image);
				formData.append("unit", unit);
				formData.append("classroom_area_per_unit", classroom_area_per_unit);
				formData.append("total_classroom_area", total_classroom_area);
        formData.append("workshop_area_per_unit", workshop_area_per_unit);
        formData.append("total_workshop_area", total_workshop_area);
        formData.append("trade", trade);
				formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add-trade-infrastructure.php",
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

	</script>
  

</body>

</html>