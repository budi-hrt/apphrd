<div class="row">
    <div class="col-xs-12">

        <div class="col-xs-12 col-sm-8 widget-container-col" id="widget-container-col-2">
            <div class="widget-box widget-color-blue" id="widget-box-2">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="ace-icon fa fa-list"></i>
                        Menu
                    </h5>


                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- Form menu -->
                        <form class="form-horizontal" role="form" action="<?= base_url('menu/updatemenu'); ?>" id="f_update">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="kode"> Kode </label>
                                <div class="col-sm-9">
                                    <input type="text" id="kode" value="AUTO" class="col-xs-10 col-sm-5" />
                                    <input type="hidden" name="menu_id" id="menu_id" value="<?= $menu['id']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="nama">Menu</label>

                                <div class="col-sm-9">
                                    <input type="text" id="menu" name="menu" value="<?= $menu['menu']; ?>" class="col-xs-10 col-sm-5" />
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="icon">Icon </label>

                                <div class="col-sm-9">
                                    <input type="text" id="icon" name="icon" value="<?= $menu['icon']; ?>" class="col-xs-10 col-sm-5" />
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>

                        </form>

                        <!-- End Form menu -->

                    </div>
                    <div class="widget-toolbox padding-8 clearfix text-center">
                        <button class="btn btn-xs btn-default" id="back">
                            <i class="ace-icon fa fa-arrow-left"></i>
                            <span class="bigger-110">kembali</span>
                        </button>

                        <button class="btn btn-xs btn-primary " type="button" id="update">
                            <i class="ace-icon fa fa-save"></i>
                            <span class="bigger-110">update</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- /.span -->


        <!-- icon -->
        <div class="col-sm-4 widget-container-col" id="widget-container-col-11">
            <div class="widget-box widget-color-dark" id="widget-box-11">
                <div class="widget-header">
                    <i class="fa fa-flag"></i>
                    <h6 class="widget-title">Data icon</h6>
                    <div class="widget-toolbar">
                        <h6 class=" lighter">
                            369 Scalable FontAwesome Icons
                            <small>
                                <a class="text-success" href="http://fontawesome.io/icons/" target="_blank">
                                    (see all icons
                                    <i class="ace-icon fa fa-external-link"></i>)
                                </a>
                            </small>
                        </h6>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main padding-4 scrollable" data-size="214">
                        <div class="content">
                            <ul class="list-unstyled">
                                <?php foreach ($icons as $icon) : ?>
                                    <li>
                                        <i class="ace-icon fa <?= $icon['icon']; ?>"></i>
                                        <?= $icon['icon']; ?>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>