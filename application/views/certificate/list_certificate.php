<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('asset/bower_components/metisMenu/dist/metisMenu.min.css');?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url('asset/dist/css/timeline.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/dist/css/sb-admin-2.css');?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('asset/bower_components/morrisjs/morris.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asset/bower_components/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Certificate Authority KIJ</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <li>
                            <a href="<?php echo site_url('add_certificate');?>"><i class="fa fa-dashboard fa-fw"></i>Request Certificate</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('list_certificate');?>"><i class="fa fa-table fa-fw"></i>Daftar Certificate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Download File Sertifikat</h1>
                    <button type="submit" class="btn btn-default">Downnload</button>
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo base_url('asset/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/metisMenu/dist/metisMenu.min.js');?>"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/raphael/raphael-min.js');?>"></script>
    <script src="<?php echo base_url('asset/bower_components/morrisjs/morris.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/morris-data.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('asset/dist/js/sb-admin-2.js');?>"></script>
</body>

</html>