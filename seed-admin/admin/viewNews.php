<?php include("include/head.php"); ?>
<?php include("include/top_section.php"); ?>
		<!-- start color quick setting -->
		<div class="settingSidebar">
			<a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
			</a>
			<div class="settingSidebar-body ps-container ps-theme-default">
				<div class=" fade show active">
					<div class="setting-panel-header">Setting Panel
					</div>
					<div class="quick-setting slimscroll-style">
						<ul id="themecolors">
							<li>
								<p class="sidebarSettingTitle">Sidebar Color</p>
							</li>
							<li class="complete">
								<div class="theme-color sidebar-theme">
									<a href="#" data-theme="white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header Brand color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color logo-theme">
									<a href="#" data-theme="logo-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="logo-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
							<li>
								<p class="sidebarSettingTitle">Header color</p>
							</li>
							<li class="theme-option">
								<div class="theme-color header-theme">
									<a href="#" data-theme="header-white"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-dark"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-blue"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-indigo"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-cyan"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-green"><span class="head"></span><span
											class="cont"></span></a>
									<a href="#" data-theme="header-red"><span class="head"></span><span
											class="cont"></span></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			
			<?php include("include/sidebar.php"); ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">View Reports/Documents</div>
								 <?php 
		            	if (isset($_SESSION['message'])) {
		            		echo $_SESSION['message'];
		            		unset($_SESSION['message']);
		            	}
		            ?>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								<li class="active">View Reports/Documents</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-body " id="bar-parent">
								
									<div class="data_table">
				                    <table id="example" class="table table-striped table-bordered">
				                        <thead class="gradient">
				                            <tr>
				                                <th>ID</th>
				                                <th>view pdf</th>
				                                <th>News</th>
				                                <th>uploaded date</th>
				                                <th>Action</th>
				                                
				                            </tr>
				                        </thead>
						                    
										<tfoot>
											<tr>
												<th>ID</th>
				                                <th>view pdf</th>
				                                <th>News</th>
				                                <th>uploaded date</th>
				                                <th>Action</th>
											</tr>
										</tfoot>
										 <tbody>
										<?php 
                                        if ($read) {
                                        	$n=0;
                                        	foreach ($read as $news) { ?>
                                        	<tr>
	                                        	<td><?php echo ++$n; ?></td>	
	                                        	
	                                        	<td><a href="<?php echo $news['pdf'] ;?>"><i class="fa fa-file-pdf-o" style="color:red;font-size: 10px"> view</i></a></td>
	                                        	<td><?php echo $news['news'] ;?></td>	
	                                        		
	                                        	<td><?php echo $news['date_uploaded'];?></td>	
	                                        	<!-- <td><a class="tblDelBtn" tabindex="0" aria-controls="example" type="button" a href="#" data-id="<?php echo $news['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn"><span><i class="fa fa-pencil"></i> | <i class="fa fa-trash-o"></i></span></a>
												</td> -->
												<td><a href="<?php echo $news['id'];?>"  data-id="<?php echo $news['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)"  data-id="<?php echo $news['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn">
																<i class="fa fa-trash-o"></i>
															</a>
												</td>
																	
	                                        </tr>	
                                        	<?php }
                                        }
                                        ?>
                                         </tbody>
				                    
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal -->
					
					<div class="modal fade" id="model4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
						    <div class="modal-content">
						      	<div class="modal-header">
					       			<div class="tabbable-line">
								
										<ul class="nav customtab nav-tabs" role="tablist">
											<li class="nav-item"><a href="#tab1" class="nav-link active"
													data-bs-toggle="tab">Edit
													News</a></li>
											
										</ul>
									</div>
						      	
						        	<button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      	</div>
					      	<form action="form/editNews.php" method="post" enctype="multipart/form-data">
					      	<div class="modal-body">
						        <div class="col-sm-12">
									<div class="card-box">
										<div class="card-head">
											<header>News Information</header>
											
										</div>
										<div class="card-body row">
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input type="hidden"  id="aboutID" name="aboutID" class="mdl-textfield__input" >
													
												</div>
											</div>
										
											<div class="col-lg-12 p-t-20">
												<label class="control-label col-md-3">Upload Pdf
												</label>
												<div class="col-md-12">
													<div>
														<input type="file" name="pdf_file" id="pdf_file" accept=".pdf" class="dropzone">
														 
													</div>
												</div>
											</div>

												
											
											
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<label >News</label>
													<input class="mdl-textfield__input" id="news"    name="news" type="text" >
													
												</div>
											</div>
											
											
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<label >uploaded_date</label>
													<input class="mdl-textfield__input" name="date_uploaded" type="text"
														id="date_uploaded">
													
												</div>
												
											</div>
											<div class="col-lg-12 p-t-20 text-center">
												
												<button type="submit" name="formSubmit"
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Update <i class="fa fa-pencil"></i></button>
													
													<a href="" id="deletePortfolio" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-danger">DELETE <i class="fa fa-trash-o"></i></a>
												
											</div>
											
											
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>
			 		</div>
		       	</div>
			       	<!-- model ends -->
			</div>
		</div>
	
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php include("include/footer.php"); ?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- datatable -->
 	
    <script src="../datatable/js/datatables.min.js"></script>
    <script src="../datatable/js/pdfmake.min.js"></script>
    <script src="../datatable/js/vfs_fonts.js"></script>
    <script src="../datatable/js/custom.js"></script>
    	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	



	

	<script type="text/javascript">


	$(document).on("click touch", ".tblEditBtn", function () {
      var dataId = $(this).data('id');
      $('#aboutID').val(dataId);

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "xhr/fetchNews.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
         	var keyed = response.news.replace(/<br ?\/?>/g,"\n");
    		$("#news").val(keyed);
    		
    		var keyed = response.date_uploaded.replace(/<br ?\/?>/g,"\n");
    		$("#date_uploaded").val(keyed);
    		$('#deletePortfolio').attr("href","form/deleteNews.php?id="+dataId);
				$('#responseImage').attr("src",response.image);
            
         },
         error: function(error){
            console.log("Error:");
            console.log(error);
         }

      });
      
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

$("#pdf_file").change(function() {
  readURL(this);
});

</script>

	

</body>



</html>