<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>DK WEB</title>

    <meta name="description" content="diendra.web">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">


    <style type="text/css">
        .kedua {
            color: red;
        }
    </style>
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon152.png" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css">
    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes.css">
    <!-- END Stylesheets -->




    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-iso.css" />

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />

    <!-- Inline CSS based on choices in "Settings" tab -->
    <style>
        .bootstrap-iso .formden_header h2,
        .bootstrap-iso .formden_header p,
        .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: black
        }

        .bootstrap-iso form button,
        .bootstrap-iso form button:hover {
            color: white !important;
        }

        .asteriskField {
            color: red;
        }
    </style>


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
        <h1 class="push-top-bottom text-light text-center"><strong>DKWEBHOST</strong></h1>
        <div class="inner">
            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
        </div>
    </div>
    <!-- END Preloader -->

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
            Available #page-container classes:

            '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

            'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
            'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
            'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
            'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

            'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

            'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

            'style-alt'                                     for an alternative main style (without it: the default style)
            'footer-fixed'                                  for a fixed footer (without it: a static footer)

            'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

            'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
            'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
        -->
    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
        <!-- Alternative Sidebar -->
        <div id="sidebar-alt">
            <!-- Wrapper for scrolling functionality -->
            <div class="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Chat -->
                    <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->

                    <!-- END Chat Users -->




                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Alternative Sidebar -->

        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div class="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Brand -->
                    <a href="index.html" class="sidebar-brand">
                        <i></i><strong>DKWEBHOST</strong>
                    </a>
                    <!-- END Brand -->

                    <!-- User Info -->
                    <div class="sidebar-section sidebar-user clearfix">
                        <div class="sidebar-user-avatar">
                            <a href="page_ready_user_profile.html">
                                <img src="<?php echo base_url(); ?>assets/avatars/2.jpg" alt="avatar">
                            </a>
                        </div>
                        <div class="sidebar-user-name">Diendra</div>
                        <div class="sidebar-user-links">
                            <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                            <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                            <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                            <a href="#modal-user-settings" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
                            <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                        </div>
                    </div>
                    <!-- END User Info -->



                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">


                        <li class="sidebar-header">
                            <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                            <span class="sidebar-header-title">Design Kit</span>
                        </li>
                        <li> <a href="<?php echo site_url(); ?>nilai" class=" active"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Rest Clientn Nilai</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url(); ?>nilai"><i class="gi gi-home sidebar-nav-icon"></i>Rest Server</a>
                        </li>



                    </ul>
                    <!-- END Sidebar Navigation -->


                    <!-- END Sidebar Notifications -->
                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                    Available header.navbar classes:

                    'navbar-default'            for the default light header
                    'navbar-inverse'            for an alternative dark header

                    'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                        'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                    'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                        'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
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
            <!-- END Header -->
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>




            <!-- Page content -->
            <div id="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Timeline Widget -->
                        <div class="widget">
                            <div class="widget-extra themed-background-dark">

                                <h3 class="widget-content-light">
                                    EDIT REST - <strong>CLIENT</strong>
                                    <small><a href="page_ready_timeline.html"><strong>API</strong></a></small>
                                </h3>
                            </div>
                            <div class="widget-extra">

                                <font color="orange">
                                    <?php echo $this->session->flashdata('hasil'); ?>
                                </font>

                                <?php echo form_open('nilai/edit'); ?>
                                <?php echo form_hidden('nim', $datanilai[0]->nim); ?>

                                <form action=" <?php echo base_url(); ?>nilai/create" method="post" name="submit" id="submit" class="form-horizontal form-bordered submit">
                                    <fieldset>
                                        <legend>Masukan Data Dengan Benar </legend>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Tahun akademi</label>
                                            <div class="col-md-8 controls">
                                                <?php echo form_input('thakd', $datanilai[0]->thakd); ?></td>
                                            </div>
                                        </div>
                                        <div class="form-group control-group">

                                            <label class="col-md-4 control-label" for="form-field-1">Nim</label>
                                            <div class="col-md-8 controls">
                                                <?php echo form_input('', $datanilai[0]->nim, "disabled"); ?>
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">kdmk</label>
                                            <div class="col-md-8 controls">
                                                <?php echo form_input('kdmk', $datanilai[0]->kdmk); ?>
                                            </div>
                                        </div>
                                        <div class="form-group control-group">
                                            <label class="col-md-4 control-label" for="form-field-1">Nilai</label>
                                            <div class="col-md-8 controls">
                                                <?php echo form_input('nilai', $datanilai[0]->nilai); ?></td>
                                            </div>
                                        </div>

                                        <legend>Pastikan lagi Data yang di tambahkan sudah Benar </legend>

                                        <div class="form-group form-actions">
                                            <div class="col-xs-12 text-right">

                                                <button type="submit" id="submit" name="submit" class="btn btn-sm btn-primary"> Simpan</button>
                                                <a href="<?php echo site_url();  ?>nilai"> <button nilai" type="button" onClick="return confirm('Anda yakin ingin membatalkan perubahan data?')" data-toggle="tooltip" class="btn btn-sm btn-default">Close</button>
                                                </a>

                                            </div>
                                        </div>


                                        <?php
                                        echo form_close();
                                        ?>
                                    </fieldset>
                                </form>


                            </div>
                        </div>
                        <!-- END Timeline Widget -->
                    </div>

                </div>


            </div>
            <!-- END Page Content -->

            <!-- Footer -->
            <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">Diendra/a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">DKWEBHOST</a>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    <!--modal edit -->



    <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->

    <!-- END User Settings -->

    <!-- Remember to include excanvas for IE8 chart support -->
    <!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));
    </script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.css" />
    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>



    <!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps (Remove 'http:' if you have SSL) -->
    <script src="<?php echo base_url(); ?>assets/http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo base_url(); ?>assets/js/helpers/gmaps.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
    <!-- Load and execute javascript code used only in this page -->
    <script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>
    <script>
        $(function() {
            Index.init();
        });
    </script>
    <script>
        $(function() {
            TablesDatatables.init();
        });
    </script>
</body>

</html>