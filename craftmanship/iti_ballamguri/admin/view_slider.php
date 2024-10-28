<?php include("include/header.php");?>

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
          <li class="breadcrumb-item active">view banner</li>
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

          <?php
            $slider=$crud->Read("slider","1 order by `id` desc");
          ?>

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">View slider <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Preview</th>
                        <th scope="col">head</th>
                        <th scope="col">title</th>
                        
                        <th scope="col">date uploaded</th>
                        <th scope="col">actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($slider) {
                          $n=0;
                          foreach ($slider as $banner) { 
                      ?>
                      <tr>
                        <td><?php echo $banner['id'] ;?></td>
                        <th scope="row"><a href="<?php echo $banner['image'];?>"><img width="100px" src="<?php echo $banner['image'];?>"></a></th>
                        <td><a href="#" class="text-primary fw-bold"><?php echo $banner['head'] ;?></a></td>
                        <td><p  style="min-width: 330px;text-align: justify;"><?php echo $banner['title'] ;?></p></td>
                        
                        <td><span class="badge bg-success"><?php echo $banner['date_uploaded'] ;?></span></td>
                        <td><button type="button" data-id="<?php echo $banner['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button></td></button>

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
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <div class="col-sm-10">
                      <input type="hidden" class="form-control"  id="ModalID" name="ModalID" placeholder="">
                      <input class="form-control" name="image" type="file" id="image" accept="image/*" >
                    </div>
                    <img id="responseImage" width="100px" height="100px">
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="head" id="head" placeholder="Your Email">
                    <label for="floatingEmail">Head</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Password">
                    <label for="floatingPassword">Title</label>
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="date" name="date_uploaded" class="form-control" id="date_uploaded" placeholder="Password">
                    <label for="floatingPassword">Date Uploaded</label>
                  </div>
                </div>
                <div class="modal-footer">                      
                  <button id="update" data-dataId=<?= $banner['id']; ?>  name="submit" class="btn btn-primary">update</button>
                  <a id="delete" data-dataId=<?= $banner['id']; ?> name="delete" class="btn btn-danger">Delete</a>
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
     url: "fetch/fetch_slider.php", 
     data: {
        dataId:dataId         
     },
     success: function(response){
      $('#head').val(response.head);
      $('#title').val(response.title);
      $('#date_uploaded').val(response.date_uploaded);
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
var date=$('#date_uploaded').val();
var head=$('#head').val();
var title=$('#title').val();

var formData=new FormData();
formData.append('image',image);
formData.append('date',date);
formData.append('head',head);
formData.append('title',title);
formData.append('id',id);
$.ajax({
type: "POST",
processData: false,
contentType: false,
cache: false,
dataType: "json",
url: "forms/edit_slider.php",
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
  url:"forms/delete_slider.php",
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