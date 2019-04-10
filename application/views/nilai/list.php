<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>DKWEBHOST</title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <base href="<?php echo base_url(); ?>" />
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="assets/css/themes.css">
    <!-- END Stylesheets -->




    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>


    <link rel="stylesheet" href="assets/css/bootstrap-iso.css" />

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

</head>
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
        Available body classes:

        'page-loading'      enables page preloader
    -->

<body>
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
    <div class="preloader themed-background">
        <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
        <div class="inner">
            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
        </div>
    </div>

    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div class="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Brand -->
                    <a href="#" class="sidebar-brand">
                        <i></i><strong>DKWEBHOST</strong>
                    </a>
                    <!-- END Brand -->

                    <!-- User Info -->
                    <div class="sidebar-section sidebar-user clearfix">
                        <div class="sidebar-user-avatar">
                            <a href="#">
                                <img src="assets/avatars/2.jpg" alt="avatar">
                            </a>
                        </div>
                        <div class="sidebar-user-name">Diendra</div>
                        <div class="sidebar-user-links">
                            <a href="https://www.facebook.com/spekcomun" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/diiendra/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                            <a href="#modal-user" data-toggle="modal" class="enable-tooltip" title="Gmail"><i class="fa fa-google"></i></a>
                            <a href="#modal-user" data-toggle="modal" class="enable-tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                        </div>
                    </div>
                    <div class="sidebar-section sidebar-user clearfix">
                        <div class="sidebar-user-avatar">
                            <a href="#">
                                <img src="assets/avatars/3.jpg" alt="avatar">
                            </a>
                        </div>
                        <div class="sidebar-user-name">Katon</div>
                        <div class="sidebar-user-links">
                            <a href="https://www.facebook.com/katonpriambodo" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/katonpriambodo/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                            <a href="#modal-user" data-toggle="modal" class="enable-tooltip" title="Gmail"><i class="fa fa-google"></i></a>
                            <a href="#modal-user" data-toggle="modal" class="enable-tooltip" title="Phone"><i class="fa fa-phone"></i></a>
                        </div>
                    </div>

                    <!-- END User Info -->


                    <!-- END Theme Colors -->
                    <ul class="sidebar-nav">



                        <li> <a href="<?php echo site_url(); ?>nilai" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Rest Client Nilai</a>
                        </li>

                        <li> <a href="<?php echo site_url(); ?>mahasiswa"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Rest Client Mahasiswa</a>
                        </li>
                        <li>
                            <a href="http://pkl.notaxcloth.com/dkwebhost/"><i class="gi gi-home sidebar-nav-icon"></i>Rest Server</a>
                        </li>



                    </ul>


                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">

            <header class="navbar navbar-default">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>
                    <!-- END Main Sidebar Toggle Button -->


                    <!-- END Template Options -->
                </ul>
                <!-- END Left Header Navigation -->




                <!-- END Right Header Navigation -->
            </header>

            <!-- Page content -->
            <div id="page-content">

                <?php $this->load->view($content); ?>



            </div>
            <!-- END Page Content -->

            <div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h2 class="modal-title"><i class="fa fa-pencil"></i> TAMBAH DATA nilai</h2>
                        </div>
                        <!-- END Modal Header -->

                        <!-- Modal Body -->
                        <div class="modal-body">

                            <form action=" <?php echo site_url();  ?>nilai/create" method="post" name="submit" id="submit" class="form-horizontal form-bordered submit">
                                <fieldset>
                                    <legend>Masukan Data Dengan Benar </legend>
                                    <?php echo form_open('nilai/create'); ?>

                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">thakd</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="thakd" name="thakd" class="form-control" placeholder="thakd" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group control-group">

                                        <label class="col-md-4 control-label" for="form-field-1">nim</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">kdmk</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="kdmk" name="kdmk" class="form-control" placeholder="kdmk" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">nilai</label>
                                        <div class="col-md-8 controls">
                                            <input type="text" id="nilai" name="nilai" class="form-control" placeholder="nilai" maxlength="10">
                                        </div>
                                    </div>


                                    <legend>Pastikan lagi Data yang di tambahkan sudah Benar </legend>

                                    <div class="form-group form-actions">
                                        <div class="col-xs-12 text-right">

                                            <button type="submit" id="submit" name="submit" class="btn btn-sm btn-primary"> Simpan</button>
                                            <button type="button" onClick="return confirm('Anda yakin ingin membatalkan perubahan data?')" data-toggle="tooltip" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>


                                        </div>
                                    </div>


                                    <?php
                                    echo form_close();
                                    ?>
                                </fieldset>
                            </form>
                        </div>
                        <!-- END Modal Body -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div id="modal-user" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header text-center">
                            <h2 class="modal-title"><i class="fa fa-pencil"></i> CONTACT US</h2>
                        </div>
                        <!-- END Modal Header -->

                        <!-- Modal Body -->
                        <div class="modal-body">

                            <form action=" kontak/create" method="post" name="submit" id="submit" class="form-horizontal form-bordered submit">
                                <fieldset>
                                    <legend>Diendra</legend>

                                    <div class="form-group control-group">

                                        <label class="col-md-4 control-label" for="form-field-1">Gmail : </label>
                                        <div class="col-md-8 controls">
                                            <label class="col-md-4 control-label" for="form-field-1">Diendra.lm@gmail.com</label>
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">NOMOR : </label>
                                        <div class="col-md-8 controls">

                                            <label class="col-md-4 control-label" for="form-field-1">089618768626</label>
                                        </div>
                                    </div>
                                    <legend>Katon</legend>

                                    <div class="form-group control-group">

                                        <label class="col-md-4 control-label" for="form-field-1">Gmail : </label>
                                        <div class="col-md-8 controls">
                                            <label class="col-md-4 control-label" for="form-field-1">Katonpriambodo@gmail.com</label>
                                        </div>
                                    </div>
                                    <div class="form-group control-group">
                                        <label class="col-md-4 control-label" for="form-field-1">NOMOR : </label>
                                        <div class="col-md-8 controls">

                                            <label class="col-md-4 control-label" for="form-field-1">083838737905</label>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                        <!-- END Modal Body -->
                    </div>
                </div>
            </div>

        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- END User Settings -->

    <!-- Remember to include excanvas for IE8 chart support -->
    <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write(decodeURI('%3Cscript src="assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));
    </script>

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/helpers/gmaps.min.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="assets/js/pages/index.js"></script>
    <script>
        $(function() {
            Index.init();
        });
    </script>
</body>

</html>