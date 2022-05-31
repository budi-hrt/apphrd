<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?= $title; ?></title>

    <meta name="description" content="top menu &amp; navigation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <?php
    if (isset($list_css_plugin)) {
        foreach ($list_css_plugin as $list_css) { ?>
    <!-- JS plugin -->
    <link rel="stylesheet" href="<?= base_url('assets/css/' . $list_css); ?>" />
    <?php
        }
    }
    ?>

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet"
        id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->





    <!-- ace settings handler -->
    <script src="<?= base_url(); ?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <script>
    let base_url = '<?= base_url(); ?>';
    let id_user = "<?= $user['id']; ?>";
    </script>
</head>

<body class="<?= $user['skin']; ?>">
    <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
                        <i class="fa fa-coffee"></i>
                        App Hrd
                    </small>
                </a>

                <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button"
                    data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                    <span class="sr-only">Toggle user menu</span>

                    <img src="<?= base_url(); ?>assets/images/avatars/user.jpg" alt="Jason's Photo" />
                </button>

                <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
                <ul class="nav ace-nav">
                    <li class="transparent dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        </a>

                        <div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#navbar-tasks">
                                            Tasks
                                            <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#navbar-messages">
                                            Messages
                                            <span class="badge badge-danger">5</span>
                                        </a>
                                    </li>
                                </ul><!-- .nav-tabs -->

                                <div class="tab-content">
                                    <div id="navbar-tasks" class="tab-pane in active">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Software Update</span>
                                                                <span class="pull-right">65%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:65%" class="progress-bar"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Hardware Upgrade</span>
                                                                <span class="pull-right">35%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:35%"
                                                                    class="progress-bar progress-bar-danger"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Unit Testing</span>
                                                                <span class="pull-right">15%</span>
                                                            </div>

                                                            <div class="progress progress-mini">
                                                                <div style="width:15%"
                                                                    class="progress-bar progress-bar-warning"></div>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <div class="clearfix">
                                                                <span class="pull-left">Bug Fixes</span>
                                                                <span class="pull-right">90%</span>
                                                            </div>

                                                            <div class="progress progress-mini progress-striped active">
                                                                <div style="width:90%"
                                                                    class="progress-bar progress-bar-success"></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="#">
                                                    See tasks with details
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->

                                    <div id="navbar-messages" class="tab-pane">
                                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                            <li class="dropdown-content">
                                                <ul class="dropdown-menu dropdown-navbar">
                                                    <li>
                                                        <a href="#">
                                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar.png"
                                                                class="msg-photo" alt="Alex's Avatar" />
                                                            <span class="msg-body">
                                                                <span class="msg-title">
                                                                    <span class="blue">Alex:</span>
                                                                    Ciao sociis natoque penatibus et auctor ...
                                                                </span>

                                                                <span class="msg-time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span>a moment ago</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar3.png"
                                                                class="msg-photo" alt="Susan's Avatar" />
                                                            <span class="msg-body">
                                                                <span class="msg-title">
                                                                    <span class="blue">Susan:</span>
                                                                    Vestibulum id ligula porta felis euismod ...
                                                                </span>

                                                                <span class="msg-time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span>20 minutes ago</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar4.png"
                                                                class="msg-photo" alt="Bob's Avatar" />
                                                            <span class="msg-body">
                                                                <span class="msg-title">
                                                                    <span class="blue">Bob:</span>
                                                                    Nullam quis risus eget urna mollis ornare ...
                                                                </span>

                                                                <span class="msg-time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span>3:15 pm</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar2.png"
                                                                class="msg-photo" alt="Kate's Avatar" />
                                                            <span class="msg-body">
                                                                <span class="msg-title">
                                                                    <span class="blue">Kate:</span>
                                                                    Ciao sociis natoque eget urna mollis ornare ...
                                                                </span>

                                                                <span class="msg-time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span>1:33 pm</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar5.png"
                                                                class="msg-photo" alt="Fred's Avatar" />
                                                            <span class="msg-body">
                                                                <span class="msg-title">
                                                                    <span class="blue">Fred:</span>
                                                                    Vestibulum id penatibus et auctor ...
                                                                </span>

                                                                <span class="msg-time">
                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                    <span>10:09 am</span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-footer">
                                                <a href="inbox.html">
                                                    See all messages
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.tabbable -->
                        </div><!-- /.dropdown-menu -->
                    </li>

                    <li class="light-blue dropdown-modal user-min">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo"
                                src="<?= base_url(); ?>assets/images/employe/<?= $user['image']; ?>"
                                alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                <?= $user['name']; ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul
                            class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?= base_url('auth/logout'); ?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Overview
                            &nbsp;
                            <i class="ace-icon fa fa-angle-down bigger-110"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-eye bigger-110 blue"></i>
                                    Monthly Visitors
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                    Active Users
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog bigger-110 blue"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="ace-icon fa fa-envelope"></i>
                            Messages
                            <span class="badge badge-warning">5</span>
                        </a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left form-search" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="search" />
                    </div>

                    <button type="button" class="btn btn-mini btn-info2">
                        <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                    </button>
                </form>
            </nav>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
        </script>

        <!-- Star Load tempaltes v_topbar -->
        <?php $this->load->view('templates/v_topbar'); ?>

        <!-- End Load tempaltes v_topbar -->

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>




                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>


                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->

                    <div class="page-header">
                        <h1>
                            <?= $mn; ?>
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                <?= $title; ?>
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->

                            <!-- View files to load -->
                            <?php $this->load->view($page_content); ?>



                            <div class="center">
                            </div>

                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <!-- Star footer content -->
        <?php $this->load->view('templates/v_footer'); ?>
        <!-- end footer content -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write(
        "<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <?php
    if (isset($list_js_plugin)) {
        foreach ($list_js_plugin as $list_js) { ?>
    <!-- JS plugin -->
    <script src="<?= base_url('assets/js/' . $list_js); ?>"></script>
    <?php
        }
    }
    ?>



    <!-- ace scripts -->
    <script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <?php
    if (isset($app_js)) {
        foreach ($app_js as $app_js) { ?>
    <!-- JS App -->
    <script src="<?= base_url('assets/app/js/' . $app_js); ?>"></script>
    <?php
        }
    }
    ?>





    <script type="text/javascript">
    jQuery(function($) {
        var $sidebar = $('.sidebar').eq(0);
        if (!$sidebar.hasClass('h-sidebar')) return;

        $(document).on('settings.ace.top_menu', function(ev, event_name, fixed) {
            if (event_name !== 'sidebar_fixed') return;

            var sidebar = $sidebar.get(0);
            var $window = $(window);

            //return if sidebar is not fixed or in mobile view mode
            var sidebar_vars = $sidebar.ace_sidebar('vars');
            if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
                $sidebar.removeClass('lower-highlight');
                //restore original, default marginTop
                sidebar.style.marginTop = '';

                $window.off('scroll.ace.top_menu')
                return;
            }


            var done = false;
            $window.on('scroll.ace.top_menu', function(e) {

                var scroll = $window.scrollTop();
                scroll = parseInt(scroll /
                    4); //move the menu up 1px for every 4px of document scrolling
                if (scroll > 17) scroll = 17;


                if (scroll > 16) {
                    if (!done) {
                        $sidebar.addClass('lower-highlight');
                        done = true;
                    }
                } else {
                    if (done) {
                        $sidebar.removeClass('lower-highlight');
                        done = false;
                    }
                }

                sidebar.style['marginTop'] = (17 - scroll) + 'px';
            }).triggerHandler('scroll.ace.top_menu');

        }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

        $(window).on('resize.ace.top_menu', function() {
            $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass(
                'sidebar-fixed')]);
        });


    });
    </script>



    <script>
    $('#skin-colorpicker').on('change', function() {
        // const id_user = $('input[name=id_user]').val();
        const val_skin = $('#skin-colorpicker').find(':selected').val();
        let skin = '';
        if (val_skin == '#438EB9') {
            skin = 'no-skin'
        } else if (val_skin == '#222A2D') {
            skin = 'skin-1'
        } else if (val_skin == '#C6487E') {
            skin = 'skin-2'
        } else if (val_skin == '#D0D0D0') {
            skin = 'skin-3'
        }
        console.log(id_user);
        $.ajax({
            type: 'post',
            url: base_url + 'admin/skin',
            data: {
                skin: skin,
                id_user: id_user
            }
        });
    });
    </script>


</body>

</html>