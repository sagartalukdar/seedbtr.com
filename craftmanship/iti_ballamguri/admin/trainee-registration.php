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
          <li class="breadcrumb-item active">Add Trainee Details</li>
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
                  <label for="fullName"  class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Please Enter Full Name" name="fullName" id ="fullName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="fatherName"  class="col-sm-2 col-form-label">Father's name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Please Enter Father's Name" id="fatherName" name="father_name" required>
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="dob" class="col-sm-2 col-form-label">UID/Date of Birth</label>
                  <div class="col-sm-10" required>
                    <input type="date" id="dob" class="form-control" name="dob">
                  </div>
                </div>
                
                <!-- <label style="margin-right: 20px;">Gender</label> -->
                <fieldset class="row mb-3" id="gender">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10" style="display: flex;flex-direction: row; gap: 13px;">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>                    
                  </div>
                </fieldset>
                                            

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Caste</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="caste" aria-label="Default select example" required>
                      <option selected disabled>Select Caste</option>
                      <option value="ST/SC">ST/SC</option>
                      <option value="OBC">OBC</option>
                      <option value="GENERAL">GENERAL</option>
                      <option value="ST Hills">ST Hills</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Trade</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="trade" aria-label="Default select example" required>
                      <option selected disabled>Select Trade</option>
                      <?php 
                        if ($readTrades) {
                          $newArr=[];
                          $i=0;
                          foreach($readTrades as $list){
                            $newArr[$i++]=$list['trade_name'];
                          }
                          $distinctTrades=array_unique($newArr);
                          asort($distinctTrades);
                          foreach ($distinctTrades as $tradeKey) {
                            echo '<option value="'.$tradeKey.'">'.$tradeKey.'</option>';
                          }
                        }
                      ?>
                      
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Shift</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="shift" aria-label="Default select example" required>
                      <option selected disabled>Select Shift</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                     
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Session</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="courseSession" aria-label="Default select example" required>
                      <option selected disabled>Select Session</option>
                      <option value="2019-2020">2019-2020</option>
                      <option value="2020-2021">2020-2021</option>
                      <option value="2021-2022">2021-2022</option>
                      <option value="2022-2023">2022-2023</option>
                      <option value="2023-2024">2023-2024</option>
                      <option value="2024-2025">2024-2025</option>
                    </select>
                  </div>
                </div>
                <hr class="hr" />
                <div class="row mb-3">
                  <div class="col-md-6">
                      <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Trainee</label>
                    <div class="imageupload">
                      <input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);" id="upload-image">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <figure class="image-container">
                        <img id="chosen-image" class="image-style">
                    </figure>
                  </div>
                </div>  
                
                <p class="formError text-danger"></p>                

              </form>

            </div>
            <div class="row mb-3 text-center">                  
              <div class="col-sm-10">
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
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
			var fullName = $('#fullName').val();
      var fatherName = $('#fatherName').val();
      var dob = $('#dob').val();
      var gender = $('input[name="gender"]:checked').val();
      var caste = $('#caste').val();
      var trade = $('#trade').val();
      var shift = $('#shift').val();
      var courseSession = $('#courseSession').val();
			
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

			if (!image || !fullName || !fatherName || !dob || !gender  || !caste || !trade || !shift || !courseSession) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("image", image);
				formData.append("fullName", fullName);
				formData.append("fatherName", fatherName);
        formData.append("dob", dob);
        formData.append("gender", gender);
        formData.append("caste", caste);
        formData.append("trade", trade);
        formData.append("shift", shift);
        formData.append("courseSession", courseSession);
				formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_trainee_registration.php",
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