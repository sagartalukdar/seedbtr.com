<?php include("include/header.php");
   $tradeInfrastructute = $crud->Read("trade_infrastructure","1 order by `id` desc");
   $readTrades = $crud->Read("trades","`status`=1");
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
               <li class="breadcrumb-item active">View Trade Specific Infrastructure, Building and Workshop</li>
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
                           <h5 class="card-title">View Trade Infrastructure <span>| Details</span></h5>
                           <table class="table table-borderless datatable">
                              <thead>
                                 <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Trade</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Class Room Area per Unit</th>
                                    <th scope="col">Total class room area for Trade</th>
                                    <th scope="col">Workshop Area per unit</th>
                                    <th scope="col">Total Workshop area for Trade</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Date_uploaded</th>
                                    <th scope="col">actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    if ($tradeInfrastructute) {
                                      $n=0;
                                      foreach ($tradeInfrastructute as $tradeinfra) { ?>
                                 <tr>
                                    <td><?= ++$n; ?></td>
                                    <td><?php echo $tradeinfra['Trade'] ;?></td>
                                    <td><?php echo $tradeinfra['Unit'] ;?></td>
                                    <td><?php echo $tradeinfra['ClassRoomArea'] ;?></td>
                                    <td class="fw-bold"><?php echo $tradeinfra['TotalClassRoom'] ;?></td>
                                    <td class="fw-bold"><?php echo $tradeinfra['WorkshopArea'] ;?></td>
                                    <td class="fw-bold"><?php echo $tradeinfra['Total_WorkshopArea'] ;?></td>
                                    <td scope="row"><a href="<?php echo $tradeinfra['image'];?>"><img width="100px" src="<?php echo $tradeinfra['image'];?>"></a></td>
                                    <td><span class="badge bg-success"><?php echo $tradeinfra['date_uploaded'] ;?></span></td>
                                    <td>
                                       <button type="button" data-id="<?php echo $tradeinfra['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">Update</button>
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
                        <input type="hidden" class="form-control" id="ModalID" name="trade_infra_id"  placeholder="id">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label class="col-sm-2 col-form-label">Select Trade</label>
                     <div class="col-sm-10">
                    <select class="form-select" name="trade" id="trade" aria-label="Default select example" required>
                      <option selected disabled>Select Trade</option>
                      <?php 
                        if ($readTrades) {
                          foreach ($readTrades as $tradeKey) {
                            echo '<option value="'.$tradeKey["trade_name"].'">'.$tradeKey["trade_name"].'</option>';
                          }
                        }
                      ?>
                      
                    </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="unit" id="unit" class="form-control"  placeholder="Password">
                        <label for="floatingPassword">Unit</label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="classroom_area" id="classroom_area" class="form-control"  placeholder="Password">
                        <label for="floatingPassword">Class RoomArea per Unit</label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="total_classroom_area" class="form-control" id="total_classroom_area" placeholder="Password">
                        <label for="total_classroom_area">Total class room area for Trade </label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" name="workshop_area" id="workshop_area" class="form-control"  placeholder="Password">
                        <label for="floatingPassword">Workshop Area per unit</label>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-floating">
                        <input type="text" name="total_workshop_area" id="total_workshop_area" class="form-control"  placeholder="Password">
                        <label for="total_workshop_area">Total Workshop area for Trade</label>
                     </div>
                  </div>        
                  <div class="col-md-12">
                  <div class="form-floating">
                    <input type="date" name="date_uploaded" class="form-control" id="date_uploaded" placeholder="date">
                    <label for="date_uploaded">Date Uploaded</label>
                  </div>
                </div>
                  <div class="col-md-6">
                     <div class="imageupload">
                        <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <figure class="image-container">
                        <img id="responseImage" class="image-style">
                     </figure>
                  </div>
                  <div class="modal-footer">                     
                     <button id="update" data-dataId=<?php $tradeinfra['id']; ?>  name="submit" class="btn btn-primary">update</button>
                     <!-- <a id="delete" data-dataId=<?php $tradeinfra['id']; ?> name="delete" class="btn btn-danger">Delete</a> -->
                  </div>
               </form>
               <!-- End floating Labels Form -->
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
     url: "fetch/fetch-trade-infrastructure.php", 
     data: {
        dataId:dataId         
     },
     success: function(response){
      $('#trade').val(response.trade);
      $('#unit').val(response.unit);
      $('#classroom_area').val(response.classroom_area);
      $('#total_classroom_area').val(response.total_classroom_area);
      $('#workshop_area').val(response.workshop_area);
      $('#total_workshop_area').val(response.total_workshop_area);
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
var image = $('#upload-image')[0].files[0];
var unit = $('#unit').val();
var classroom_area_per_unit = $('#classroom_area').val();
var total_classroom_area = $('#total_classroom_area').val();
var workshop_area_per_unit = $('#workshop_area').val();
var total_workshop_area = $('#total_workshop_area').val();
var trade = $('#trade').val();
var date_uploaded = $('#date_uploaded').val();

 var formData=new FormData();
   formData.append("image", image);
   formData.append("unit", unit);
   formData.append("classroom_area_per_unit", classroom_area_per_unit);
   formData.append("total_classroom_area", total_classroom_area);
   formData.append("workshop_area_per_unit", workshop_area_per_unit);
   formData.append("total_workshop_area", total_workshop_area);
   formData.append("trade", trade);
   formData.append("date", date_uploaded);
   formData.append('id',id);
 $.ajax({
type: "POST",
  processData: false,
  contentType: false,
  cache: false,
  dataType: "json",
  url: "forms/edit-trade-infrastructure.php",
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

// $('#delete').click(function(){
// var id=$('#ModalID').val();
// if(confirm("do you want to delete this data ?")){
//   $.ajax({
//      type:"post",
//      dataType:"json",
//      url:"forms/delete.php",
//      data:{dataId:id},
//      success: function (response) {
//      if (response.successMessage) {
//         // showSuccessMessage ();
//         // alert("DSA");
//         Swal.fire({
//         title: "SuccessFull !",
//         text: response.successMessage,
//         icon: "success"
//         });
//         setTimeout(function () {
//            window.location.reload();
//         }, 1000);

//      } else if (response.errorMessage) {
//         Swal.fire({
//         title: "Error !",
//         text: response.errorMessage,
//         icon: "error"
//         });
//      }

//   },
//   error: function (error) {
//      Swal.fire({
//         title: "Error !",
//         text: "something went wrong !",
//         icon: "error"
//      });
//   }
//   })
// }
// })

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
