<?php 
  include("include/header.php");
  $readTrades = $crud->Read("trades","`status`=1 order by `id` desc");

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script type="text/javascript">
	let globalEditor;

	// Function to initialize CKEditor
	function initializeCKEditor() {
		CKEDITOR.ClassicEditor
			.create(document.querySelector("#description"), {
				toolbar: {
					items: [
						'exportPDF', 'exportWord', '|',
						'findAndReplace', 'selectAll', '|',
						'heading', '|',
						'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
						'bulletedList', 'numberedList', 'todoList', '|',
						'outdent', 'indent', '|',
						'undo', 'redo',
						'-',
						'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
						'alignment', '|',
						'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
						'specialCharacters', 'horizontalLine', 'pageBreak', '|',
						'textPartLanguage', '|',
						'sourceEditing'
					],
					shouldNotGroupWhenFull: true
				},
				list: {
					properties: {
						styles: true,
						startIndex: true,
						reversed: true
					}
				},
				heading: {
					options: [
						{ model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
						{ model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
						{ model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
						{ model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
						{ model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
						{ model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
						{ model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
					]
				},
				placeholder: 'Type a description.....',
				fontFamily: {
					options: [
						'default',
						'Arial, Helvetica, sans-serif',
						'Courier New, Courier, monospace',
						'Georgia, serif',
						'Lucida Sans Unicode, Lucida Grande, sans-serif',
						'Tahoma, Geneva, sans-serif',
						'Times New Roman, Times, serif',
						'Trebuchet MS, Helvetica, sans-serif',
						'Verdana, Geneva, sans-serif'
					],
					supportAllValues: true
				},
				fontSize: {
					options: [10, 12, 14, 'default', 18, 20, 22],
					supportAllValues: true
				},
				htmlSupport: {
					allow: [
						{
							name: /.*/,
							attributes: true,
							classes: true,
							styles: true
						}
					]
				},
				htmlEmbed: {
					showPreviews: true
				},
				link: {
					decorators: {
						addTargetToExternalLinks: true,
						defaultProtocol: 'https://',
						toggleDownloadable: {
							mode: 'manual',
							label: 'Downloadable',
							attributes: {
								download: 'file'
							}
						}
					}
				},
				mention: {
					feeds: [
						{
							marker: '@',
							feed: [
								'@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
								'@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
								'@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
								'@sugar', '@sweet', '@topping', '@wafer'
							],
							minimumCharacters: 1
						}
					]
				},
				removePlugins: [
					'AIAssistant',
					'CKBox',
					'CKFinder',
					'EasyImage',
					'RealTimeCollaborativeComments',
					'RealTimeCollaborativeTrackChanges',
					'RealTimeCollaborativeRevisionHistory',
					'PresenceList',
					'Comments',
					'TrackChanges',
					'TrackChangesData',
					'RevisionHistory',
					'Pagination',
					'WProofreader',
					'MathType',
					'SlashCommand',
					'Template',
					'DocumentOutline',
					'FormatPainter',
					'TableOfContents',
					'PasteFromOfficeEnhanced',
					'CaseChange'
				]
			})
			.then(editor => {
				globalEditor = editor; // Store the CKEditor instance
			})
			.catch(error => {
				console.error(error);
			});
	}

	// Function to retrieve the value of the CKEditor instance
	// function getJobDescriptionValue() {

	//     if (globalEditor) {

	//         let jobDescriptionValue = globalEditor.getData();

	//         console.log(jobDescriptionValue);
	//     } else {
	//         console.error('CKEditor instance is not initialized yet.');
	//     }
	// }

	// Initialize CKEditor when the DOM content is fully loaded
	document.addEventListener('DOMContentLoaded', initializeCKEditor);
</script>

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
          <li class="breadcrumb-item active">View Trades</li>
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
                  <h5 class="card-title">View Trade <span>| Details</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Sl. No.</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Description</th>
                        <th scope="col">Scheme</th>
                        <th scope="col">Certification</th>
                        <th scope="col">Eligibility</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($readTrades) {
                          $n=1;
                          foreach ($readTrades as $tradeKey) { ?>
                      <tr>
                        <td><?php echo $n++ ;?></td>
                        <th scope="row"><a class="tradeImageClass" data-id="<?php echo $tradeKey['image'];?>" data-name="<?php echo $tradeKey['trade_name'];?>" data-bs-toggle="modal" data-bs-target="#imageModal"><img width="150px" src="<?php echo $tradeKey['image']; ?>"></a></th>
                        <td><a href="#" class="fw-bold"><?php echo $tradeKey['trade_name'] ;?></a></td>
                        <td><?php echo $tradeKey['duration'] ;?></td>
                        <td class="fw-bold"><?php echo strip_tags($tradeKey['description']) ;?></td>
                        <td class="fw-bold"><?php echo $tradeKey['scheme'] ;?></td>
                        <td class="fw-bold"><?php echo $tradeKey['certificate'] ;?></td>
                        <td class="fw-bold"><?php echo $tradeKey['eligibility'] ;?></td>
                       
                        <td><?php if ($tradeKey['status']==1) {
                          echo '<span class="btn btn-success btn-sm">Active</span>';
                        } else echo '<span class="btn btn-danger btn-sm">Paused</span>'; ?></td></button>
                        <td><button type="button" data-id="<?php echo $tradeKey['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">Edit/Delete</button></td></button>

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
                    <input type="text" class="form-control" name="tradeName" id="tradeName" placeholder="Your Email">
                    <label for="tradeName">Trade Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="duration" class="form-control" id="duration" placeholder="Password">
                    <label for="duration">Duration</label>
                  </div>
                </div>
                <div class="col-lg-12 p-t-20">
									<div
										class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label for="description" class="form-label">Description</label>
										<textarea name="description" id="description"></textarea>
									</div>
									<style>
										.ck-restricted-editing_mode_standard {
											height: 150px;
										}
									</style>
								</div>
                <div class="col-md-6">
                           <label class="col-sm-12 col-form-label">Scheme</label>
                          <div class="col-sm-10">
                              <select class="form-select" name="scheme" id="scheme" aria-label="Default select example">
                                 <option selected disabled>Select Scheme</option>
                                 <?php
                                    if($readTrades){
                                    $schemes[]=array();
                                    $i=0;
                                        foreach($readTrades as $list){
                                            $schemes[$i++]=$list['scheme'];
                                        }
                                        $unique_schemes=array_unique($schemes);
                                        asort($unique_schemes); // Sort the array                            
                                        foreach($unique_schemes as $us){                               
                                  ?>
                                    <option value="<?= $us; ?>"><?= $us; ?></option>
                                  <?php
                                      }
                                    }  
                                  ?>
                                 <option value="otherScheme">Others</option>
                              </select>
                          </div>
                        </div>
                       
                        <div class="col-md-6">
                           <label class="col-sm-12 col-form-label">Certification</label>
                          <div class="col-sm-10">
                              <select class="form-select" name="certificate" id="certificate" aria-label="Default select example">
                                 <option selected disabled>Select Certification</option>
                                  <?php
                                    if($readTrades){
                                    $certificate[]=array();
                                    $i=0;
                                        foreach($readTrades as $list){
                                            $certificate[$i++]=$list['certificate'];
                                        }
                                        $unique_certificate=array_unique($certificate);
                                        asort($unique_certificate); // Sort the array                            
                                        foreach($unique_certificate as $uc){                               
                                  ?>
                                    <option value="<?= $uc; ?>"><?= $uc; ?></option>
                                  <?php
                                      }
                                    }  
                                  ?>
                                 <option value="otherCertificate">Others</option>
                              </select>
                          </div>
                        </div>

                        <div class="col-6" id="otherSchemeInput" style="display: none;">
                           <label for="otherScheme" style="color: red">Enter Scheme Name:</label>
                           <div class="col-sm-10">
                              <input type="text" name="otherScheme"  class="form-control" id="otherScheme">
                           </div>
                        </div>
                        <div class="col-6" id="otherCertificateInput" style="display: none;">
                           <label for="otherCertificate" style="color: red">Enter Certification Name:</label>
                           <div class="col-sm-10">
                              <input type="text" name="otherCertificate"  class="form-control" id="otherCertificate">
                           </div>
                        </div>
                        <div class="col-6">
                           <label for="eligibility">Eligibility:</label>
                           <div class="col-sm-10">
                              <input type="text" name="eligibility" id="eligibility" class="form-control" >
                           </div>
                        </div>
                <div class="col-6">
                  <div class="form-floating">
                    <input type="number" max="1" min="0" name="status" class="form-control" id="status" placeholder="status">
                    <label for="status">Status</label>
                  </div>
                </div>
                <div class="modal-footer">                  
                  <button id="update" data-dataId=<?= $tradeKey['id']; ?>  name="submit" class="btn btn-primary">update</button>
                  <a id="delete" data-dataId=<?= $tradeKey['id']; ?> name="delete" class="btn btn-danger">Delete</a>
                </div>
                
                
              </form><!-- End floating Labels Form -->
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
         url: "fetch/fetch_trades.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          $('#tradeName').val(response.trade_name);
          $('#duration').val(response.duration);
          $('#scheme').val(response.scheme);           
          $('#certificate').val(response.certificate);
          $('#eligibility').val(response.eligibility);
          $('#status').val(response.status);
          if(globalEditor){
            globalEditor.setData(response.description);
          }
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
      const schemeSelect = document.getElementById('scheme');
      const otherSchemeInput = document.getElementById('otherSchemeInput');
      
      schemeSelect.addEventListener('change', function() {
        if (schemeSelect.value === 'otherScheme') {
          otherSchemeInput.style.display = 'block';
        } else {
          otherSchemeInput.style.display = 'none';
        }
      });
    </script>
   <script>
      const certificateSelect = document.getElementById('certificate');
      const otherCertificateInput = document.getElementById('otherCertificateInput');
      
      certificateSelect.addEventListener('change', function() {
        if (certificateSelect.value === 'otherCertificate') {
          otherCertificateInput.style.display = 'block';
        } else {
          otherCertificateInput.style.display = 'none';
        }
      });
   </script>

   <script>
     $('#update').click(function(e){
      e.preventDefault();
	  var id=$('#ModalID').val();
	  var image=$('#image')[0].files[0];
    if (globalEditor) {
      var text = globalEditor.getData();
    }
    var tradeName = $('#tradeName').val();
    var duration = $('#duration').val();
    var scheme = $('#scheme').val();
    var otherScheme=$('#otherScheme').val();
    var certificate = $('#certificate').val();
    var otherCertificate=$('#otherCertificate').val();
    var eligibility=$('#eligibility').val();   
    var status=$('#status').val();   

	  var formData=new FormData();
	  formData.append("image", image);
    formData.append("text", text);
    formData.append("tradeName", tradeName);
    formData.append("duration", duration);
    formData.append("scheme", scheme);
    formData.append("otherScheme", otherScheme);
    formData.append("certificate", certificate);
    formData.append("otherCertificate", otherCertificate);			
    formData.append("eligibility", eligibility);
    formData.append("status", status);
	  formData.append('id',id);
	  $.ajax({
    type: "POST",
		processData: false,
		contentType: false,
		cache: false,
		dataType: "json",
		url: "forms/edit_trades.php",
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
			url:"forms/delete_trades.php",
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