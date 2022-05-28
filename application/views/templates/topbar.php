<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <!-- QUERY DASHBOARD -->
        <?php
        $roleId = $this->session->userdata('role_id');
        $querydashboard = "SELECT `user_dashboard`.`id`,`dashboard`,`icon`,`url_dashboard`
                                  FROM `user_dashboard` JOIN `access_dashboard`
                                  ON `user_dashboard`.`id`= `access_dashboard`.`dashboard_id`
                                  WHERE `access_dashboard`.`role_id`=$roleId";
        $dashboard = $this->db->query($querydashboard)->row_array(); ?>
        <?php
        $url_dash = $dashboard['url_dashboard'];
        $home = $dashboard['dashboard'];
        if ($mn == $home) {
            echo '<li class="active open hover">';
        } else {

            echo '<li class="hover">';
        }; ?>


        <!-- <li class="active open hover"> -->
        <a href="index.html">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>
        <b class="arrow"></b>
        </li>


        <!-- MENU -->
        <!-- QUERY MENU -->
        <?php
        $user_id = $this->session->userdata('id');
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`,`icon`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>




        <!-- LOOPING MENU -->
        <?php foreach ($menu as $m) : ?>
            <?php if ($mn == $m['menu']) : ?>
                <li class="active open hover">
                <?php else : ?>
                <li class="hover">
                <?php endif; ?>
                <a href="javascript:void(0)" class="dropdown-toggle">
                    <i class="menu-icon fa <?= $m['icon']; ?>"></i>
                    <span class="menu-text">
                        <?= $m['menu']; ?>
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>


                <!-- SUB MENU -->



                <ul class="submenu">
                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuId = $m['id'];


                    $querySubMenu = "SELECT `user_sub_menu`.`id`
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";

                    $subMenu = $this->db->query($querySubMenu)->result_array();

                    ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <?php

                        $smId = $sm['id'];



                        $userId = $user['id'];
                        $queryUserSubMenu = "SELECT *
                        FROM `user_access_sub_menu`
                        JOIN `user_sub_menu`
                        ON `user_access_sub_menu`.`submenu_id`=`user_sub_menu`.`id`
                        JOIN `user_menu`
                        ON `user_access_sub_menu`.`menu_id`=`user_menu`.`id`
                        WHERE `user_access_sub_menu`.`submenu_id`=$smId
                        AND `user_access_sub_menu`.`menu_id`=$menuId
                        AND `user_access_sub_menu`.`user_id`=$userId
                        ";
                        $accessSubMenu = $this->db->query($queryUserSubMenu)->result_array();
                        ?>
                        <?php foreach ($accessSubMenu as $asm) : ?>
                            <li class="hover">
                                <a href="<?= base_url($asm['url']); ?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    <?= $asm['title']; ?>
                                </a>

                                <b class="arrow"></b>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
                </li>

            <?php endforeach; ?>




    </ul><!-- /.nav-list -->
</div>

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
                                <select id="skin-colorpicker" name="color-skin" class="hide">
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
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>


                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->