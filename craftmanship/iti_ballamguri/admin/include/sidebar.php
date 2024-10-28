<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         <a class="nav-link " href="index.php">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
         </a>
      </li>
      <!-- End Dashboard Nav -->


      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-menu-button-wide"></i><span>Navbar</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         
         <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
               <a class="nav-link collapsed" data-bs-target="#about-us" data-bs-toggle="collapse" href="#">
               <span>About US</span><i class="bi bi-chevron-down ms-auto "></i>
               </a>
               <ul id="about-us" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                     <a href="add_about_us.php"> 
                     <i class="bi bi-circle"></i><span>Add About US</span>
                     </a>
                  </li>
                  <li>
                     <a href="view_about_us.php">
                     <i class="bi bi-circle"></i><span>View About US</span>
                     </a>
                  </li>           
               </ul>
            </li>

            <li>
               <a class="nav-link collapsed" data-bs-target="#Event" data-bs-toggle="collapse" href="#">
               <span>Event</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="Event" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                  <a href="add_events.php">   
                      <i class="bi bi-circle"></i><span>Add Event</span>
                     </a>
                  </li>
                  <li>
                  <a href="view_events.php">
                     <i class="bi bi-circle"></i><span>View Event</span>
                     </a>
                  </li>
               </ul>    
            </li>


            <li>
               <a class="nav-link collapsed" data-bs-target="#news" data-bs-toggle="collapse" href="#">
               <span>News</span><i class="bi bi-chevron-down ms-auto" ></i>
               </a>
               <ul id="news" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                  <a href="add_news.php"> 
                     <i class="bi bi-circle"></i><span>Add News</span>
                     </a>    
                  </li>
                  <li>
                  <a href="view_news.php">
                     <i class="bi bi-circle"></i><span>View News</span>
                     </a>
                  </li>
               </ul>
            </li>


            <li>
               <a class="nav-link collapsed" data-bs-target="#notice" data-bs-toggle="collapse" href="#">
               <span>Notice</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="notice" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                  <a href="add-notice.php">
                     <i class="bi bi-circle"></i><span>Add Notice</span>
                     </a>
                  </li>
                  <li>
                  <a href="view-notice.php"> 
                     <i class="bi bi-circle"></i><span>View Notice</span>
                     </a>         
                  </li>
               </ul>
            </li>


         </ul>
      </li>
      <!-- End Components Nav -->
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#scheme-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-menu-button-wide"></i><span>Infrastructure</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="scheme-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
               <a class="nav-link collapsed" data-bs-target="#scheme-subnav" data-bs-toggle="collapse" href="#">
               <span>Infrastructure, Building and Workshop</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="scheme-subnav" class="nav-content collapse" data-bs-parent="sub#sidebar-nav">
                  <li>
                     <a href="add-area-infrastructure.php">
                     <i class="bi bi-circle"></i><span>Add Infrastructure, Building and Workshop</span>
                     </a>
                  </li>
                  <li>
                     <a href="view-area-infrastructure.php">
                     <i class="bi bi-circle"></i><span>view Infrastructure, Building and Workshop</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a class="nav-link collapsed" data-bs-target="#trade-subnav" data-bs-toggle="collapse" href="#">
               <span>Trade</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="trade-subnav" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                     <a href="add-trade-infrastructure.php">
                     <i class="bi bi-circle"></i><span>Add Trade Specific Infrastructure, Building and Workshop</span>
                     </a>
                  </li>
                  <li>
                     <a href="view-trade-infrastructure.php">
                     <i class="bi bi-circle"></i><span>View Trade Specific Infrastructure, Building and Workshop</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a class="nav-link collapsed" data-bs-target="#electric-subnav" data-bs-toggle="collapse" href="#">
               <span>Electric Power Supply</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="electric-subnav" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                     <a href="add-electric.php">
                     <i class="bi bi-circle"></i><span>Add Electric Power Supply</span>
                     </a>
                  </li>
                  <li>
                     <a href="view-electric.php">
                     <i class="bi bi-circle"></i><span>View Electric Power Supply</span>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-journal-text"></i><span>Home Page </span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
               <a href="add_slider.php">
               <i class="bi bi-circle"></i><span>Add Banner</span>
               </a>
            </li>
            <li>
               <a href="view_slider.php">
               <i class="bi bi-circle"></i><span>View Banner</span>
               </a>
            </li>
         </ul>
      </li>

<!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#trade-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Trades </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="trade-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
               <a href="add-trades.php">
               <i class="bi bi-circle"></i><span>Add Trades</span>
               </a>
            </li>
            <li>
               <a href="view-trades.php">
               <i class="bi bi-circle"></i><span>View Trades</span>
               </a>
            </li>
          
          
        </ul>
      </li><!-- End Registration Nav -->
      <!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#scheme-trade" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Trade-Scheme-Certificate </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="scheme-trade" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
               <a href="add-trade-scheme.php">
               <i class="bi bi-circle"></i><span>Add Trade-Scheme-Certificate</span>
               </a>
            </li>
            <li>
               <a href="view-trade-scheme-certificate.php">
               <i class="bi bi-circle"></i><span>View Trade-Scheme-Certificate</span>
               </a>
            </li>
            
          
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#gallery-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Photo Gallery </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gallery-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
               <a href="add_photos.php">
               <i class="bi bi-circle"></i><span>Add Photos</span>
               </a>
            </li>
            <li>
               <a href="view_photos.php">
               <i class="bi bi-circle"></i><span>View Photos</span>
               </a>
            </li>
          
          
        </ul>
      </li><!-- End Registration Nav -->
      <!-- End Forms Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reg-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Registration </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="reg-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
              

         <li>
            <a class="nav-link collapsed" data-bs-target="#traineeRegistraion" data-bs-toggle="collapse" href="#">
            <span>Trainee Registraion</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="traineeRegistraion" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
               <li>
                  <a href="trainee-registration.php">  
                     <i class="bi bi-circle"></i><span>Register Trainee </span>
                  </a>
               </li>
               <li>
                  <a href="view-trainees.php">
                    <i class="bi bi-circle"></i><span>View Trainees </span>
                  </a>
               </li>
            </ul>    
         </li>

         <li>
            <a class="nav-link collapsed" data-bs-target="#facultyRegistration" data-bs-toggle="collapse" href="#">
            <span>Faculty Registration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="facultyRegistration" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
               <li>
                  <a href="faculty-registration.php">  
                     <i class="bi bi-circle"></i><span>Register Faculty </span>
                  </a>
               </li>
               <li>
                  <a href="view-faculty.php">
                    <i class="bi bi-circle"></i><span>View Faculty </span>
                  </a>
               </li>
            </ul>    
         </li>


         <li>
            <a class="nav-link collapsed" data-bs-target="#administrativeRegistration" data-bs-toggle="collapse" href="#">
            <span>Administrative Registration</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="administrativeRegistration" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
               <li>
                  <a href="administrative-registration.php">  
                     <i class="bi bi-circle"></i><span>Add Administrative</span>
                  </a>
               </li>
               <li>
                  <a href="view-administrative.php">
                    <i class="bi bi-circle"></i><span>View Administrative </span>
                  </a>
               </li>
            </ul>    
         </li>

          
        </ul>
      </li><!-- End Registration Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#att-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Attendence </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="att-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             
            <li>
               <a class="nav-link collapsed" data-bs-target="#attendenceInstructors" data-bs-toggle="collapse" href="#">
               <span>Attendence of Instructors</span><i class="bi bi-chevron-down ms-auto"></i>
               </a>
               <ul id="attendenceInstructors" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                  <li>
                     <a href="add-attendance-instructors.php">  
                        <i class="bi bi-circle"></i><span>Add </span>
                     </a>
                  </li>
                  <li>
                     <a href="view-attendance-instructors.php">
                         <i class="bi bi-circle"></i><span>View </span>
                     </a>
                  </li>
               </ul>    
            </li>


               <li>
                  <a class="nav-link collapsed" data-bs-target="#traineeAttecndence" data-bs-toggle="collapse" href="#">
                  <span>Attendence of Trainees</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="traineeAttecndence" class="nav-content collapse" data-bs-parent="#subsidebar-nav">
                     <li>
                        <a href="add-attendance-trainees.php">  
                           <i class="bi bi-circle"></i><span>Add </span>
                        </a>
                     </li>
                     <li>
                        <a href="view-attendance-trainee.php">
                          <i class="bi bi-circle"></i><span>View </span>
                        </a>
                     </li>
                  </ul>    
               </li>

          
          
        </ul>
      </li><!-- End Registration Nav -->
   </ul>
</aside>
<!-- End Sidebar-->
