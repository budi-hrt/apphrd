<div class="row">
    <div class="col-xs-12">

        <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
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
                                <div class="col-sm-3">
                                    <select class="chosen-select form-control" name="menu" id="menu" data-placeholder="Choose a State...">
                                        <option value="<?= $sub['menu_id']; ?>"><?= $sub['menu']; ?></option>
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="nama">Title</label>

                                <div class="col-sm-9">
                                    <input type="text" id="title" name="title" value="<?= $sub['title']; ?>" class=" col-xs-10 col-sm-5" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="icon">url </label>

                                <div class="col-sm-9">
                                    <input type="text" id="url" name="url" value="<?= $sub['url']; ?>" class="col-xs-10 col-sm-5" />
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




    </div>
</div>