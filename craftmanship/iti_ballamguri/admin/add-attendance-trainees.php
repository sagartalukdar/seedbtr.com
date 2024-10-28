<?php include("include/header.php");?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php
     $readTrinee=$crud->Read("trainee_details","`status`=1");
	 $readTrades = $crud->Read("trades","`status`=1");
  ?>

	<?php ("include/topSection.php");?>

	<?php include("include/sidebar.php");?>
	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Dashboard</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#0">Navbar</a></li>
					<li class="breadcrumb-item active">Add Trainees Attendence</li>
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
										<select class="form-select" name="trainee" id="trainee" aria-label="Default select example">
											<option selected disabled>Select trainee</option>
											<?php 
											if ($readTrinee) {
												foreach ($readTrinee as $trainee) {
												echo '<option value="'.$trainee["full_name"].'">'.$trainee["full_name"].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>					
							
								<div class="col-6">										
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

			var trainee = $('#trainee').val();
			var trade = $('#trade').val();
			var month = $('#month').val();
			var percentage = $('#percentage').val();

			if (!trainee || !month || !percentage || !trade) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("trainee", trainee);
				formData.append("trade", trade);
				formData.append("month", month);
				formData.append("percentage", percentage);
				formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_attendance_trainee.php",
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