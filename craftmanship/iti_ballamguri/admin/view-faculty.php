<?php 
  include("include/header.php");
  $readTrades = $crud->Read("trades","`status`=1");
  $readFaculties = $crud->Read("faculty_details","1 order by `faculty_id` desc");

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
          <li class="breadcrumb-item active">View Faculty</li>
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
                  <h5 class="card-title">View Faculties <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">full_name </th>
                        <th scope="col">designation </th>
                        <th scope="col">qualification </th>
                        <th scope="col">trade </th>
                        <th scope="col">date_of_joining </th>
                        <th scope="col">post </th>
                        <th scope="col">cti trained?</th>
                        
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($readFaculties) {
                          $n=1;
                          foreach ($readFaculties as $facultyKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                        <td><a href="#" class="fw-bold"><?php echo $facultyKey['full_name'] ;?></a></td>
                        <td><?php echo $facultyKey['designation'] ;?></td>
                        <td><?php echo $facultyKey['qualification'] ;?></td>
                        <td><?php echo $facultyKey['trade'] ;?></td>
                        <td><?php echo $facultyKey['date_of_joining'] ;?></td>
                        <td><?php echo $facultyKey['post'] ;?></td>
                        <td><?php echo $facultyKey['CTI_trained'] ;?></td>
                        
                       
                        <th scope="row"><a class="tradeImageClass" data-id="<?php echo $facultyKey['image'];?>" data-name="<?php echo $facultyKey['full_name'];?>" data-bs-toggle="modal" data-bs-target="#imageModal"><img width="150px" src="<?php echo $facultyKey['image']; ?>"></a></th>

                        <td><button type="button" data-id="<?php echo $facultyKey['faculty_id'];?>" data-name="<?php echo $facultyKey['full_name'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button></td></button>

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

              <form method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control"  id="ModalID" name="ModalID" placeholder="">
                      
                    </div>                  
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" placeholder="enter fullname" class="col-sm-2 col-form-label">Full name</label>
                  <div class="col-sm-10">
                    <input type="text" name="full_name" id="fullName"  class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" placeholder="enter designation" class="col-sm-2 col-form-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text"  name="designation" id="designation" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" placeholder="enter qualification"  class="col-sm-2 col-form-label">Qualification</label>
                  <div class="col-sm-10">
                    <input type="text" name="qualification" id="qualification" class="form-control">
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
                  <label for="inputDate"  class="col-sm-2 col-form-label">Date of Joining</label>
                  <div class="col-sm-10">
                    <input type="date" name="date_of_joining" id="date_of_joining" class="form-control">
                  </div>
                </div>
                
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Regular/Adhoc/ Contractual</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="postType" id="postType" aria-label="Default select example">
                      <option selected disabled>select</option>
                      <option value="Regular">Regular</option>
                      <option value="Adhoc">Adhoc</option>
                      <option value="Contractual">Contractual</option>
                      
                    </select>
                  </div>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">CTI trained</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cti" id="ctiyes" value="yes" checked>
                      <label class="form-check-label" for="ctiyes">
                        yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cti" id="ctino" value="no">
                      <label class="form-check-label" for="ctino">
                        no
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                
                <hr class="hr" />
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Faculty</label>
                </div>
                  <div class="col-md-6">
                  <div class="imageupload">
                    <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="image">
                  </div>
                </div>
                <div class="col-md-6">
                  <figure class="image-container">
                      <img id="responseImage" class="image-style">
                  </figure>
                </div>
                
              
                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <button type="submit" id="update" class="btn btn-primary">Update</button>
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
       url: "fetch/fetch_faculty.php", 
       data: {
          dataId:dataId         
       },
       success: function(response){
        $('#fullName').val(response.fullName);
        $('#designation').val(response.designation);
        $('#qualification').val(response.qualification);           
        $('input[name="cti"][value="'+response.cti+'"]').prop('checked',true);
        $('#trade').val(response.trade);
        $('#date_of_joining').val(response.date_of_joining);
        $('#postType').val(response.post);

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
    var designation = $('#designation').val();
    var qualification = $('#qualification').val();
    var cti = $('input[name="cti"]:checked').val();
    var trade = $('#trade').val();
    var date_of_joining = $('#date_of_joining').val();
    var postType = $('#postType').val();

	  var formData=new FormData();
    formData.append("image", image);
    formData.append("fullName", fullName);
    formData.append("designation", designation);
    formData.append("qualification", qualification);
    formData.append("cti", cti);
    formData.append("date_of_joining", date_of_joining);
    formData.append("trade", trade);
    formData.append("postType", postType);
	  formData.append('id',id);
	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit-faculty.php",
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
			url:"forms/delete_faculty.php",
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