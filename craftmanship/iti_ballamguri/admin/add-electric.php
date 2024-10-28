<?php include("include/header.php");?>

<body>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Navbar</a></li>
          <li class="breadcrumb-item active">Add Electric Power Supply</li>
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
                        <input type="text" name="present_electric_load" id="present_electric_load" class="form-control"  placeholder="present_electric_load">
                        <label for="present_electric_load">Present Electric Load(in KW)</label>
                     </div>
                </div>
                
                <div class="col-md-6">
                     <div class="form-floating">
                        <input type="date" name="connection_date" id="connection_date" class="form-control"  placeholder="connection_date">
                        <label for="connection_date">Date of Connection</label>
                     </div>
                </div>           
         
                <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="connection_name" id="connection_name" class="form-control"  placeholder="connection_name">
                        <label for="connection_name">Connection Name</label>
                     </div>
                </div>

                <div class="col-md-6">
                  <div class="imageupload">
                    <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image">
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <figure class="image-container">
                      <img id="chosen-image" class="image-style">
                  </figure>
                </div>          
                
                <p class="formError text-danger"></p>
                
                <div class="text-center">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
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

    <script >
        let uploadImage = document.getElementById("upload-image");
        let chosenImage = document.getElementById("chosen-image");

        uploadImage.onchange = () => {
            let reader = new FileReader();
            reader.readAsDataURL(uploadImage.files[0]);
            reader.onload = () => {
                chosenImage.setAttribute("src",reader.result);
            }
            fileName.textContent = uploadImage.files[0].name;
        }
    </script>

    <script>
    
		$('#submit').click(function(event){
			var image=$('#upload-image')[0].files[0];			
			var present_electric_load=$('#present_electric_load').val();
			var connection_date=$('#connection_date').val();
      var connection_name=$('#connection_name').val();

			if(!image){
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

      if(!image || !present_electric_load || !connection_date || !connection_name ){
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			}else{
				$('.formError').html("");
				event.preventDefault();
				var formData=new FormData();
				formData.append("image",image);	
				formData.append("present_electric_load",present_electric_load);	
				formData.append("connection_date",connection_date);
				formData.append("connection_name",connection_name);
        formData.append('ajax',"ajax");			

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add-electric-power.php",
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
							},1500);

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