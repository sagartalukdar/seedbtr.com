<?php include("include/head.php"); ?>
<!-- top section -->
<?php include("include/top_section.php"); ?>

<?php
  $readuser19=$crud->Read("tenders","1 order by `id` desc");
?>

		<!-- end header -->
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
			<!-- sidebar -->
		<?php include("include/sidebar.php"); ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Tenders</div>
								 <?php 
		            	if (isset($_SESSION['message'])) {
		            		echo $_SESSION['message'];
		            		unset($_SESSION['message']);
		            	}
		            ?>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								
								</li>
								<li class="active">View Tenders</li>
							</ol>
						</div>
					</div>

					<style>
						.data_table .col-sm-12 {
							overflow-x: scroll;
						}
						
						td{
							width: 50px;
						}
					</style>


					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-body " id="bar-parent">
								
									<div class="data_table">
				                    <table id="example" class="table table-striped table-bordered">
				                        <thead class="gradient">
				                            <tr>
			                                <th>ID</th>
			                                
		                                 	<th>tender no.</th>
	                                        <th>title</th>
	                                        <th>date of posting</th>
	                                        <th>View Pdf</th>
	                                        <th>action</th>
                                        	
                                        
				                                
				                            </tr>
				                        </thead>
						                    
										<tfoot>
											<tr>
						                <th>ID</th>
						               
						                <th>tender no.</th>
                                        <th>title</th>
                                        <th>date of posting</th>
                                        <th>View Pdf</th>
                                        <th>action</th>
                                        
                                        <!-- <th>Download Pdf</th> -->
											</tr>
										</tfoot>
										 <tbody>
										<?php 
                                        if ($readuser19) {
                                        	$n=0;
                                        	foreach ($readuser19 as $tenders) { ?>
                                        	<tr>
	                                        	<!-- <td><?php echo ++$n; ?></td>	 -->
	                                        	
	                                        	<td><?php echo $tenders['id'];?></td>
	                                        	<td><?php echo $tenders['tenderno'] ;?></td>	
	                                        	<td><?php echo $tenders['title'] ;?></td>	
	                                        		
	                                        	<td><?php echo $tenders['date_uploaded'];?></td>	
	                                        	<td><a href="<?php echo $tenders['image'] ;?>"><i class="fa fa-file-pdf-o" style="color:red;font-size: 10px"> view</i></a></td>	
	                                        	<!-- <td><a class="tblDelBtn" tabindex="0" aria-controls="example" type="button" a href="#" data-id="<?php echo $tenders['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn"><span><i class="fa fa-pencil"></i> | <i class="fa fa-trash-o"></i></span></a>
												</td> -->
												<td><a href="<?php echo $tenders['id'];?>"  data-id="<?php echo $tenders['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn">
																<i class="fa fa-pencil"></i>
															</a>
															<a href="javascript:void(0)"  data-id="<?php echo $tenders['id'];?>"  data-target="#model4" data-toggle="modal" class="tblEditBtn">
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
													Tenders</a></li>
											
										</ul>
									</div>
						      	
						        	<button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      	</div>
					      	<form action="form/editTenders.php" method="post" enctype="multipart/form-data">
					      	<div class="modal-body">
						        <div class="col-sm-12">
									<div class="card-box">
										<div class="card-head">
											<header>News Information</header>
											
										</div>
										<div class="card-body row">
											<div class="col-lg-12 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input type="hidden"  id="aboutID" name="aboutID" class="mdl-textfield__input" >
													
												</div>
											</div>
											
											<div class="col-md-6 " >
														<label class="control-label col-md-3">Upload Pdf
														</label>
														<div>
															<input type="file" style="width: 97%;" name="pdf_file" id="pdf_file" accept=".pdf*" class="dropzone">
															
														</div>
											</div>

										
											
											
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<label >tender no.</label>
													<input class="mdl-textfield__input" id="tenderno"    name="tenderno" type="text" >
													
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<label >title</label>
													<input class="mdl-textfield__input" id="title"    name="title" type="text" >
													
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
         url: "xhr/fetchTender.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
         	var keyed = response.tenderno.replace(/<br ?\/?>/g,"\n");
    		$("#tenderno").val(keyed);
    		var keyed = response.title.replace(/<br ?\/?>/g,"\n");
    		$("#title").val(keyed);
    		var keyed = response.date_uploaded.replace(/<br ?\/?>/g,"\n");
    		$("#date_uploaded").val(keyed);
    		$('#deletePortfolio').attr("href","form/delete-tender.php?id="+dataId);
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