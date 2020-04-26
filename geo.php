<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/dark-horizontal/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 08:33:54 GMT -->
<head>
        <meta charset="utf-8" />
        <title>IP Géo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
         
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    
                                    
                                </ol>
                            </div>
                            <h4 class="page-title">IP Géolocalisation</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                 
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                           <?php

                            if (isset($_POST['geo'])){
           
           $ip = htmlspecialchars($_POST['ip']);
           $geoip = @file_get_contents ("https://webresolver.nl/api.php?key=FT997-4NT6G-A4PJ5-PKCOQ&action=geoip&string=".$ip."");


							}

                         ?>

                           
                                 <form method="POST">

                                <label>Adresse IP</label>
                                <input type="text" class="form-control" name="ip" placeholder="1.1.1.1" ">
                                <br>
                                <label>Résultat :</label>
                                <div class="well">
                                <?php
                                if(isset($geoip)){
                                    echo $geoip;
                                }
                                ?>
                                    </div>
                                <br>
                                

                                <div class="form-group text-right mb-0">
                                    <button style="width: 100%;" class="btn btn-primary waves-effect waves-light mr-1" name="geo" type="submit">
                                        Geo
                                    </button>
                                    
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div><!-- end col -->

                    
                               
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        

                <!-- Timeline -->
                

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/dark-horizontal/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 08:33:55 GMT -->
</html>