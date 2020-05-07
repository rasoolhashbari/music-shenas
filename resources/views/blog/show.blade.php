<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.css">

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times text-danger"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Side Overlay Tabs -->
                    <div class="block block-transparent pull-x pull-t">
                        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#so-overview">
                                    <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#so-sales">
                                    <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                                </a>
                            </li>
                        </ul>
                        <div class="block-content tab-content overflow-hidden">
                            <!-- Overview Tab -->
                            <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                                <!-- Activity -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Recent Activity</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Activity List -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-wallet text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale ($15)</div>
                                                        <div class="text-success">Admin Template</div>
                                                        <small class="text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-pencil text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">You edited the file</div>
                                                        <div class="text-info">
                                                            <i class="fa fa-file-text"></i> Documentation.doc
                                                        </div>
                                                        <small class="text-muted">15 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-close text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Project deleted</div>
                                                        <div class="text-danger">Line Icon Set</div>
                                                        <small class="text-muted">4 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Activity List -->
                                    </div>
                                </div>
                                <!-- END Activity -->

                                <!-- Online Friends -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Online Friends</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Users Navigation -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Carol Ray</div>
                                                        <div class="font-w400 text-muted">Copywriter</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Ralph Murray</div>
                                                        <div class="font-w400 text-muted">Web Developer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Barbara Scott</div>
                                                        <div class="font-w400 text-muted">Web Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Danielle Jones</div>
                                                        <div class="font-w400 text-muted">Photographer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Brian Cruz</div>
                                                        <div class="font-w400 text-muted">Graphic Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Users Navigation -->
                                    </div>
                                </div>
                                <!-- END Online Friends -->

                                <!-- Quick Settings -->
                                <div class="block mb-0">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Quick Settings</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Quick Settings Form -->
                                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                            <div class="form-group">
                                                <p class="font-w600 mb-2">
                                                    Online Status
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                                                    <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-2">
                                                    Auto Updates
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                                                    <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-1">
                                                    Application Alerts
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                                </div>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-1">
                                                    API
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                                                    <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Quick Settings Form -->
                                    </div>
                                </div>
                                <!-- END Quick Settings -->
                            </div>
                            <!-- END Overview Tab -->

                            <!-- Sales Tab -->
                            <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                                <div class="block mb-0">
                                    <!-- Stats -->
                                    <div class="block-content">
                                        <div class="row items-push pull-t">
                                            <div class="col-6">
                                                <div class="font-w700 text-uppercase">Sales</div>
                                                <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>
                                            </div>
                                            <div class="col-6">
                                                <div class="font-w700 text-uppercase">Balance</div>
                                                <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Stats -->

                                    <!-- Today -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-w600 text-uppercase">Today</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="ext-muted">$996</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">50 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">2 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">3 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Today -->

                                    <!-- Yesterday -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-w600 text-uppercase">Yesterday</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="text-muted">$765</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">26 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Product Purchase - $50</div>
                                                        <small class="text-muted">28 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">29 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Paypal Withdrawal - $300</div>
                                                        <small class="text-muted">37 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">39 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">45 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">46 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- More -->
                                        <div class="text-center">
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-arrow-down mr-1"></i> Load More..
                                            </a>
                                        </div>
                                        <!-- END More -->
                                    </div>
                                    <!-- END Yesterday -->
                                </div>
                            </div>
                            <!-- END Sales Tab -->
                        </div>
                    </div>
                    <!-- END Side Overlay Tabs -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">ne</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Extra -->
                    <div>
                        <!-- Options -->
                        <div class="dropdown d-inline-block ml-2">
                            <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Options -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Extra -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_dashboard.html">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-item open">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Page Packs</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-bag"></i>
                                        <span class="nav-main-link-name">e-Commerce</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                                                <span class="nav-main-link-name">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_orders.html">
                                                <span class="nav-main-link-name">Orders</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_order.html">
                                                <span class="nav-main-link-name">Order</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_products.html">
                                                <span class="nav-main-link-name">Products</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                                                <span class="nav-main-link-name">Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_customer.html">
                                                <span class="nav-main-link-name">Customer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-handbag"></i>
                                        <span class="nav-main-link-name">e-Commerce Store</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                                                <span class="nav-main-link-name">Home</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                                                <span class="nav-main-link-name">Search Results</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                                                <span class="nav-main-link-name">Products List</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                                                <span class="nav-main-link-name">Product Page</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                                                <span class="nav-main-link-name">Checkout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item open">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                        <i class="nav-main-link-icon si si-pencil"></i>
                                        <span class="nav-main-link-name">Blog</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_classic.html">
                                                <span class="nav-main-link-name">Classic</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_list.html">
                                                <span class="nav-main-link-name">List</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_grid.html">
                                                <span class="nav-main-link-name">Grid</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link active" href="be_pages_blog_story.html">
                                                <span class="nav-main-link-name">Story</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                                <span class="nav-main-link-name">Story Cover</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-graduation"></i>
                                        <span class="nav-main-link-name">e-Learning</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_courses.html">
                                                <span class="nav-main-link-name">Courses</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_course.html">
                                                <span class="nav-main-link-name">Course</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                                                <span class="nav-main-link-name">Lesson</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-bubbles"></i>
                                        <span class="nav-main-link-name">Forum</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_categories.html">
                                                <span class="nav-main-link-name">Categories</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_topics.html">
                                                <span class="nav-main-link-name">Topics</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                                <span class="nav-main-link-name">Discussion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon si si-magnet"></i>
                                        <span class="nav-main-link-name">Boxed Backend</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_dashboard.html">
                                                <span class="nav-main-link-name">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_search.html">
                                                <span class="nav-main-link-name">Search</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_1.html">
                                                <span class="nav-main-link-name">Simple 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_simple_2.html">
                                                <span class="nav-main-link-name">Simple 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_1.html">
                                                <span class="nav-main-link-name">Image 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_image_2.html">
                                                <span class="nav-main-link-name">Image 2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_1.html">
                                                <span class="nav-main-link-name">Video 1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="bd_video_2.html">
                                                <span class="nav-main-link-name">Video 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">User Interface</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Blocks</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_styles.html">
                                        <span class="nav-main-link-name">Styles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_options.html">
                                        <span class="nav-main-link-name">Options</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_forms.html">
                                        <span class="nav-main-link-name">Forms</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_themed.html">
                                        <span class="nav-main-link-name">Themed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_blocks_api.html">
                                        <span class="nav-main-link-name">API</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Elements</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_grid.html">
                                        <span class="nav-main-link-name">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_typography.html">
                                        <span class="nav-main-link-name">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_icons.html">
                                        <span class="nav-main-link-name">Icons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_buttons.html">
                                        <span class="nav-main-link-name">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_buttons_groups.html">
                                        <span class="nav-main-link-name">Button Groups</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_dropdowns.html">
                                        <span class="nav-main-link-name">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_tabs.html">
                                        <span class="nav-main-link-name">Tabs</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_navigation.html">
                                        <span class="nav-main-link-name">Navigation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                                        <span class="nav-main-link-name">Horizontal Navigation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_progress.html">
                                        <span class="nav-main-link-name">Progress</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_alerts.html">
                                        <span class="nav-main-link-name">Alerts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_tooltips.html">
                                        <span class="nav-main-link-name">Tooltips</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_popovers.html">
                                        <span class="nav-main-link-name">Popovers</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_modals.html">
                                        <span class="nav-main-link-name">Modals</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_images.html">
                                        <span class="nav-main-link-name">Images Overlay</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_timeline.html">
                                        <span class="nav-main-link-name">Timeline</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_ribbons.html">
                                        <span class="nav-main-link-name">Ribbons</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_animations.html">
                                        <span class="nav-main-link-name">Animations</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_ui_color_themes.html">
                                        <span class="nav-main-link-name">Color Themes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Tables</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_styles.html">
                                        <span class="nav-main-link-name">Styles</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_responsive.html">
                                        <span class="nav-main-link-name">Responsive</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_helpers.html">
                                        <span class="nav-main-link-name">Helpers</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_pricing.html">
                                        <span class="nav-main-link-name">Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_tables_datatables.html">
                                        <span class="nav-main-link-name">DataTables</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Forms</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_elements.html">
                                        <span class="nav-main-link-name">Elements</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_custom_controls.html">
                                        <span class="nav-main-link-name">Custom Controls</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_layouts.html">
                                        <span class="nav-main-link-name">Layouts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_input_groups.html">
                                        <span class="nav-main-link-name">Input Groups</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_plugins.html">
                                        <span class="nav-main-link-name">Plugins</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_editors.html">
                                        <span class="nav-main-link-name">Editors</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_validation.html">
                                        <span class="nav-main-link-name">Validation</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_forms_wizard.html">
                                        <span class="nav-main-link-name">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Develop</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-wrench"></i>
                                <span class="nav-main-link-name">Components</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_loaders.html">
                                        <span class="nav-main-link-name">Loaders</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                                        <span class="nav-main-link-name">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_appear.html">
                                        <span class="nav-main-link-name">Appear</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_charts.html">
                                        <span class="nav-main-link-name">Charts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_calendar.html">
                                        <span class="nav-main-link-name">Calendar</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_sliders.html">
                                        <span class="nav-main-link-name">Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                        <span class="nav-main-link-name">Syntax Highlighting</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_rating.html">
                                        <span class="nav-main-link-name">Rating</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_maps_google.html">
                                        <span class="nav-main-link-name">Google Maps</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                                        <span class="nav-main-link-name">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_dialogs.html">
                                        <span class="nav-main-link-name">Dialogs</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_notifications.html">
                                        <span class="nav-main-link-name">Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_comp_gallery.html">
                                        <span class="nav-main-link-name">Gallery</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-magic-wand"></i>
                                <span class="nav-main-link-name">Layout</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Page</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_default.html">
                                                <span class="nav-main-link-name">Default</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_flipped.html">
                                                <span class="nav-main-link-name">Flipped</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                                <span class="nav-main-link-name">Native Scrolling</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Main Content</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                                <span class="nav-main-link-name">Full Width</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                                <span class="nav-main-link-name">Narrow</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                                <span class="nav-main-link-name">Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Header</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-heading">Fixed</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-heading">Static</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_static_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sidebar</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                                                <span class="nav-main-link-name">Mini</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                                <span class="nav-main-link-name">Light</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                                <span class="nav-main-link-name">Dark</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                                <span class="nav-main-link-name">Hidden</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Side Overlay</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                                <span class="nav-main-link-name">Visible</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                                <span class="nav-main-link-name">Hover Mode</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                                                <span class="nav-main-link-name">No Page Overlay</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_api.html">
                                        <span class="nav-main-link-name">API</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-puzzle"></i>
                                <span class="nav-main-link-name">Multi Level Menu</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 1-1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 1-2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sub Level 2</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 2-1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 2-2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">Sub Level 3</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-1</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 3-2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Sub Level 4</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-1</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 4-2</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Sub Level 5</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 5-1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 5-2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                                        <span class="nav-main-link-name">Sub Level 6</span>
                                                                    </a>
                                                                    <ul class="nav-main-submenu">
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link 6-1</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-main-item">
                                                                            <a class="nav-main-link" href="#">
                                                                                <span class="nav-main-link-name">Link 6-2</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Pages</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Generic</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank.html">
                                        <span class="nav-main-link-name">Blank</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                        <span class="nav-main-link-name">Blank (Block)</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_search.html">
                                        <span class="nav-main-link-name">Search</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile.html">
                                        <span class="nav-main-link-name">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                                        <span class="nav-main-link-name">Profile Edit</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                        <span class="nav-main-link-name">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                        <span class="nav-main-link-name">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_faq.html">
                                        <span class="nav-main-link-name">FAQ</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_team.html">
                                        <span class="nav-main-link-name">Team</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_contact.html">
                                        <span class="nav-main-link-name">Contact</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_support.html">
                                        <span class="nav-main-link-name">Support</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                        <span class="nav-main-link-name">Upgrade Plan</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_maintenance.html">
                                        <span class="nav-main-link-name">Maintenance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_status.html">
                                        <span class="nav-main-link-name">Status</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_coming_soon.html">
                                        <span class="nav-main-link-name">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-lock"></i>
                                <span class="nav-main-link-name">Authentication</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_auth_all.html">
                                        <span class="nav-main-link-name">All</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signin.html">
                                        <span class="nav-main-link-name">Sign In</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signin2.html">
                                        <span class="nav-main-link-name">Sign In 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signup.html">
                                        <span class="nav-main-link-name">Sign Up</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_signup2.html">
                                        <span class="nav-main-link-name">Sign Up 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_lock.html">
                                        <span class="nav-main-link-name">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_lock2.html">
                                        <span class="nav-main-link-name">Lock Screen 2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_reminder.html">
                                        <span class="nav-main-link-name">Pass Reminder</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_auth_reminder2.html">
                                        <span class="nav-main-link-name">Pass Reminder 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-fire"></i>
                                <span class="nav-main-link-name">Error Pages</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_error_all.html">
                                        <span class="nav-main-link-name">All</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_400.html">
                                        <span class="nav-main-link-name">400</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_401.html">
                                        <span class="nav-main-link-name">401</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_403.html">
                                        <span class="nav-main-link-name">403</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_404.html">
                                        <span class="nav-main-link-name">404</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_500.html">
                                        <span class="nav-main-link-name">500</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="op_error_503.html">
                                        <span class="nav-main-link-name">503</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                            <i class="si si-grid"></i>
                        </button>
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <form class="d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1">Adam</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                        <span>Inbox</span>
                                        <span>
                                            <span class="badge badge-pill badge-primary">3</span>
                                            <i class="si si-envelope-open ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                        <span>Profile</span>
                                        <span>
                                            <span class="badge badge-pill badge-success">1</span>
                                            <i class="si si-user ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Settings</span>
                                        <i class="si si-settings"></i>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <h5 class="dropdown-header text-uppercase">Actions</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                                        <span>Lock Account</span>
                                        <i class="si si-lock ml-1"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-bell"></i>
                                <span class="badge badge-primary badge-pill">6</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 bg-primary text-center">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div>
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">1 new sale, keep it up</div>
                                                <small class="text-muted">22 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">Update failed, restart server</div>
                                                <small class="text-muted">26 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">2 new sales, keep it up</div>
                                                <small class="text-muted">33 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-user-plus text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new subscriber</div>
                                                <small class="text-muted">41 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">42 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Content -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo23@2x.jpg');">
                    <div class="bg-primary-op">
                        <div class="content content-full overflow-hidden">
                            <div class="my-8 text-center">
                                <h1 class="text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">Travel the world and feel alive.</h1>
                                <h2 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-class="animated fadeInDown">Experience life like never before.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero Content -->

                <!-- Page Content -->
                <div class="bg-white">
                    <div class="content content-boxed">
                        <div class="text-center font-size-sm push">
                            <span class="d-inline-block py-2 px-4 bg-body-light rounded">
                                <a class="link-effect font-w600" href="be_pages_generic_profile.html">John Doe</a> on July 16, 2019 &bull; <em>5 min</em>
                            </span>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <!-- Story -->
                                <article class="story">
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                    <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                    <div class="row gutters-tiny items-push js-gallery push img-fluid-100">
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo21@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo21.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo22@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Gallery -->

                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                    <h3 class="font-w400 text-black mt-5 mb-3">Experiences</h3>
                                    <p>Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.</p>

                                    <h3 class="font-w400 text-black mt-5 mb-3">Exploring</h3>
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                    <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                    <div class="row gutters-tiny items-push js-gallery push img-fluid-100">
                                        <div class="col-12 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo23@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo23@2x.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo24@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo24.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo14@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo14.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Gallery -->

                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                                    <h3 class="font-w400 text-black mt-5 mb-3">Memories</h3>
                                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                                </article>
                                <!-- END Story -->

                                <!-- Actions -->
                                <div class="mt-5 d-flex justify-content-between push">
                                    <a class="btn btn-success" href="javascript:void(0)">
                                        <i class="fa fa-heart mr-1"></i> Recommend
                                    </a>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-light" data-toggle="tooltip" title="Like Story">
                                            <i class="fa fa-thumbs-up"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle" id="dropdown-blog-story" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-share-alt mr-1"></i> Share
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-blog-story">
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fab fa-fw fa-facebook mr-1"></i> Facebook
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fab fa-fw fa-twitter mr-1"></i> Twitter
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fab fa-fw fa-google-plus mr-1"></i> Google+
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fab fa-fw fa-linkedin mr-1"></i> LinkedIn
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Actions -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

                <!-- More Stories -->
                <div class="content content-boxed">
                    <!-- Section Content -->
                    <div class="row py-5">
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo2.jpg');">
                                    <h4 class="text-white mt-5 push">10 Productivity Tips</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">Carol Ray</span> on July 2, 2019 · <em>12 min</em>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo10.jpg');">
                                    <h4 class="text-white mt-5 push">Travel &amp; Work</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">David Fuller</span> on July 6, 2019 · <em>15 min</em>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo3.jpg');">
                                    <h4 class="text-white mt-5 push">New Image Gallery</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">Susan Day</span> on June 29, 2019 · <em>10 min</em>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo23.jpg');">
                                    <h4 class="text-white mt-5 push">Explore the World</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">David Fuller</span> on June 16, 2019 · <em>13 min</em>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo22.jpg');">
                                    <h4 class="text-white mt-5 push">Follow Your Dreams</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">Danielle Jones</span> on May 23, 2019 · <em>10 min</em>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="block block-link-pop" href="javascript:void(0)">
                                <div class="block-content bg-image" style="background-image: url('assets/media/photos/photo24.jpg');">
                                    <h4 class="text-white mt-5 push">Top 10 Destinations</h4>
                                </div>
                                <div class="block-content block-content-full font-size-sm">
                                    <span class="text-primary">Brian Cruz</span> on May 15, 2019 · <em>7 min</em>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Section Content -->
                </div>
                <!-- END More Stories -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI 4.6</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Page JS Helpers (Magnific Popup Plugin) -->
        <script>jQuery(function(){ One.helpers('magnific-popup'); });</script>
    </body>
</html>
