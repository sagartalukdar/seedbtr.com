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
			<?php include("include/sidebar.php"); ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Professors List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Professors List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Professors</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	
																	<a href="#" data-target="#model2" data-toggle="modal"
																		class="btn btn-primary">
																		Add New <i class="fa fa-plus"></i>
																	</a>

																</div>
															</div>
														</div>
														<table
															class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
															id="example4">
															<thead>
																<tr>
																	<th></th>
																	<th> Name </th>
																	<th> Department </th>
																	<th> Gender </th>
																	<th> Degree </th>
																	<th> Mobile </th>
																	<th> Email </th>
																	<th>Joining Date</th>
																	<th> Action </th>
																</tr>
															</thead>
															<tbody>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user1.jpg" alt="">
																	</td>
																	<td>Rajesh</td>
																	<td class="left">Computer</td>
																	<td class="left">Male</td>
																	<td class="left">M.Com, B.Ed</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			rajesh@gmail.comsdgfsdfg </a></td>
																	<td class="left">22 Feb 2000</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user10.jpg" alt="">
																	</td>
																	<td>Pooja Patel</td>
																	<td class="left">Mechanical</td>
																	<td class="left">Female</td>
																	<td class="left">M.E.</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			pooja@gmail.com </a></td>
																	<td class="left">27 Aug 2005</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user2.jpg" alt="">
																	</td>
																	<td>Sarah Smith</td>
																	<td class="left">Science</td>
																	<td class="left">Female</td>
																	<td class="left">B.Sc., M.Sc.</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			sarah@gmail.com </a></td>
																	<td class="left">05 Jun 2011</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user3.jpg" alt="">
																	</td>
																	<td>John Deo</td>
																	<td class="left">Music</td>
																	<td class="left">Male</td>
																	<td class="left">B.A.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			john@gmail.com </a></td>
																	<td class="left">15 Feb 2012</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																         <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user4.jpg" alt="">
																	</td>
																	<td>Jay Soni</td>
																	<td class="left">Mathematics</td>
																	<td class="left">10</td>
																	<td class="left">B.B.A., P.H.D.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			kenh@gmail.com </a></td>
																	<td class="left">12 Nov 2012</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																         <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user5.jpg" alt="">
																	</td>
																	<td>Jacob Ryan</td>
																	<td class="left">Computer</td>
																	<td class="left">Male</td>
																	<td class="left">B.E., M.E.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			johnson@gmail.com </a></td>
																	<td class="left">03 Dec 2001</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user6.jpg" alt="">
																	</td>
																	<td>Megha Trivedi</td>
																	<td class="left">Mathematics</td>
																	<td class="left">Female</td>
																	<td class="left">M.COM, M.Ed.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			megha@gmail.com </a></td>
																	<td class="left">17 Mar 2013</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user1.jpg" alt="">
																	</td>
																	<td>Rajesh</td>
																	<td class="left">Computer</td>
																	<td class="left">Male</td>
																	<td class="left">M.Com, B.Ed</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			rajesh@gmail.com </a></td>
																	<td class="left">22 Feb 2000</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user10.jpg" alt="">
																	</td>
																	<td>Pooja Patel</td>
																	<td class="left">Mechanical</td>
																	<td class="left">Female</td>
																	<td class="left">M.E.</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			pooja@gmail.com </a></td>
																	<td class="left">27 Aug 2005</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																         <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user2.jpg" alt="">
																	</td>
																	<td>Sarah Smith</td>
																	<td class="left">Science</td>
																	<td class="left">Female</td>
																	<td class="left">B.Sc., M.Sc.</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			sarah@gmail.com </a></td>
																	<td class="left">05 Jun 2011</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																         <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user3.jpg" alt="">
																	</td>
																	<td>John Deo</td>
																	<td class="left">Music</td>
																	<td class="left">Male</td>
																	<td class="left">B.A.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			john@gmail.com </a></td>
																	<td class="left">15 Feb 2012</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user4.jpg" alt="">
																	</td>
																	<td>Jay Soni</td>
																	<td class="left">Mathematics</td>
																	<td class="left">10</td>
																	<td class="left">B.B.A., P.H.D.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			kenh@gmail.com </a></td>
																	<td class="left">12 Nov 2012</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user5.jpg" alt="">
																	</td>
																	<td>Jacob Ryan</td>
																	<td class="left">Computer</td>
																	<td class="left">Male</td>
																	<td class="left">B.E., M.E.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			johnson@gmail.com </a></td>
																	<td class="left">03 Dec 2001</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																         <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																		<img src="../assets/img/user/user6.jpg" alt="">
																	</td>
																	<td>Megha Trivedi</td>
																	<td class="left">Mathematics</td>
																	<td class="left">Female</td>
																	<td class="left">M.COM, M.Ed.</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td><a href="mailto:shuxer@gmail.com">
																			megha@gmail.com </a></td>
																	<td class="left">17 Mar 2013</td>
																	<td>
																		<a href="#"  data-target="#model3" data-toggle="modal" class="tblEditBtn">
																        <i class="fa fa-pencil"></i>
															            </a>
																		<a class="tblDelBtn">
																			<i class="fa fa-trash-o"></i>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user4.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jay Soni </div>
																<div class="name-center"> Music </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user5.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jacob Ryan </div>
																<div class="name-center"> Commerce </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user6.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Megha Trivedi </div>
																<div class="name-center"> Mechanical </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="../assets/img/user/user3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
					<div class="modal fade" id="model3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
						    <div class="modal-content">
						      <div class="modal-header">
					       			<div class="tabbable-line">
					       				<ul class="nav customtab nav-tabs" role="tablist">
									       <li class="nav-item"><a href="#tab1" class="nav-link active"data-bs-toggle="tab">Edit Data</a></li>
									       									
										</ul>
									</div>
								      	
						           

						        <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        <div class="col-sm-12">
									<div class="card-box">
										<div class="card-head">
											<header>Basic Information</header>
											<button id="panel-button"
												class="mdl-button mdl-js-button mdl-button--icon pull-right"
												data-upgraded=",MaterialButton">
												<i class="material-icons">more_vert</i>
											</button>
											<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
												data-mdl-for="panel-button">
												<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
												</li>
												<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
												</li>
												<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
													here</li>
											</ul>
										</div>
										<div class="card-body row">
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="Jayesh"
														id="txtFirstName">
													<label class="mdl-textfield__label">First Name</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="Joshi"
														id="txtLasttName">
													<label class="mdl-textfield__label">Last Name</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="email" value="test@example.com"
														id="txtemail">
													<label class="mdl-textfield__label">Email</label>
													<span class="mdl-textfield__error">Enter Valid Email Address!</span>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="2017-12-20"
														id="date">
													<label class="mdl-textfield__label">Joining Date</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="password" id="txtPwd">
													<label class="mdl-textfield__label">Password</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="password" id="txtConfirmPwd">
													<label class="mdl-textfield__label">Confirm Password</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="Jr. Professor"
														id="designation">
													<label class="mdl-textfield__label">Designation</label>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input class="mdl-textfield__input" type="text" id="list2" value="Computer"
														readonly tabIndex="-1">
													<label for="list2" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="list2" class="mdl-textfield__label">Department</label>
													<ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item" data-val="DE">Computer</li>
														<li class="mdl-menu__item" data-val="BY">Mechanical</li>
														<li class="mdl-menu__item" data-val="BY">Mathematics</li>
														<li class="mdl-menu__item" data-val="BY">Commerce</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
													<input class="mdl-textfield__input" type="text" id="sample2" value="Male"
														readonly tabIndex="-1">
													<label for="sample2" class="pull-right margin-0">
														<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
													</label>
													<label for="sample2" class="mdl-textfield__label">Gender</label>
													<ul data-mdl-for="sample2"
														class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
														<li class="mdl-menu__item" data-val="DE">Male</li>
														<li class="mdl-menu__item" data-val="BY">Female</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="1234567890"
														pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
													<label class="mdl-textfield__label" for="text5">Mobile Number</label>
													<span class="mdl-textfield__error">Number required!</span>
												</div>
											</div>
											<div class="col-lg-6 p-t-20">
												<div
													class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
													<input class="mdl-textfield__input" type="text" value="1987-05-23"
														id="dateOfBirth">
													<label class="mdl-textfield__label">Birth Date</label>
												</div>
											</div>
											<div class="col-lg-12 p-t-20">
												<div class="mdl-textfield mdl-js-textfield txt-full-width">
													<textarea class="mdl-textfield__input" rows="4"
														id="text7">34, Prabhat Appartment, New Delhi</textarea>
													<label class="mdl-textfield__label" for="text7">Address</label>
												</div>
											</div>
											<div class="col-lg-12 p-t-20">
												<label class="control-label col-md-3">Upload Photo
												</label>
												<div class="col-md-12">
													<div id="id_dropzone" class="dropzone"></div>
												</div>
											</div>
											<div class="col-lg-12 p-t-20">
												<div class="mdl-textfield mdl-js-textfield txt-full-width">
													<textarea class="mdl-textfield__input" rows="4"
														id="education">B.com, B.Ed</textarea>
													<label class="mdl-textfield__label" for="text7">Education</label>
												</div>
											</div>
											<div class="col-lg-12 p-t-20 text-center">
												<button type="button"
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
												<button type="button"
													class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
			       	</div>
				<!-- Modal -->
					<div class="modal fade" id="model2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
						    <div class="modal-content">
						      <div class="modal-header">
					       			<div class="tabbable-line">
								
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active"
											data-bs-toggle="tab">Add
											New</a></li>
									
								</ul>
							</div>
						      	
						           

						        <button type="button" data-dismiss="modal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        <div class="col-sm-12">
									<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName">
											<label class="mdl-textfield__label">First Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName">
											<label class="mdl-textfield__label">Last Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" id="txtemail">
											<label class="mdl-textfield__label">Email</label>
											<span class="mdl-textfield__error">Enter Valid Email Address!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="date">
											<label class="mdl-textfield__label">Joining Date</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="password" id="txtPwd">
											<label class="mdl-textfield__label">Password</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="password" id="txtConfirmPwd">
											<label class="mdl-textfield__label">Confirm Password</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="designation">
											<label class="mdl-textfield__label">Designation</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="list2" value="" readonly
												tabIndex="-1">
											<label for="list2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="list2" class="mdl-textfield__label">Department</label>
											<ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Computer</li>
												<li class="mdl-menu__item" data-val="BY">Mechanical</li>
												<li class="mdl-menu__item" data-val="BY">Mathematics</li>
												<li class="mdl-menu__item" data-val="BY">Commerce</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value=""
												readonly tabIndex="-1">
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Gender</label>
											<ul data-mdl-for="sample2"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Male</li>
												<li class="mdl-menu__item" data-val="BY">Female</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text"
												pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
											<label class="mdl-textfield__label" for="text5">Mobile Number</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="dateOfBirth">
											<label class="mdl-textfield__label">Birth Date</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="text7"></textarea>
											<label class="mdl-textfield__label" for="text7">Address</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<label class="control-label col-md-3">Upload Photo
										</label>
										<div class="col-md-12">
											<div id="id_dropzone" class="dropzone"></div>
										</div>
									</div>
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield txt-full-width">
											<textarea class="mdl-textfield__input" rows="4" id="education"></textarea>
											<label class="mdl-textfield__label" for="text7">Education</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
		       	</div>
		       	
	        </div>
		
			<!-- end page content -->
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
									class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start User Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="../assets/img/user/user3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="../assets/img/user/user1.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="../assets/img/user/user4.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Computer</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="../assets/img/user/user6.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="../assets/img/user/user9.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../assets/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End User Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end chat sidebar -->
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
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>


	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
</body>

</html>