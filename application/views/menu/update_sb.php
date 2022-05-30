<div class="row">
    <div class="col-xs-12">

        <div class="col-xs-12 col-sm-8 widget-container-col" id="widget-container-col-2">
            <div class="widget-box widget-color-blue" id="widget-box-2">
                <div class="widget-header">
                    <h5 class="widget-title bigger lighter">
                        <i class="ace-icon fa fa-list"></i>
                        Submenu
                    </h5>


                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- Form menu -->
                        <form class="form-horizontal" role="form" action="<?= base_url('menu/updatesubmenu'); ?>" id="f_update">
                            <input type="hidden" name="sb_id" id="sb_id" value="<?= $id_submenu; ?>">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="kode"> Menu </label>
                                <div class="col-sm-4">
                                    <select class="chosen-select form-control" name="menu" id="menu" data-placeholder="Choose a State...">
                                        <option value=""></option>
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="title">Title</label>

                                <div class="col-sm-9">
                                    <input type="text" id="title" name="title" value="" class=" col-xs-10 col-sm-5" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="status">Posisi</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select form-control" name="sc" id="sc" data-placeholder="Choose a State...">
                                        <option value=""></option>
                                        <option value="single">Single menu</option>
                                        <option value="parent">Parent menu</option>
                                        <option value="child">Child menu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group induk">
                                <label class="col-sm-3 control-label no-padding-right" for="nama">Parent menu</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select form-control" name="sb" id="sb" data-placeholder="Choose a State...">
                                        <option value=""></option>
                                        <?php foreach ($sb_induk as $s) : ?>
                                            <option value="<?= $s['id']; ?>"><?= $s['title']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="url">url </label>

                                <div class="col-sm-9">
                                    <input type="text" id="url" name="url" value="" class="col-xs-10 col-sm-5" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="icon">Icon </label>

                                <div class="col-sm-9">
                                    <input type="text" id="icon" name="icon" value="" class="col-xs-10 col-sm-5" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                        </form>

                        <!-- End Form menu -->
                        <div class="alert alert-danger" style="display: none; ">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>

                            <strong>
                                <i class="ace-icon fa fa-times"></i>
                                Ups..!
                            </strong>
                            masih ada data yang kong

                            <br />
                        </div>
                    </div>
                    <div class="widget-toolbox padding-8 clearfix text-center">
                        <button class="btn btn-xs btn-default" id="back">
                            <i class="ace-icon fa fa-arrow-left"></i>
                            <span class="bigger-110">kembali</span>
                        </button>

                        <button class="btn btn-xs btn-primary " type="button" id="update">
                            <i class="ace-icon fa fa-save"></i>
                            <span class="bigger-110">simpan</span>
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
                    <div class="widget-main padding-4 scrollable" data-size="310">
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