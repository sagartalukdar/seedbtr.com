<?php 
  include("include/header.php");
  // $readTrades = $crud->Read("trades","1");
  $tradescheme = $crud->Read("tradescheme","`status`=1 order by `id` desc");

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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
          <li class="breadcrumb-item active">View Trade Schemes, Certificate Details</li>
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
                  <h5 class="card-title">View Trade-Scheme<span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Scheme</th>
                        <th scope="col">Certificate</th>
                        <th scope="col">Total Seats</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($tradescheme) {
                          $n=1;
                          foreach ($tradescheme as $tradeKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                      
                        <td class="fw-bold"><?php echo $tradeKey['scheme'] ;?></td>
                        <td class="fw-bold"><?php echo $tradeKey['certificate'] ;?></td>
                        <td class="fw-bold"><?php echo $tradeKey['total_seats'] ;?></td>
                        
                        <td class="fw-bold"> <img width="150px" src="<?php echo $tradeKey['image'] ;?>"></td>
                       
                        <td><?php if ($tradeKey['status']==1) {
                          echo '<span class="btn btn-success btn-sm">Active</span>';
                        } else echo '<span class="btn btn-danger btn-sm">Paused</span>'; ?></td></button>
                        <td><button type="button" data-id="<?php echo $tradeKey['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button></td></button>

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
                      <h5 class="modal-title">Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h5 class="card-title">Fill Data</h5>

              <!-- Floating Labels Form -->
              <form method="post" enctype="multipart/form-data" action="forms/edit_trade_scheme.php">
                <div class="col-sm-10">
                      <input type="hidden" class="form-control"  id="ModalID" name="schemeID" placeholder="">
                      
                    </div>
                      <div class="row mb-3">
                         <label class="col-sm-2 col-form-label">Trade-Scheme</label>
                         <div class="col-sm-10">
                            <select class="form-select" name="trade_scheme" id="tradeScheme" aria-label="Default select example">
                               <option selected disabled>Select Scheme</option>
                               <option value="Craftsmen Training Scheme(CTS)">Craftsmen Training Scheme(CTS)</option>
                               <option value="PMKVY 4.0">PMKVY 4.0</option>
                              
                            </select>
                         </div>
                      </div>
                      <div class="row mb-3">
                         <label class="col-sm-2 col-form-label">Certification</label>
                         <div class="col-sm-10">
                            <select class="form-select" name="certification" id="certificate" aria-label="Default select example">
                               <option selected disabled>Select Certification</option>
                               <option value="NCVT(National Council for Vocational Training)">NCVT(National Council for Vocational Training)</option>
                               <option value="SCVT(State Council for Vocational Training)">SCVT(State Council for Vocational Training)</option>
                              
                            </select>
                         </div>
                      </div>
                      <div class="row mb-3">
                         <label class="col-sm-2 col-form-label">Total Seats</label>
                          <div class="col-sm-10">
                            <div class="form-floating">
                              <input type="text" name="seats" class="form-control" id="seats" placeholder="Total Seats" required>
                              <label for="duration">Total Seats</label>
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Scheme</label>
                      </div>
                        <div class="col-md-10">
                        <div class="imageupload">
                          <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="image">
                        </div>
                      </div>
                      <div class="col-md-10">
                        <figure class="image-container">
                            <img id="responseImage" class="image-style">
                        </figure>
                      </div>
                        
                        <div class="row mb-3">
                           <div class="col-12 text-center">
                              <button type="submit" name="submit" id="update" class="btn btn-primary">Update</button>
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

    $('.editDelete').click(function(){
      var dataId = $(this).data('id');
      $('#ModalID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "fetch/fetch_trade_scheme.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          $('#tradeScheme').val(response.scheme);
          $('#certificate').val(response.certificate);
          $('#seats').val(response.seats);
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
      var image=$('#image')[0].files[0];			
		  var tradeScheme=$('#tradeScheme').val();
		  var certificate=$('#certificate').val();
      var seats=$('#seats').val();

	  var formData=new FormData();
	  formData.append('image',image);
	  formData.append('tradeScheme',tradeScheme);
     formData.append('certificate',certificate);
	  formData.append('seats',seats);	 
	  formData.append('id',id);
	  $.ajax({
      type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit_trade_scheme.php",
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

