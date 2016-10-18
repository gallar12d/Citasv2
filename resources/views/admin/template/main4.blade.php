<!DOCTYPE html>
<html lang="en-US" ng-app="employeeRecords">
<head><title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icons/favicon-114x114.png') }}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="{{ asset('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('demo2/css/prism.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('demo2/css/calendar-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('src2/css/pignose.calendar.css') }}" />
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        html, body {
            position: relative;
            height: 100%;
        }

        #wrapper {
            padding-bottom: 40px;
        }

        .center {
            text-align: center;
        }

        .header {
            max-width: 1200px;
            width: 80%;
            margin: 0 auto;
            padding-top: 40px;
            padding-bottom: 40px;
            margin-bottom: 40px;
            text-align: center;
        }

        .header h1 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 400;
            font-family: 'Raleway', 'helvetica', 'sans-serif';
            color: #333333;
        }

        .article {
            max-width: 1200px;
            width: 80%;
            margin: 0 auto;
            margin-top: 40px;
            padding-top: 40px;
            border-top: 1px solid #efefef;
            font-family: 'Raleway', 'helvetica', 'sans-serif';
            text-align: center;
        }

        .article h3 {
            margin-bottom: 40px;
        }

        .article h5 {
            margin-top: 60px;
            font-size: 130%;
            font-weight: 600;
        }

        .article table {
            font-size: 115%;
            text-align: left;
        }

        .article pre {
            font-size: 115%;
        }

        .article ul {
            display: inline-block;
            font-size: 115%;
            font-weight: 600;
            margin: 20px 0;
        }

        .article ul li {
            margin: 10px 0;
        }

        .input-calendar {
            display: block;
            width: 100%;
            max-width: 360px;
            margin: 0 auto;
            height: 3.2em;
            line-height: 3.2em;
            font: inherit;
            padding: 0 1.2em;
            border: 1px solid #d8d8d8;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -o-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
        }

        .btn-calendar {
            display: block;
            width: 100%;
            max-width: 360px;
            height: 3.2em;
            line-height: 3.2em;
            background-color: #52555a;
            margin: 0 auto;
            font-weight: 600;
            color: #ffffff !important;
            text-decoration: none !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -o-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
        }

        .btn-calendar:hover {
            background-color: #5a6268;
        }

        .box {
            display: none;
            max-width: 360px;
            margin: 0 auto;
            font-weight: 600;
            margin-top: 2em;
            padding: 1.6em;
            background-color: #fafafa;
            border: 1px solid #d8d8d8;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -o-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -moz-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            -webkit-box-shadow: 0 4px 12px rgba(0, 0, 0, .25);
            overflow: hidden;
        }

        .box .active-dates .label {
            margin: 0 .4em;
            white-space: normal;
            word-break: break-word;
            line-height: 2.4;
        }

        .box.box-languages .label {
            font-size: 100%;
        }
    </style>



<link type="text/css" rel="stylesheet" href="{{ asset('vendors/select2/select2-madmin.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/multi-select/css/multi-select-madmin.css') }}">


        <script src="{{ asset('proui/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') }}"></script>

    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/intro.js/introjs.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/calendar/zabuto_calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/sco.message/sco.message.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/intro.js/introjs.css') }}">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/DataTables/media/css/jquery.dataTables.css') }}">
    <link type="text/css" rel="stylesheet"
          href="{{ asset('vendors/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/DataTables/media/css/dataTables.bootstrap.css') }}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/jquery-pace/pace.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/iCheck/skins/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/jquery-notific8/jquery.notific8.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-colorpicker/css/colorpicker.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/css/datepicker.css') }}">

    <link type="text/css" rel="stylesheet"
          href="{{ asset('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-clockface/css/clockface.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap-switch/css/bootstrap-switch.css') }}">

    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/themes/style1/orange-blue.css') }}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/themes/style1/orange-blue.css') }}" id="theme-change"
          class="style-change color-change">

<link type="text/css" rel="stylesheet" href="{{ asset('css/themes/style2/orange-blue.css') }}" id="theme-change"
          class="style-change color-change">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
  <script src="{{ asset('dist/sweetalert-dev.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('dist/sweetalert.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js" type="text/javascript"></script>
        <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js" type="text/javascript"></script>


<link href='{{ asset('fullcalendar/fullcalendar.css') }}' rel='stylesheet' />




</head>
<body class="" ng-app="employeeRecords">
<div>
    <div class="news-ticker bg-orange">
        <div class="container">
            <ul id="news-ticker-content" class="list-unstyled mbn">
                <li><a href='http://madmin.swlabs.co/', target='_blank'>This is HTML app version of this template. To
                    see Angular app version, please click here</a></li>
            </ul>
            <a id="news-ticker-close" href="javascript:;"><i class="fa fa-times"></i></a></div>
    </div>
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text">µAdmin</span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="index.html">Dashbssoard</a></li>
                    <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Layouts
                        &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="layout-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="layout-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="layout-left-sidebar-collapsed.html">Left Sidebar Collasped</a></li>
                            <li><a href="layout-right-sidebar-collapsed.html">Right Sidebar Collasped</a></li>
                            <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown"
                                                            class="dropdown-toggle">More Options</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Second level link</a></li>
                                    <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown"
                                                                    class="dropdown-toggle">More Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                            <li><a href="#">Third level link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Second level link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown"><a href="javascript:;" data-toggle="dropdown"
                                                      class="dropdown-toggle">UI Elements
                        &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <ul class="col-md-4 mega-menu-submenu">
                                            <li><h3>Neque porro quisquam</h3></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                elit</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde
                                                omnis</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et
                                                iusto</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                soluta</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                facilis est</a></li>
                                        </ul>
                                        <ul class="col-md-4 mega-menu-submenu">
                                            <li><h3>Neque porro quisquam</h3></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                elit</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde
                                                omnis</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et
                                                iusto</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                soluta</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                facilis est</a></li>
                                        </ul>
                                        <ul class="col-md-4 mega-menu-submenu">
                                            <li><h3>Neque porro quisquam</h3></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                elit</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde
                                                omnis</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et
                                                iusto</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                soluta</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                facilis est</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-menu-dropdown mega-menu-full"><a href="javascript:;" data-toggle="dropdown"
                                                                     class="dropdown-toggle">Extras
                        &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit
                                                    amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                    elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis
                                                    unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et
                                                    accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                    soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                    facilis est</a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit
                                                    amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                    elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis
                                                    unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et
                                                    accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                    soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                    facilis est</a></li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><h3>Neque porro quisquam</h3></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit
                                                    amet</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing
                                                    elit</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis
                                                    unde omnis</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et
                                                    accusamus et iusto</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum
                                                    soluta</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum
                                                    facilis est</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 document-demo">
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i
                                                        class="fa fa-info-circle"></i><span>Introduction</span></a></li>
                                                <li><a href="#"><i class="fa fa-download"></i><span>Installation</span></a>
                                                </li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i class="fa fa-cog"></i><span>T3 Settings</span></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-desktop"></i><span>Layout System</span></a>
                                                </li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li><a href="#"><i
                                                        class="fa fa-magic"></i><span>Customization</span></a></li>
                                                <li><a href="#"><i
                                                        class="fa fa-question-circle"></i><span>FAQs</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form id="topbar-search" action="#" method="GET" class="hidden-xs">
                    <div class="input-group"><input type="text" placeholder="Search..." class="form-control"/><span
                            class="input-group-btn"><a href="javascript:;" class="btn submit"><i
                            class="fa fa-search"></i></a></span></div>
                </form>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                            class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><p>You have 14 new notifications</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-blue"><i class="fa fa-comment"></i></span>New Comment<span
                                                class="pull-right text-muted small">4 mins ago</span></a></li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-violet"><i class="fa fa-twitter"></i></span>3 New
                                            Followers<span class="pull-right text-muted small">12 mins ago</span></a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-pink"><i class="fa fa-envelope"></i></span>Message
                                            Sent<span class="pull-right text-muted small">15 mins ago</span></a></li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-green"><i class="fa fa-tasks"></i></span>New
                                            Task<span class="pull-right text-muted small">18 mins ago</span></a></li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-yellow"><i class="fa fa-upload"></i></span>Server
                                            Rebooted<span class="pull-right text-muted small">19 mins ago</span></a>
                                        </li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-green"><i class="fa fa-tasks"></i></span>New
                                            Task<span class="pull-right text-muted small">2 days ago</span></a></li>
                                        <li><a href="extra-user-list.html" target="_blank"><span
                                                class="label label-pink"><i class="fa fa-envelope"></i></span>Message
                                            Sent<span class="pull-right text-muted small">5 days ago</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="extra-user-list.html" class="text-right">See all alerts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                            class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li><p>You have 14 new messages</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg"
                                                alt="" class="img-responsive img-circle"/></span><span
                                                class="info"><span class="name">Jessica Spencer</span><span
                                                class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg"
                                                alt="" class="img-responsive img-circle"/></span><span
                                                class="info"><span class="name">John Smith<span
                                                class="label label-blue pull-right">New</span></span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg"
                                                alt="" class="img-responsive img-circle"/></span><span
                                                class="info"><span class="name">John Doe<span
                                                class="label label-orange pull-right">10 min</span></span><span
                                                class="desc">Lorem ipsum dolor sit amet...</span></span></a></li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg"
                                                alt="" class="img-responsive img-circle"/></span><span
                                                class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                        <li><a href="email-view-mail.html" target="_blank"><span class="avatar"><img
                                                src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg"
                                                alt="" class="img-responsive img-circle"/></span><span
                                                class="info"><span class="name">John Smith</span><span class="desc">Lorem ipsum dolor sit amet...</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="email-view-mail.html" target="_blank">Read all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i
                            class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li><p>You have 14 pending tasks</p></li>
                            <li>
                                <div class="dropdown-slimscroll">
                                    <ul>
                                        <li><a href="page-blog-item.html" target="_blank"><span class="task-item">Fix the HTML code<small
                                                class="pull-right text-muted">40%
                                        </small></span>

                                            <div class="progress progress-sm">
                                                <div role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: 40%;"
                                                     class="progress-bar progress-bar-orange"><span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Make a wordpress theme<small
                                                class="pull-right text-muted">60%
                                        </small></span>

                                            <div class="progress progress-sm">
                                                <div role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: 60%;"
                                                     class="progress-bar progress-bar-blue"><span class="sr-only">60% Complete (success)</span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Convert PSD to HTML<small
                                                class="pull-right text-muted">55%
                                        </small></span>

                                            <div class="progress progress-sm">
                                                <div role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: 55%;"
                                                     class="progress-bar progress-bar-green"><span class="sr-only">55% Complete (success)</span>
                                                </div>
                                            </div>
                                        </a></li>
                                        <li><a href="page-blog-item.html" target="_blank"> <span class="task-item">Convert HTML to Wordpress<small
                                                class="pull-right text-muted">78%
                                        </small></span>

                                            <div class="progress progress-sm">
                                                <div role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                                     aria-valuemax="100" style="width: 78%;"
                                                     class="progress-bar progress-bar-yellow"><span class="sr-only">78% Complete (success)</span>
                                                </div>
                                            </div>
                                        </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="last"><a href="page-blog-item.html" target="_blank">See all tasks</a></li>
                        </ul>
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img
                            src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt=""
                            class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">John Doe</span>&nbsp;<span
                            class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="extra-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="page-calendar.html"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="email-inbox.html"><i class="fa fa-envelope"></i>My Inbox<span
                                    class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span
                                    class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="extra-lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="extra-signin.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>

                    <li class="dropdown hidden-xs"><!--BEGIN THEME SETTING--><a id="theme-setting" href="javascript:;"
                                                                                data-hover="dropdown" data-step="1"
                                                                                data-intro="&lt;b&gt;Header&lt;/b&gt;, &lt;b&gt;sidebar&lt;/b&gt;, &lt;b&gt;border style&lt;/b&gt; and &lt;b&gt;color&lt;/b&gt;, all of them can change for you to create the best"
                                                                                data-position="left"
                                                                                class="dropdown-toggle"><i
                            class="fa fa-cogs"></i></a>
                        <ul class="dropdown-menu dropdown-theme-setting pull-right">
                            <li><h4 class="mtn">Theme Styles</h4><select id="list-style" class="form-control">
                                <option value="style1">Flat Squared style</option>
                                <option value="style2">Flat Rounded style</option>
                                <option value="style3">Flat Border style</option>
                            </select></li>
                            <li><h4 class="mtn">Menu Styles</h4><select id="list-menu" class="form-control">
                                <option value="sidebar-default">Menu style 1</option>
                                <option value="sidebar-colors">Menu style 2</option>
                                <option value="sidebar-icons">Menu style 3</option>
                                <option value="sidebar-collapsed">Menu style 4</option>
                            </select></li>
                            <li><h4 class="mtn">Header & Sidebar</h4><select id="list-header" class="form-control">
                                <option value="header-static">Static</option>
                                <option value="header-fixed">Fixed</option>
                            </select></li>
                            <li><h4 class="mtn">Theme Colors</h4>
                                <ul id="list-color" class="list-unstyled list-inline">
                                    <li data-color="green-dark" data-hover="tooltip" title="Green - Dark"
                                        class="green-dark"></li>
                                    <li data-color="red-dark" data-hover="tooltip" title="Red - Dark"
                                        class="red-dark"></li>
                                    <li data-color="pink-dark" data-hover="tooltip" title="Pink - Dark"
                                        class="pink-dark"></li>
                                    <li data-color="blue-dark" data-hover="tooltip" title="Blue - Dark"
                                        class="blue-dark"></li>
                                    <li data-color="yellow-dark" data-hover="tooltip" title="Yellow - Dark"
                                        class="yellow-dark"></li>
                                    <li data-color="green-grey" data-hover="tooltip" title="Green - Grey"
                                        class="green-grey"></li>
                                    <li data-color="red-grey" data-hover="tooltip" title="Red - Grey"
                                        class="red-grey"></li>
                                    <li data-color="pink-grey" data-hover="tooltip" title="Pink - Grey"
                                        class="pink-grey"></li>
                                    <li data-color="blue-grey" data-hover="tooltip" title="Blue - Grey"
                                        class="blue-grey"></li>
                                    <li data-color="yellow-grey" data-hover="tooltip" title="Yellow - Grey"
                                        class="yellow-grey"></li>
                                    <li data-color="yellow-green" data-hover="tooltip" title="Yellow - Green"
                                        class="yellow-green"></li>
                                    <li data-color="orange-grey" data-hover="tooltip" title="Orange - Grey"
                                        class="orange-grey"></li>
                                    <li data-color="pink-blue" data-hover="tooltip" title="Pink - Blue"
                                        class="pink-blue"></li>
                                    <li data-color="pink-violet" data-hover="tooltip" title="Pink - Violet"
                                        class="pink-violet active"></li>
                                    <li data-color="orange-violet" data-hover="tooltip" title="Orange - Violet"
                                        class="orange-violet"></li>
                                    <li data-color="pink-green" data-hover="tooltip" title="Pink - Green"
                                        class="pink-green"></li>
                                    <li data-color="pink-brown" data-hover="tooltip" title="Pink - Brown"
                                        class="pink-brown"></li>
                                    <li data-color="orange-blue" data-hover="tooltip" title="Orange - Blue"
                                        class="orange-blue"></li>
                                    <li data-color="yellow-blue" data-hover="tooltip" title="Yellow - Blue"
                                        class="yellow-blue"></li>
                                    <li data-color="green-blue" data-hover="tooltip" title="Green - Blue"
                                        class="green-blue"></li>
                                </ul>
                            </li>
                        </ul>
                        <!--END THEME SETTING--></li>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <div id="modal-config" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                        <h4 class="modal-title">Modal title</h4></div>
                    <div class="modal-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et
                        nisl eget porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie. Nunc
                        vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis magna et aliquam.
                        Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor vitae quam dictum condimentum.
                        Integer a sodales elit, eu pulvinar leo. Nunc nec aliquam nisi, a mollis neque. Ut vel felis
                        quis tellus hendrerit placerat. Vivamus vel nisl non magna feugiat dignissim sed ut nibh. Nulla
                        elementum, est a pretium hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget
                        massa. Sed ut ultricies felis.</p></div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL CONFIG PORTLET--></div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg"
                                                alt="" class="img-circle"/></div>
                        <div class="info"><p>John Doe</p>
                            <ul class="list-inline list-unstyled">
                                <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i
                                        class="fa fa-user"></i></a></li>
                                <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i
                                        class="fa fa-envelope"></i></a></li>
                                <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal"
                                       data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                                <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i
                                        class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>

					@include('admin.template.menu')


                                       <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>--></ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->

   <div class="page-title-breadcrumb option-demo">
     <div class="page-header pull-left">
      <div class="page-title mrm">
         <section>
          @yield('title')
         </section>
       </div>
   </div>
                <div class="btn btn-blue reportrange"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
                        class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden"
                       name="endstart"/>
                </div>
                <div class="clearfix"></div>

            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
                <div id="page-content">
                    <div class="row">
                       <div class="col-sm-6 col-lg-3">
                          <section>
                            @include('flash::message')
                            @yield('content')
                          </section>
                        </div>
                     </div>
                   </div>




                        </div>
                    </div>
                </div>



 @include('admin.template.footer')

<script src='{{ asset('lib/moment.min.js') }}'></script>
<script src="{{ asset('js2/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('demo2/js/jquery.latest.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('demo2/js/prism.min.js') }}"></script>
    <script src='{{ asset('lib/moment.min.js') }}'></script>
    <script type="text/javascript" src="{{ asset('src2/js/pignose.calendar.js') }}"></script>

<script src='{{ asset('fullcalendar/fullcalendar.min.js') }}'></script>
<script src="{{ asset('vendors/moment/moment.js') }}"></script>
<script src="{{ asset('js2/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('js2/jquery-ui.js') }}"></script>
<!--loading bootstrap js-->








<script src="{{ asset('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js') }}"></script>
<script src="{{ asset('js2/html5shiv.js') }}"></script>
<script src="{{ asset('js2/respond.min.js') }}"></script>
<script src="{{ asset('vendors/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('vendors/slimScroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('vendors/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('vendors/iCheck/custom.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-notific8/jquery.notific8.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-highcharts/highcharts.js') }}"></script>
<script src="{{ asset('js2/jquery.menu.js') }}"></script>
<script src="{{ asset('vendors/jquery-pace/pace.min.js') }}"></script>
<script src="{{ asset('vendors/holder/holder.js') }}"></script>
<script src="{{ asset('vendors/responsive-tabs/responsive-tabs.js') }}"></script>
<script src="{{ asset('vendors/jquery-news-ticker/jquery.newsTicker.min.js') }}"></script>
<script src="{{ asset('vendors/moment/moment.js') }}"></script>

<script src="{{ asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!--CORE JAVASCRIPT-->
<script src="{{ asset('js2/main.js') }}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendors/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('js2/ui-dropdown-select.js') }}"></script>
<script src="{{ asset('js/dcalendar.picker.js') }}"></script>
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js2/angular-pagination.js') ?>"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.min.css">
<script src="https://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.js"></script>
<script src="https://cdn.jsdelivr.net/angular.ngtable/1.0.0/ng-table.min.js"></script>
<!--
<script src="{{ asset('proui/js/plugins.js') }}"></script>
<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
-->
<script type="text/javascript">
var base = "{{ url('/') }}";
</script>
<script src="{{ asset('js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('js/roles3.js') }}"></script>
<script src="{{ asset('js/roles4.js') }}"></script>

<!--loading bootstrap js-->
<script src="{{ asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

<script src="{{ asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-clockface/js/clockface.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-maskedinput/jquery-maskedinput.js') }}"></script>
<!--CORE JAVASCRIPT-->
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset('vendors/intro.js/intro.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('vendors/flot-chart/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('vendors/calendar/zabuto_calendar.min.js') }}"></script>
<script src="{{ asset('vendors/sco.message/sco.message.js') }}"></script>
<script src="{{ asset('vendors/intro.js/intro.js') }}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset('vendors/tableExport/tableExport.js') }}"></script>
<script src="{{ asset('vendors/tableExport/jquery.base64.js') }}"></script>
<script src="{{ asset('vendors/tableExport/html2canvas.js') }}"></script>
<script src="{{ asset('vendors/tableExport/jspdf/libs/sprintf.js') }}"></script>
<script src="{{ asset('vendors/tableExport/jspdf/jspdf.js') }}"></script>
<script src="{{ asset('vendors/tableExport/jspdf/libs/base64.js') }}"></script>
<script src="{{ asset('js2/table-export.js') }}"></script>
<script src="{{ asset('js/riot/riot.min.js') }}"></script>
<script src="{{ asset('js/riot/riot-compiler.min.js') }}"></script>
AngularJS Application Scripts
<script src="<?= asset('app/app.js') ?>"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>


<!-- <script src="{{ asset('js2/ui-dropdown-select.js') }}"></script>
 -->
<script src="{{ asset('vendors/DataTables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/DataTables/media/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
 <script src="{{ asset('js2/table-datatables.js') }}"></script>


<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>

    <script type="text/javascript">
    //<![CDATA[
    $(function() {
        $('.calendar').pignoseCalendar({
            select: function(date, obj) {
                obj.calendar.parent().next().show().text('You selected ' +
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                '.');
            }
        });

        $('.input-calendar').pignoseCalendar({
            buttons: true,
        });

        var $btn = $('.btn-calendar').pignoseCalendar({
            modal: true,
            buttons: true,
            apply: function(date) {
                $btn.next().show().text('You applied date ' + date + '.');
            }
        });

        $('.calendar-dark').pignoseCalendar({
            theme: 'dark',
            select: function(date, obj) {
                obj.calendar.parent().next().show().text('You selected ' +
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                '.');
            }
        });

        $('.multi-select-calendar').pignoseCalendar({
            multiple: true,
            select: function(date, obj) {
                obj.calendar.parent().next().show().text('You selected ' +
                    (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                    '~' +
                    (date[1] === null? 'null':date[1].format('YYYY-MM-DD')) +
                    '.');
            }
        });

        $('.toggle-calendar').pignoseCalendar({
            toggle: true,
            select: function(date, obj) {
                var $target = obj.calendar.parent().next().show().html('You selected ' +
                (date[0] === null? 'null':date[0].format('YYYY-MM-DD')) +
                '.' +
                '<br /><br />' +
                '<strong>Active dates</strong><br /><br />' +
                '<div class="active-dates"></div>');

                for(var idx in obj.storage.activeDates) {
                    var date = obj.storage.activeDates[idx];
                    if(typeof date !== 'string') {
                        continue;
                    }
                    $target.find('.active-dates').append('<span class="label label-default">' + date + '</span>');
                }
            }
        });

        $('.language-calendar').each(function() {
            var $this = $(this);
            var lang = $this.data('lang');
            $this.pignoseCalendar({
                lang: lang
            });
        });
    });
    //]]>
    </script>


@yield('js')



</body>
</html>



























