<?php include("include/header.php");

$readTrades = $crud->Read("trades","`status`=1");
?>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Navbar</a></li>
          <li class="breadcrumb-item active">Add Administrative</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php include("include/topSection.php")?>

    <section class="section">
      <div class="row">
        <div class="col-12">
          <div class="alert alert-success text-light border-0 alert-dismissible fade show" role="alert">
            <?php 
              if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              }
            ?>
          </div>
        
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fill Data</h5>

				<form method="post" enctype="multipart/form-data">
					<div class="row mb-3">
					<label for="inputText" placeholder="enter staff name" class="col-sm-2 col-form-label">Name of Staff</label>
					<div class="col-sm-10">
						<input type="text" id="staffName" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputText" placeholder="enter staff name" class="col-sm-2 col-form-label">Qualification</label>
					<div class="col-sm-10">
						<input type="text" id="qualification" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputText" placeholder="enter designation" class="col-sm-2 col-form-label">Designation</label>
					<div class="col-sm-10">
						<input type="text" id="designation" class="form-control">
					</div>
					</div>
					
					
					<div class="row mb-3">
					<label for="inputDate" class="col-sm-2 col-form-label">Date of Joining</label>
					<div class="col-sm-10">
						<input type="date" id="date_of_joining" class="form-control">
					</div>
					</div>
					
					<hr class="hr" />
					<div class="row mb-3">
						<div class="col-md-6">
							<label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Administrative</label>
							<div class="imageupload">
								<input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image">
							</div>
						</div>
						<div class="col-md-6">
						<figure class="image-container">
							<img id="chosen-image" class="image-style">
						</figure>
						</div>
			        </div>

					<div class="row mb-3">

					<p class="formError text-danger"></p>               
				
					</div>

					<div class="col-sm-10 text-center">
						<button type="submit" id="submit" class="btn btn-primary">Submit</button>
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
			var staffName = $('#staffName').val();
      var qualification = $('#qualification').val();
      var designation = $('#designation').val();
      var date_of_joining = $('#date_of_joining').val();
     
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

			if (!image || !staffName || !designation || !qualification || !date_of_joining) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("image", image);
				formData.append("staffName", staffName);
				formData.append("designation", designation);
        formData.append("qualification", qualification);
        formData.append("date_of_joining", date_of_joining);
      	formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_administrative.php",
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

			if (globalEditor) {
				globalEditor.setData("");
			}

		})

	</script>

</body>

</html>