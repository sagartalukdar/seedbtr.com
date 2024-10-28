<?php include("include/header.php");?>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script type="text/javascript">
	let globalEditor;
	let globalEditor2;
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
				placeholder: 'Type a brief description....',
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
			.create(document.querySelector("#venue"), {
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
				placeholder: 'Enter Venaue Details',
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
  document.addEventListener('DOMContentLoaded', initializeCKEditor2);
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
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item">Navbar</li>
          <li class="breadcrumb-item active">View Events</li>
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
                  <h5 class="card-title">View Events <span>| Details</span></h5>

                  <?php
                     $readEvents=$crud->Read("events","1 order by `id` desc");
                  ?>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Preview</th>
                        <th scope="col">head</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">venue</th>
                        <th scope="col">date uploaded</th>
                        <th scope="col">actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                          if ($readEvents) {
                            $n=0;
                            foreach ($readEvents as $event) { 
                      ?>
                      <tr>
                        <td><?php echo $event['id'] ;?></td>
                        <th scope="row">
                          <a href="<?= $event['image']; ?>"><img width="100px" src="<?php echo $event['image'];?>"></a>
                        </th>
                        <td>
                          <a href="#" class="text-primary fw-bold"><?php echo $event['head'] ;?></a>
                        </td>
                        <td><?php echo $event['title'] ;?></td>
                        <td class="fw-bold"><p  style="min-width: 530px;text-align: justify;"><?php echo strip_tags($event['description']) ;?></p></td>
                        <td class="fw-bold"><?php echo strip_tags($event['venue']) ;?></td>
                        <td><span class="badge bg-success"><?php echo $event['date_uploaded'] ;?></span></td>
                        <td>
                          <button type="button" data-id="<?php echo $event['id'];?>" class="btn btn-outline-danger btn-sm editDelete"  data-bs-toggle="modal" data-bs-target="#largeModal">edit/delete</button>
                        </td>
                      
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
                    <input type="text" class="form-control" name="head" id="head" placeholder="head">
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
                  <label for="description">Description</label>
                  <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Description" id="description" style="height: 100px;"></textarea>                   
                  </div>
                  <style>
                    .ck-restricted-editing_mode_standard{
                      height:150px;
                    }
                  </style>
                </div>
                <div class="col-12">
                  <label for="venue">Venue</label>
                  <div class="form-floating">
                    <textarea class="form-control" name="venue" placeholder="venue" id="venue" style="height: 100px;"></textarea>                   
                  </div>
                  <style>
                    .ck-restricted-editing_mode_standard{
                      height:150px;
                    }
                  </style>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="date" name="date_uploaded" class="form-control" id="date_uploaded" placeholder="date">
                    <label for="date_uploaded">Date Uploaded</label>
                  </div>
                </div>
                <div class="modal-footer">
                      
                      <button id="update" data-dataId=<?= $event['id']; ?>  name="submit" class="btn btn-primary">update</button>
                      <a id="delete" data-dataId=<?= $event['id']; ?> name="delete" class="btn btn-danger">Delete</a>
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
         url: "fetch/fetch_events.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
          $('#head').val(response.head);
          $('#title').val(response.title);
          $('#date_uploaded').val(response.date_uploaded);
          if(globalEditor){
            globalEditor.setData(response.description);
          }
          if(globalEditor2){
            globalEditor2.setData(response.venue);
          }
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
	  if(globalEditor){
		var text=globalEditor.getData();
	  }
    if(globalEditor2){
		var venue=globalEditor2.getData();
	  }
	  var date=$('#date_uploaded').val();
	  var head=$('#head').val();
	  var title=$('#title').val();

	  var formData=new FormData();
	  formData.append('image',image);
	  formData.append('text',text);
    formData.append('venue',venue);
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
		url: "forms/edit_events.php",
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
			url:"forms/delete_events.php",
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