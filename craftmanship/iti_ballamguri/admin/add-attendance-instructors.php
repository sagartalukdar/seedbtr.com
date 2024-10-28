<?php include("include/header.php");?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php
     $readFaculty=$crud->Read("faculty_details","`status`=1")
  ?>

	<?php ("include/topSection.php");?>

	<?php include("include/sidebar.php");?>
	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Dashboard</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#0">Navbar</a></li>
					<li class="breadcrumb-item active">Add Instructors Attendence</li>
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
									<div class="col-sm-10">
										<select class="form-select" name="instructor" id="instructor" aria-label="Default select example">
											<option selected disabled>Select Instructor</option>
											<?php 
											if ($readFaculty) {
												foreach ($readFaculty as $faculty) {
												echo '<option value="'.$faculty["full_name"].'">'.$faculty["full_name"].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
                                <div class="col-md-6">
									<div class="col-sm-10">
										<select class="form-select" name="month" id="month" aria-label="Default select example">
											<option selected disabled>Select Month</option>
											<?php 

												$month = strtotime('2022-01-01');
												$end = strtotime(date("Y-m-d"));

												while($month < $end)
												{   
													?>
													<option value="<?php echo date('M-Y', $month), PHP_EOL; ?>"><?php echo date('M-Y', $month), PHP_EOL; ?></option> 
													<?php
													$month = strtotime("+1 month", $month);
												}
										    ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-floating">
										<input type="text" name="percentage" class="form-control" id="percentage"
											placeholder="Password">
										<label for="Title">	Percentage</label>
									</div>
								</div>
			
								<p class="formError text-danger"></p>

								<div class="text-center">
									<button type="submit" name="submit" id="submit"
										class="btn btn-primary">Submit</button>
									<button type="reset" id="reset" class="btn btn-secondary">Reset</button>
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

		$('#submit').click(function (event) {			

			var instructor = $('#instructor').val();
			var month = $('#month').val();
			var percentage = $('#percentage').val();

			if (!instructor || !month || !percentage ) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("instructor", instructor);
				formData.append("month", month);
				formData.append("percentage", percentage);
				formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_attendance_instructors.php",
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