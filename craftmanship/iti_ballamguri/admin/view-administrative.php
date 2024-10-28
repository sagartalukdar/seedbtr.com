<?php 
  include("include/header.php");
  $readAdministrative = $crud->Read("administrative_details","`status`=1 order by `administrative_id` desc");

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
          <li class="breadcrumb-item active">View Administtative Staff</li>
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
                  <h5 class="card-title">View Administrative Staff <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Staff name </th>
                        <th scope="col">Qualification </th>
                        <th scope="col">Designation </th>
                        <th scope="col">date_of_joining </th>
                        
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($readAdministrative) {
                          $n=1;
                          foreach ($readAdministrative as $administrativeKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                        <td><?php echo $administrativeKey['staff_name'] ;?></td>
                        <td><?php echo $administrativeKey['qualification'] ;?></td>
                        <td><?php echo $administrativeKey['designation'] ;?></td>
                        <td><?php echo $administrativeKey['date_of_joining'] ;?></td>                    
                                               
                        <th scope="row"><a class="tradeImageClass" data-id="<?php echo $administrativeKey['image'];?>" data-name="<?php echo $administrativeKey['staff_name'];?>" data-bs-toggle="modal" data-bs-target="#imageModal"><img width="150px" src="<?php echo $administrativeKey['image']; ?>"></a></th>

                        <td><button type="button" data-id="<?php echo $administrativeKey['administrative_id'];?>" data-name="<?php echo $administrativeKey['staff_name'];?>" class="btn btn-outline-danger btn-sm  editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button></td></button>

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
                  <label for="staffName" placeholder="enter staff name" class="col-sm-2 col-form-label">Name of Staff</label>
                  <div class="col-sm-10">
                    <input type="text" name="staffName" id="staffName" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="qualification" placeholder="enter staff name"  class="col-sm-2 col-form-label">Qualification</label>
                  <div class="col-sm-10">
                    <input type="text" name="qualification" id="qualification" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="designation" placeholder="enter designation" class="col-sm-2 col-form-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text" name="designation" id="designation" class="form-control">
                  </div>
                </div>               
                
                <div class="row mb-3">
                  <label for="date_of_joining" class="col-sm-2 col-form-label">Date of Joining</label>
                  <div class="col-sm-10">
                    <input type="date" name="date_of_joining" id="date_of_joining" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="status" placeholder="enter designation" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" name="status" id="status" class="form-control">
                  </div>
                </div>
                
                <hr class="hr" />
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Administrative</label>
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
       url: "fetch/fetch_administrative.php", 
       data: {
          dataId:dataId         
       },
       success: function(response){
        $('#staffName').val(response.staffName);
        $('#designation').val(response.designation);
        $('#qualification').val(response.qualification);         
        $('#date_of_joining').val(response.date_of_joining);
        $('#status').val(response.status);
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
  	var staffName = $('#staffName').val();
    var designation = $('#designation').val();
    var qualification = $('#qualification').val();
    var date_of_joining = $('#date_of_joining').val();
    var status = $('#status').val();

	  var formData=new FormData();
    formData.append("image", image);
    formData.append("staffName", staffName);
    formData.append("designation", designation);
    formData.append("qualification", qualification);
    formData.append("date_of_joining", date_of_joining);
    formData.append('status', status);
	  formData.append('id',id);
	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit-administrative.php",
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
			url:"forms/delete_administrative.php",
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