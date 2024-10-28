<?php include'include/head.php'; ?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
  include 'classes/Crud.php';
  $crud=new Crud();
  $reports_documents=$crud->Read("reports_documents","1 order by `id` desc");

    function customPrint($input){
        if(strlen($input)>130){
            echo substr($input,0,130)."- <br/>";
            customPrint(substr($input,130));
        }else{
            echo $input;
        }
    } 
?>                        

<body class="cr-agency" style="background-color: rgb(234, 241, 248);">



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

    <style>
        .dt-button{
            border: none;
            background-color:white;  
            padding: 4px;         
        }
        .dt-button span{
            border: none;
            padding: 3px 20px;
            border: none !important;
            outline: none !important;
            background: linear-gradient(#c49fbf, transparent,rgb(189, 151, 199));
            border-radius: 10px;
            color: rgb(32, 28, 28);
            font-weight: 700;
            margin-left: 10px;
        }
        .dt-layout-cell{
            overflow-x: scroll;
        }
    </style>
   
    <!-- ==================== Start Slider ==================== -->
    <?php 
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
            <h1 class="text-center">Reports & Documents</h1>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <main class="main-content" style="background-color: rgb(231, 237, 243);">

        <!-- ==================== Start Sec-half ==================== -->
       

        <div class="table-responsive pb-10" style="background-color: #fff; margin: 1rem; padding: 20px;border-radius: 15px;">
                            
            <!-- datatable -->
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align:left;">sl no.</th>
                        <th>Details</th>
                        <th>View Pdf</th>
                        <th>Download Pdf</th>
                    </tr>                                
                </thead>
                <tbody>
                    <?php
                        if($reports_documents){
                            $c=0;
                            foreach($reports_documents as $rd){
                                $c++;
                    ?>
                    <tr>
                        <td style="text-align:left;"><?= $c; ?></td>
                        <td>
                           <?php
                            $news=strip_tags($rd['news']);                                            
                            customPrint($news);                           
                           ?>
                        </td>
                        <td class="text-center"><a href="seed-admin/admin/<?= $rd['pdf']; ?>"><img src="seed-admin/admin/images/static/pdfcover.png" alt="" style="height: 30px;width: 30px;"></a>
                        </td> 
                        <td class="text-center">
                        <a href="seed-admin/admin/<?= $rd['pdf']; ?>" download><i class="fa-solid fa-download"></i></a>    
                        </td>                   
                    </tr>         
                    <?php
                            }
                        }else{
                            echo "<h6 class='text-center text-danger p-15'> No Reports or Documents Found. </h6>";
                        }
                    ?>                                       
                </tbody>
                <tfoot>
                    <tr>
                        <th style="text-align:left;">sl no.</th>
                        <th>Details</th>
                        <th>View Pdf</th>
                        <th>Download Pdf</th>
                    </tr>
                </tfoot>
            </table>

        </div>

        <!-- ==================== End Sec-half ==================== -->


        <!-- ==================== Start Footer ==================== -->

        <?php include'include/footer.php'; ?>
        <!-- ==================== End Footer ==================== -->



    </main>

        <!-- data table -->
            <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
            <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
            <script>
                new DataTable('#example', {
                    layout: {
                        topStart: {
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        }
                    }
                });
            </script>
        <!-- data table -->

</body>


</html>