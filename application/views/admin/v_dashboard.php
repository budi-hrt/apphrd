<div class="row">
    <div class="space-6"></div>

    <div class="col-sm-7 infobox-container">
        <div class="infobox infobox-green">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"><?= $total; ?></span>
                <div class="infobox-content">Jumlah Karyawan</div>
            </div>
        </div>

        <div class="infobox infobox-blue">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-bookmark"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"> <?= $permanent; ?></span>
                <div class="infobox-content">Karyawan tetap</div>
            </div>
        </div>

        <?php
        $kontrak = $total - $permanent;; ?>

        <div class="infobox infobox-pink">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-pencil-square-o "></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number"> <?= $kontrak; ?></span>
                <div class="infobox-content">Karyawan Kontrak</div>
            </div>
        </div>



        <div class="space-6"></div>

        <div class="infobox infobox-green infobox-small infobox-dark">
            <div class="infobox-progress">
                <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                    <span class="percent">61</span>%
                </div>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Task</div>
                <div class="infobox-content">Completion</div>
            </div>
        </div>

        <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-chart">
                <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Earnings</div>
                <div class="infobox-content">$32,000</div>
            </div>
        </div>

        <div class="infobox infobox-grey infobox-small infobox-dark">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-download"></i>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Downloads</div>
                <div class="infobox-content">1,205</div>
            </div>
        </div>
    </div>

    <div class="vspace-12-sm"></div>

    <div class="col-sm-5">
        <div class="widget-box">
            <div class="widget-header widget-header-flat widget-header-small">
                <h5 class="widget-title">
                    <i class="ace-icon fa fa-signal"></i>
                    Traffic Absensi tahun ini
                </h5>


            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div id="piechart-placeholder"></div>

                    <div class="hr hr8 hr-double"></div>

                    <div class="clearfix">
                        <div class="grid3">
                            <span class="grey">
                                <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                                &nbsp; likes
                            </span>
                            <h4 class="bigger pull-right">1,255</h4>
                        </div>

                        <div class="grid3">
                            <span class="grey">
                                <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                                &nbsp; tweets
                            </span>
                            <h4 class="bigger pull-right">941</h4>
                        </div>

                        <div class="grid3">
                            <span class="grey">
                                <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                                &nbsp; pins
                            </span>
                            <h4 class="bigger pull-right">1,050</h4>
                        </div>
                    </div>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- /.widget-box -->
    </div><!-- /.col -->
</div> <!-- /.row -->

<!-- quey -->
<?php
$tahun = date('Y');
$q = "SELECT `id_ket`, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=1,0)) AS sakittahunan, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=3,0)) AS cutitahunan, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=4,0)) AS izintahunan, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=6,0)) AS latetahunan, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=7,0)) AS lupatahunan, 
							SUM(IF(YEAR(`tanggal_absen`)= $tahun, `id_ket`=10,0)) AS alpatahunan 
							FROM `absen`";
$data = $this->db->query($q)->row_array();; ?>
<!-- end query -->

<script>
    let sakit = <?= $data['sakittahunan']; ?>;
    var alpa = <?= $data['alpatahunan']; ?>;
    var cuti = <?= $data['cutitahunan']; ?>;
    var izin = <?= $data['izintahunan']; ?>;
</script>