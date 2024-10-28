<?php 
  include("include/header.php");
  $traineeAttendence = $crud->Read("attendence_trainee_details","`status`=1 order by `attendence_traineeID` desc");
  $readTrainee = $crud->Read("trainee_details","`status`=1");
  $readTrades = $crud->Read("trades","`status`=1");
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          <li class="breadcrumb-item active">View Trainee Attendence</li>
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

                <div class="card-body pb-0">
                  <h5 class="card-title">View Trainee Attendence <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Trainee Name</th>
                        <th scope="col">Trade</th>
                        <th scope="col">Month </th>
                        <th scope="col">Attendence Percentage </th>                        
                        <th scope="col">Action</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($traineeAttendence) {
                          $n=1;
                          foreach ($traineeAttendence as $traineeKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                        <td><?php echo $traineeKey['trainee_name'] ;?></td>
                        <td><?php echo $traineeKey['trade'] ;?></td>
                        <td><?php echo $traineeKey['attendance_month'] ;?></td>
                        <td><?php echo $traineeKey['percentage'] ;?>%</td>                  
                        <td>
                          <button type="button" data-id="<?php echo $traineeKey['attendence_traineeID'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">Modify Details</button>
                        </td>

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
                      <h5 class="modal-title">Edit The Attendence details of <span id="instructor_name"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h5 class="card-title">Fill Data</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="ModalID" class="form-control" id="ModalID" >
                    <!-- <label for="duration">id</label> -->
                <div class="col-md-6">
									<div class="col-sm-10">
										<select class="form-select" name="trainee" id="trainee" aria-label="Default select example">
											<option selected disabled>Select trainee</option>
											<?php 
											if ($readTrainee) {
												foreach ($readTrainee as $trainee) {
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
													<option value="<?php echo date('M-Y', $month); ?>"><?php echo date('M-Y', $month), PHP_EOL; ?></option> 
													<?php
													$month = strtotime("+1 month", $month);
												}
										    ?>
										</select>
									</div>
								</div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="percentage" class="form-control" id="percentage" placeholder="Duration" required>
                    <label for="duration">Attendance Percentage</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="status" class="form-control" id="status" placeholder="Duration" required>
                    <label for="duration">Status</label>
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" id="update" class="btn btn-primary">UPDATE</button>
                 
                </div>
              </form><!-- End floating Labels Form -->

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Large Modal-->

  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>
  
  <script type="text/javascript">

$('.editDelete').click(function(){
      var dataId = $(this).data('id');
      $('#ModalID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "fetch/fetch-trainee-attendence.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          $('#trainee').val(response.trainee);
          $('#trade').val(response.trade);
          $('#month').val(response.attendanceMonth);
          $('#percentage').val(response.percentage);
          $('#status').val(response.status);         
          },
          error: function(error){
              console.log("Error:");
              console.log(error);
          }

      });
    })

    
    $('#update').click(function(e){
      e.preventDefault();
	  var id=$('#ModalID').val();
	  var trainee=$('#trainee').val();
    var trade=$('#trade').val();
	  var month=$('#month').val();
	  var percentage=$('#percentage').val();
    var status=$('#status').val();

	  var formData=new FormData();
	  formData.append('trainee',trainee);
    formData.append('trade',trade);
	  formData.append('month',month);
    formData.append('percentage',percentage);
	  formData.append('status',status);
	  formData.append('id',id);
	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/update-trainee-attendence.php",
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