<?php include("include/header.php");
$readScheme = $crud->Read("tradescheme","`status`=1");
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

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add The Trades Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Add Trades</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php include("include/topSection.php")?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Please Add The Following Trade Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="tradeName" id="tradeName" placeholder="Please Enter the Trade Name" required>
                    <label for="tradeName">Please Enter the Trade Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="duration" class="form-control" id="duration" placeholder="Duration" required>
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
                                    if ($readScheme) {
                                      foreach ($readScheme as $schemeKey) {
                                        echo '<option value="'.$schemeKey["scheme"].'">'.$schemeKey["scheme"].'</option>';
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
                                    if ($readScheme) {
                                      foreach ($readScheme as $schemeKey) {
                                        echo '<option value="'.$schemeKey["certificate"].'">'.$schemeKey["certificate"].'</option>';
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
                    <div class="imageupload">
                      <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image" required>
                    </div>
                  </div>
                  <div class="col-md-12 text-center">
                    <figure class="image-container">
                        <img id="chosen-image" class="image-style" required>
                    </figure>
                  </div>
                
                  <p class="formError text-danger"></p>

                <div class="text-center">
                  <button type="submit" name="submit" id="submit"
                    class="btn btn-primary">Submit</button>
                  <button type="reset" id="reset" class="btn btn-secondary">Reset</button>
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

<script type="text/javascript">
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					if (input.id === 'image') {
						$('#responseImage').attr('src', e.target.result);
					}
				};
				reader.readAsDataURL(input.files[0]);
			}

		}

		$("#image").change(function () {
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
		let uploadImage = document.getElementById("upload-image");
		let chosenImage = document.getElementById("chosen-image");

		uploadImage.onchange = () => {
			let reader = new FileReader();
			reader.readAsDataURL(uploadImage.files[0]);
			reader.onload = () => {
				chosenImage.setAttribute("src", reader.result);
			}
			fileName.textContent = uploadImage.files[0].name;
		}
	</script>

	<script>

		$('#submit').click(function (event) {
			var image = $('#upload-image')[0].files[0];
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

			if (!image) {
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

			if (!image || !text || !tradeName || !duration || !scheme || (scheme==="otherScheme" && !otherScheme) || !certificate  || (certificate==="otherCertificate" && !otherCertificate) || !eligibility ) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();

				formData.append("image", image);
				formData.append("text", text);
				formData.append("tradeName", tradeName);
				formData.append("duration", duration);
				formData.append("scheme", scheme);
				formData.append("otherScheme", otherScheme);
				formData.append("certificate", certificate);
				formData.append("otherCertificate", otherCertificate);			
				formData.append("eligibility", eligibility);
				formData.append('ajax', "ajax");

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add-trades.php",
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
							}, 1500);

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

		$('#reset').click(function (e) {
			let chosenImage = document.getElementById("chosen-image");
			chosenImage.setAttribute("src", "");

			if (globalEditor) {
				globalEditor.setData("");
			}

		})

	</script>


</body>
</html>

