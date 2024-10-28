<?php include "include/head.php" ?>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="cr-agency">

    <!-- ==================== Start progress-scroll-button ==================== -->

    <?php include'include/progressBar.php'; ?>
   
    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start Navbar ==================== -->

    <?php include"include/navbar.php"; ?>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start sticky sidebar ==================== -->

    <?php include'include/contact.php'; ?>

    <?php include'include/searchBar.php'; ?>

    <!-- ==================== End sticky sidebar ==================== -->


    <!-- ==================== Start about Slider ==================== -->
    <?php 
        include('classes/Crud.php');
        $crud=new Crud();
        $otherSlider=$crud->Read("other_slider","1 order by `id` desc");
        if($otherSlider){
            $otherSliderImage=$otherSlider[0]['image'];
          }
    ?>
    <header class="bg-img parallaxie valign" data-background="seed-admin/admin/<?php
     if($otherSlider && $otherSliderImage){
        echo $otherSliderImage;
     }
    ?>"
        data-overlay-dark="5" style="height: 50vh;">
        <div class="container">
            <h1 class="text-center">Feedback </h1>
        </div>
    </header>

    <!-- ==================== End about Slider ==================== -->

    <main class="main-content">


        <!-- ==================== Start Contact Us ==================== -->

        <section class="contact-crv">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="box-shadow to-up">

                         
                            <form method="post">

                                <div class="messages"></div>

                                <div class="row">

                                    <div class="col-12">
                                        <div class="mb-40">
                                            <h5 class="fw-600">Write Your Feedback</h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 md-mb30">
                                        <div class="form-group mb-30">
                                            <input id="name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>

                                        <div class="form-group mb-30">
                                            <input id="email" type="email" name="email" placeholder="Email"
                                                required="required">
                                                <p class="emailError text-danger"></p>
                                        </div>

                                        <div class="form-group">
                                            <input id="subject" type="text" name="subject" placeholder="Subject"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group sam-height">
                                            <textarea id="message" name="message" placeholder="Message" rows="4"
                                                required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="text-center mt-40">
                                            <button type="submit" id="submit">
                                                <span>submit</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                    <div style="background-image: url('assets/img/about/feedback-contact-side-img.PNG'); background-repeat: no-repeat; background-position: center center; opacity: 0.6;"
                        class="col-lg-5">

                    </div>
                </div>
            </div>
            <!-- <form method="post">
                <input type="text" placeholder="bsa">
                <button type="submit">submit</button>
            </form> -->
            <!-- ==================== imgae auto scroll start ==================== -->
            <?php include "include/image-auto-scroll.php" ?>
            <!-- ==================== imgae auto scroll end==================== -->




            <div class="cont-info pt-80 pb-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="item flex md-mb30">
                                        <span class="icon fz-20 mr-10 pe-7s-call"></span>
                                        <h6 class="fz-14">+91 xxxxxxx464</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item flex md-mb30">
                                        <span class="icon fz-20 mr-10 pe-7s-mail"></span>
                                        <h6 class="fz-14">contact@seedbtr.com</h6>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="item flex">
                                        <span class="icon fz-20 mr-10 pe-7s-map-marker"></span>
                                        <h6 class="fz-14">CHD Office, SEED3rd Floor, Utility BuildingBodofa Nagar,
                                            KokrajharAssam, 783370</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            


        </section>

        <!-- ==================== End Contact Us ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->

    </main>

    <script>
        $('#submit').click(function(e){                
            var name=$('#name').val();
            var email=$('#email').val();
            var subject=$('#subject').val();
            var message=$('#message').val();
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
                        url:"seed-admin/admin/form/feedback.php",
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

</body>


</html>