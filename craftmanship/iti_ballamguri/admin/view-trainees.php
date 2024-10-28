<?php 
  include("include/header.php");
  $readTrades = $crud->Read("trades","`status`=1");
  $readTrainees = $crud->Read("trainee_details","1 order by `trainee_id` desc");

?>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

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
          <li class="breadcrumb-item active">View Trainees</li>
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
                  <h5 class="card-title">View Trainees<span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Trainee Name</th>
                        <th scope="col">Father's Name</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Caste</th>
                        <th scope="col">Trade</th>
                        <th scope="col">Shift</th>
                        <th scope="col">Session</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($readTrainees) {
                          $n=1;
                          foreach ($readTrainees as $traineeKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                        <td><a href="#" class="fw-bold"><?php echo $traineeKey['full_name'] ;?></a></td>
                        <td><?php echo $traineeKey['father_name'] ;?></td>
                        <td><?php echo $traineeKey['dob'] ;?></td>
                        <td><?php echo $traineeKey['gender'] ;?></td>
                        <td><?php echo $traineeKey['caste'] ;?></td>
                        <td><?php echo $traineeKey['trade'] ;?></td>
                        <td><?php echo $traineeKey['shift'] ;?></td>
                        <td><?php echo $traineeKey['course_session'] ;?></a></td>
                       
                        <th scope="row"><a class="tradeImageClass" data-id="<?php echo $traineeKey['image'];?>" data-name="<?php echo $traineeKey['full_name'];?>" data-bs-toggle="modal" data-bs-target="#imageModal"><img width="150px" src="<?php echo $traineeKey['image']; ?>"></a></th>

                        <td><button type="button" data-id="<?php echo $traineeKey['trainee_id'];?>" data-name="<?php echo $traineeKey['full_name'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button></td></button>

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
                      <h5 class="modal-title">Edit The details of <span id="traineeName"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h5 class="card-title">Fill Data</h5>

              <!-- Floating Labels Form -->
              <form method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control"  id="ModalID" name="ModalID" placeholder="">
                    </div>                   
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText"  class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Please Enter Full Name" id="fullName" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText"  class="col-sm-2 col-form-label">Father's name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Please Enter Father's Name" id="fatherName"  required>
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
                  <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Trainee</label>
                </div>
                  <div class="col-md-6">
                  <div class="imageupload">
                    <input class="form-control" type="file" name="image" accept="image/*" onchange="readURL(this);" id="image">
                  </div>
                </div>
                <div class="col-md-6">
                  <figure class="image-container">
                      <img id="responseImage" class="image-style">
                  </figure>
                </div>               
                
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <button type="submit" id="update" class="btn btn-primary">update</button>
                    <a id="delete" name="delete" class="btn btn-danger">Delete</a>
                  </div>
                </div>

              </form>
                    </div>
                    
                  </div>
                </div>
              </div><!-- End Large Modal-->

<!-- TRADE IMAGE MODAL -->
              <div class="modal fade" id="imageModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Image of <span id="tradeTitle"></span></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="trade-image-container">
                        <img class="trade-image-display" src="" id="showTradeImage">
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              
              <!-- TRADE IMAGE MODAL-->
  <!-- ======= Footer ======= -->
  <?php include("include/footer.php");?>

  <script type="text/javascript">

$(document).on("click touch", ".editDelete", function () {
    var dataId = $(this).data('id');
    $('#ModalID').val(dataId);

    $.ajax({
       type: "POST", 
       dataType: "json", 
       url: "fetch/fetch-trainee.php", 
       data: {
          dataId:dataId         
       },
       success: function(response){
        $('#fullName').val(response.fullName);
        $('#fatherName').val(response.fatherName);
        $('#dob').val(response.dob);           
        $('input[name="gender"][value="'+response.gender+'"]').prop('checked',true);
        $('#caste').val(response.caste);
        $('#trade').val(response.trade);
        $('#shift').val(response.shift);
        $('#courseSession').val(response.courseSession);

        $('#responseImage').attr("src",response.image);              
        },
        error: function(error){
            console.log("Error:");
            console.log(error);
        }

    });
    
 });

// Show Trade Image
$(document).on("click touch", ".tradeImageClass", function () {
  var dataId = $(this).data('id');
  var dataName = $(this).data('name');
  $('#tradeTitle').html(dataName);
  $('#showTradeImage').attr("src",dataId);

    
 });


function readURL(input) {
if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e) {
    $('#responseImage').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
} else {
  $('#responseImage').attr('src', '');
}
}

$("#image").change(function() {
readURL(this);
});


</script>
  
  <script>
     $('#update').click(function(e){
      e.preventDefault();
	  var id=$('#ModalID').val();
	  var image=$('#image')[0].files[0];
    var fullName = $('#fullName').val();
    var fatherName = $('#fatherName').val();
    var dob = $('#dob').val();
    var gender = $('input[name="gender"]:checked').val();
    var caste = $('#caste').val();
    var trade = $('#trade').val();
    var shift = $('#shift').val();
    var courseSession = $('#courseSession').val();

	  var formData=new FormData();
    formData.append("image", image);
    formData.append("fullName", fullName);
    formData.append("fatherName", fatherName);
    formData.append("dob", dob);
    formData.append("gender", gender);
    formData.append("caste", caste);
    formData.append("trade", trade);
    formData.append("shift", shift);
    formData.append("courseSession", courseSession);
	  formData.append('id',id);
	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit-trainee.php",
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

  $('#delete').click(function(){
    var id=$('#ModalID').val();
	if(confirm("do you want to delete this data ?")){
		$.ajax({
			type:"post",
			dataType:"json",
			url:"forms/delete-trainee.php",
			data:{dataId:id},
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
	}
  })
   </script>

</body>

</html>