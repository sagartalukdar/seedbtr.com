<?php include("include/header.php");?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script type="text/javascript">
	let globalEditor;

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

  <?php ("include/topSection.php");?>

  <?php include("include/sidebar.php");?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#0">Navbar</a></li>
          <li class="breadcrumb-item active">Add Notice</li>
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
              <form class="row g-3" method="post">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" name="Notice" class="form-control" id="Notice" placeholder="Notice Head">
                    <label for="Notice">Notice Head</label>
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

    <script>
    
		$('#submit').click(function(event){
			if(globalEditor){
				var text=globalEditor.getData();
			}			
			var notice=$('#Notice').val();

      if(!notice || !text ){
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			}else{
				$('.formError').html("");
				event.preventDefault();
				var formData=new FormData();
				formData.append("notice",notice);	
				formData.append("text",text);
        formData.append('ajax',"ajax");			

				$.ajax({
					type: "POST",
					processData: false,
					contentType: false,
					cache: false,
					dataType: "json",
					url: "forms/add_notice.php",
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

      if(globalEditor){
        globalEditor.setData("");
      }

    })

	</script>

</body>

</html>