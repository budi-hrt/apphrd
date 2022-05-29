<div class="row">
    <div class="col-xs-12">
        <!-- <h3 class="header smaller lighter blue">jQuery dataTables</h3> -->

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header">
            <i class="fa fa-list"></i>
            Data Submenu
            <div class="widget-toolbar">
                <a href="<?= base_url('menu/create_sb'); ?>" class="btn btn-minier btn-yellow"> <i class="fa fa-plus"></i> Tambah baru</a>
            </div>
        </div>
        <!-- div.table-responsive -->

        <!-- div.dataTables_borderWrap -->






        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="50">#</th>
                        <th class="text-center" width="100">Action</th>
                        <th class="text-center">Menu</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Url</th>
                    </tr>
                </thead>
                <tbody id="showsubmenu">
                    <?php
                    $no = 1;
                    foreach ($submenu as $sm) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="blue" href="javascript:;">
                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                    </a>
                                    <a class="green item-edit" href="<?= base_url(); ?>menu/update_sb/<?= $sm['sub_id']; ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red item-delete" href="javascript:;" data="<?= $sm['sub_id']; ?>">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['url']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>