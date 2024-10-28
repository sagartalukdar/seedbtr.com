<?php include("include/header.php");
   $electric = $crud->Read("electric_power_supply","1 order by `id` desc");
   ?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

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
               <li class="breadcrumb-item active">View Electric Power supply</li>
            </ol>
         </nav>
      </div>
      <!-- End Page Title -->
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
                           <h5 class="card-title">View Electricity <span>| Details</span></h5>
                           <table class="table table-borderless datatable">
                              <thead>
                                 <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Present Electric Load(in KW)</th>
                                    <th scope="col">Date of Connection</th>
                                    <th scope="col">Connection name</th>
                                    <th scope="col">Image</th>                                   
                                    <th scope="col">actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    if ($electric) {
                                      $n=0;
                                      foreach ($electric as $electric_supply) { ?>
                                 <tr>
                                    <td><?php echo ++$n ;?></td>
                                    <td><?php echo $electric_supply['electric_load'] ;?></td>
                                    <td><a href="#" class="text-primary fw-bold"><?php echo $electric_supply['Date_of_Connection'] ;?></a></td>
                                    <td><?php echo $electric_supply['Connection_name'] ;?></td>
                                    <td><img width="100px" src="<?php echo $electric_supply['image']; ?>"></td>
                                                                    
                                    <td>
                                    <button type="button" data-id="<?php echo $electric_supply['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button>
                                    </td>                                    
                                 </tr>
                                 <?php }}?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!-- End Top Selling -->
               </div>
            </div>
            <!-- End Left side columns -->
         </div>
      </section>
   </main>
   <!-- End #main -->
   <div class="modal fade" id="largeModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Edit</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <h5 class="card-title">Fill Data</h5>
               <!-- Floating Labels Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                     <div class="form-floating">
                        <input type="hidden" name="ModalID" id="ModalID" class="form-control"  placeholder="">                        
                     </div>
                </div>
                <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="electric_load" id="electric_load" class="form-control"  placeholder="">
                        <label for="electric_load">Present Electric Load(in KW)</label>
                     </div>
                </div>
                <div class="col-md-6">
                     <div class="form-floating">
                        <input type="date" name="connection_date" id="connection_date" class="form-control"  placeholder="">
                        <label for="connection_date">Date of Connection</label>
                     </div>
                </div>           
                
                <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="connection_name" id="connection_name" class="form-control"  placeholder="">
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
                      <img id="responseImage" class="image-style">
                  </figure>
                </div>           
                
               <div class="modal-footer">                      
                  <button id="update" data-dataId=<?= $electric_supply['id']; ?>  name="submit" class="btn btn-primary">update</button>
                  <a id="delete" data-dataId=<?= $electric_supply['id']; ?> name="delete" class="btn btn-danger">Delete</a>
               </div>

              </form><!-- End floating Labels Form -->
            </div>
         </div>
      </div>
   </div>
   <!-- End Large Modal-->
   <!-- ======= Footer ======= -->
   <?php include("include/footer.php");?>

  <script type="text/javascript">

    $('.editDelete').click(function(){
      var dataId = $(this).data('id');
      $('#ModalID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "fetch/fetch-electric.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          $('#electric_load').val(response.electric_load);
          $('#connection_name').val(response.connection_name);
          $('#connection_date').val(response.connection_date);
          $('#responseImage').attr("src",response.image);              
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
      var image=$('#upload-image')[0].files[0];			
		var present_electric_load=$('#electric_load').val();
		var connection_date=$('#connection_date').val();
      var connection_name=$('#connection_name').val();

	  var formData=new FormData();
	  formData.append('image',image);
	  formData.append('present_electric_load',present_electric_load);
     formData.append('connection_date',connection_date);
	  formData.append('connection_name',connection_name);	 
	  formData.append('id',id);
	  $.ajax({
      type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit-electric.php",
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
			url:"forms/deleteElectric.php",
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
</body>
</html>
