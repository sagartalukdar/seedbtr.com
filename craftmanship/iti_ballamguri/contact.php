<?php include("include/header.php"); ?>
	  
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

<script type="text/javascript">
	let globalEditor;

	// Function to initialize CKEditor
	function initializeCKEditor() {
		CKEDITOR.ClassicEditor
			.create(document.querySelector("#message"), {
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
				placeholder: 'Type your message here .....',
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


			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width: 90vw; display: flex;margin: auto;" >
							<div style="width: 100%;overflow:scroll;">
								<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7143.660447735197!2d89.954098!3d26.461201!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e27f8c693ed6fd%3A0x65497accecfc65c4!2sITI%20CAMPUS%20Bollamguri!5e0!3m2!1sen!2sin!4v1718271706260!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>							
						</div>
						
						<div class="col-lg-12 mt-50">
						<form method="post">
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-lg-6">
										<div class="mb-3">
											<label for="name" class="form-label">Enter Full Name</label>
											<input type="text" class="form-control" id="name">
										</div>
										<div class="mb-3">
											<label for="email" class="form-label">Email address</label>
											<input type="email" class="form-control" id="email">	
											<p class="emailError text-danger"></p>
										</div>
										<div class="mb-3">
											<label for="subject" class="form-label">Enter Subject</label>
											<input type="text" class="form-control" id="subject">	
										</div>
										
									</div>

									<div class="col-md-12 col-lg-6" style="display: flex;margin-top: 45px;">
										<div class="d-flex flex-column address-wrap">
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-home"></span>
												</div>
												<div class="contact-details">
													<h5>
													Ballamguri, Gossaigaon</h5>
													<p>
													783360
													</p>
												</div>
											</div>
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-phone-handset"></span>
												</div>
												<div class="contact-details">
													<h5>
													+91 6000142559</h5>
													<p>Mon to Fri 9am to 6 pm</p>
												</div>
											</div>
											<div class="single-contact-address d-flex flex-row">
												<div class="icon">
													<span class="lnr lnr-envelope"></span>
												</div>
												<div class="contact-details">
													<h5>itiballamguri@gmail.com</h5>
													<p>Send us your query anytime!</p>
												</div>
											</div>														
										</div>
									</div>

									<div class="col-12">
									    <div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label for="message" class="form-label">Enter your Message</label>
											<textarea name="aboutText" id="message"></textarea>
										</div>
										<style>
											.ck-restricted-editing_mode_standard{
											  height:150px;
											}
										</style>
									</div>
									
								</div>

								<div class="text-center mt-20">
									<button type="submit" id="submit" class="btn btn-primary">Submit</button>
								</div>
								
							</div>		  		
							
						</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script>
				$('#submit').click(function(e){                
					var name=$('#name').val();
					var email=$('#email').val();
					var subject=$('#subject').val();
					if(globalEditor){
						var message=globalEditor.getData();
					}
					if(!name || !email || !message || !subject){      
						e.preventDefault();             
						Swal.fire({
						title: "fill all details to continue.",
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
					}else{
						function validateEmail($email) {
						var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
						return emailReg.test($email);
						}
						if (!validateEmail(email)) {
							$(".emailError").html("Please Enter a valid email address.");
							$("#email").focus();
							e.preventDefault();             
						}else{
							var formdata=new FormData();
							formdata.append("name",name);
							formdata.append("email",email);
							formdata.append("subject",subject);
							formdata.append("message",message);
							e.preventDefault();                              
							$(".emailError").html(""); 
							$.ajax({
								type:"post",
								processData: false,
								contentType: false,
								cache: false,
								dataType:"json",
								url:"mail.php",
								data:formdata,
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
					
					}
				})
			</script>
				    			

      <!-- start footer Area -->		
      <?php include("include/footer.php");?>