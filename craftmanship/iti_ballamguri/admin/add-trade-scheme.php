<?php include("include/header.php");
$readScheme = $crud->Read("tradescheme","`status`=1");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Schemes Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Trade Schemes, Certificate Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php include("include/topSection.php")?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Please Add The Following Scheme Details</h5>

              <form method="post" enctype="multipart/form-data">
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
                        <label for="seats">Total Seats</label>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-12 col-form-label">Upload Photograph of the Scheme</label>
                  </div>
                  <div class="col-md-10">
                  <div class="imageupload">
                     <input class="form-control" type="file" name="image" accept="image/*"  onchange="readURL(this);" id="upload-image">
                  </div>
                  </div>
                  <div class="col-md-10 mt-5">
                  <figure class="image-container">
                        <img id="chosen-image" class="image-style">
                  </figure>
                  </div>
                  <p class="formError text-danger"></p>
                  <div class="row mb-3">
                     <div class="col-12 text-center">
                        <button type="submit" id="submit" class="btn btn-primary">Submit Form</button>
                     </div>
                  </div>
               </form>

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
  var tradeScheme=$('#tradeScheme').val();
  var certificate=$('#certificate').val();
  var seats=$('#seats').val();

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

  if(!image || !tradeScheme || !certificate || !seats){
    event.preventDefault();
    $('.formError').html("please fill all details to continue !");
  }else{
    $('.formError').html("");
    event.preventDefault();
    var formData=new FormData();
    formData.append("image",image);	
    formData.append("tradeScheme",tradeScheme);	
    formData.append("certificate",certificate);
    formData.append("seats",seats);
    formData.append('ajax',"ajax");			

    $.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      cache: false,
      dataType: "json",
      url: "forms/add_trade_scheme.php",
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
