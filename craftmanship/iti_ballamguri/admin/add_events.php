<?php include("include/header.php");?>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script type="text/javascript">
	let globalEditor;
  let globalEditor2;
	// Function to initialize CKEditor
	function initializeCKEditor() {
		CKEDITOR.ClassicEditor
			.create(document.querySelector("#Description"), {
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

  function initializeCKEditor2() {
		CKEDITOR.ClassicEditor
			.create(document.querySelector("#Venue"), {
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
				placeholder: 'Enter Venue Details ',
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
				globalEditor2 = editor; // Store the CKEditor instance
			})
			.catch(error => {
				console.error(error);
			});
	}

	document.addEventListener('DOMContentLoaded', initializeCKEditor);
  document.addEventListener('DOMContentLoaded', initializeCKEditor2);
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#0">Navbar</a></li>
          <li class="breadcrumb-item active">Add Events</li>
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
                    <input type="text" name="Head" class="form-control" id="Head" placeholder="Head">
                    <label for="Head">Head</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="title" class="form-control" id="Title" placeholder="Password">
                    <label for="Title">Title</label>
                  </div>
                </div>
                <div class="col-lg-12 p-t-20">
                      <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <label for="Description" class="form-label">Description</label>
                        <textarea name="Description" id="Description"></textarea>
                      </div>
                      <style>
                        .ck-restricted-editing_mode_standard{
                          height:150px;
                        }
                      </style>
                </div>
                <div class="col-lg-12 p-t-20">
                      <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <label for="Venue" class="form-label">Venue</label>
                        <textarea name="Venue" id="Venue"></textarea>
                      </div>
                      <style>
                        .ck-restricted-editing_mode_standard{
                          height:150px;
                        }
                      </style>
                </div>
                <div class="col-md-6">
                  <div class="imageupload">
                    <input class="form-control" type="file" name="image" accept="image/*"   onchange="readURL(this);" id="upload-image">
                  </div>
                </div>
                <div class="col-md-6">
                  <figure class="image-container">
                      <img id="chosen-image" class="image-style">
                  </figure>
                </div>
                
                  <p class="formError text-danger"></p>
                
                <div class="text-center">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
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
    reader.onload = function(e) {
      if(input.id === 'image') {
        $('#responseImage').attr('src', e.target.result);
      } 
    };
    reader.readAsDataURL(input.files[0]);
  }

  }

$("#image").change(function() {
  readURL(this);
});

    </script>

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
			if(globalEditor){
				var text=globalEditor.getData();
			}
      if(globalEditor2){
				var venue=globalEditor2.getData();
			}			
			var head=$('#Head').val();
			var title=$('#Title').val();

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

            if(!image || !text || !head || !title || !venue){
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			}else{
				$('.formError').html("");
				event.preventDefault();
				var formData=new FormData();
				formData.append("image",image);	
				formData.append("head",head);	
				formData.append("title",title);
				formData.append("text",text);
        formData.append("venue",venue);
        formData.append('ajax',"ajax");			

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_events.php",
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

    $('#reset').click(function(e){
      let chosenImage = document.getElementById("chosen-image");
      chosenImage.setAttribute("src","");
      
      if(globalEditor){
        globalEditor.setData("");
      }
      if(globalEditor2){
        globalEditor2.setData("");
      }

    })

	</script>

</body>

</html>