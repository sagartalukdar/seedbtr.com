<?php include("include/header.php");?>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Navbar</a></li>
          <li class="breadcrumb-item active">Add Banner</li>
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
                  <div class="form-floating">
                    <input type="text" class="form-control" name="head" id="head" placeholder="Your Email">
                    <label for="head">Head</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                    <label for="title">Title</label>
                  </div>
                </div> 
                
                <div class="col-12">
                  <div class="form-floating row">
                    <div class="col-8">
                      <input class="form-control" name="image" type="file" id="upload-image" accept="image/*" >
                    </div>
                    <div class="col-4">
                      <img id="chosen-image" width="100px" height="100px">
                    </div>                  
                    
                  </div>
                </div>
                
                <p class="formError text-danger"></p>
                
                <div class="text-center">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
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
  var head=$('#head').val();
  var title=$('#title').val();
 
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

  if(!image || !head || !title ){
    event.preventDefault();
    $('.formError').html("please fill all details to continue !");
  }else{
    $('.formError').html("");
    event.preventDefault();
    var formData=new FormData();
    formData.append("image",image);	
    formData.append("head",head);	
    formData.append("title",title);
    formData.append('ajax',"ajax");			

    $.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      cache: false,
      dataType: "json",
      url: "forms/add_slider.php",
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