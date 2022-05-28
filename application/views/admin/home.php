<div class="page-header">
    <h1>
        Dashboard
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            overview & stats
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->



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

                <!-- <div class="infobox infobox-red">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-flask"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">7</span>
                        <div class="infobox-content">experiments</div>
                    </div>
                </div>

                <div class="infobox infobox-orange2">
                    <div class="infobox-chart">
                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">6,251</span>
                        <div class="infobox-content">pageviews</div>
                    </div>

                    <div class="badge badge-success">
                        7.2%
                        <i class="ace-icon fa fa-arrow-up"></i>
                    </div>
                </div>

                <div class="infobox infobox-blue2">
                    <div class="infobox-progress">
                        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                            <span class="percent">42</span>%
                        </div>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-text">traffic used</span>

                        <div class="infobox-content">
                            <span class="bigger-110">~</span>
                            58GB remaining
                        </div>
                    </div>
                </div> -->

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



        <!-- ///////////////////////////////////////////////////// -->
        <!-- <div class="hidden-sm hidden-xs">
                                <button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
                                    <i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
                                    Collapse/Expand Menu
                                </button>
                            </div> -->

        <div class="center">
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

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
<?php
foreach ($grafik as $gr) {
    $alpa[] = (float) $gr->alpa;
    $sakit[] = (float) $gr->sakit;
    $cuti[] = (float) $gr->cuti;
}
?>

<?php $this->load->view('templates/footer'); ?>

<script src="<?= base_url(); ?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.flot.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.flot.pie.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.flot.resize.min.js"></script>

<script type="text/javascript">
jQuery(function($) {

    $('.easy-pie-chart.percentage').each(function() {

        var $box = $(this).closest('.infobox');
        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') :
            'rgba(255,255,255,0.95)');
        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt($(this).data('size')) || 50;
        $(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size / 10),
            animate: ace.vars['old_ie'] ? false : 1000,
            size: size
        });
    })



    //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
    //but sometimes it brings up errors with normal resize event handlers
    $.resize.throttleWindow = false;

    var placeholder = $('#piechart-placeholder').css({
        'width': '90%',
        'min-height': '150px'
    });
    let sakit = <?= $data['sakittahunan']; ?>;
    var alpa = <?= $data['alpatahunan']; ?>;
    var cuti = <?= $data['cutitahunan']; ?>;
    var izin = <?= $data['izintahunan']; ?>;
    console.log(sakit);
    var data = [{
            label: "cuti =" + cuti + " hari",
            data: cuti,
            color: "#68BC31"
        },
        {
            label: "izin =" + izin + " hari",
            data: izin,
            color: "#2091CF"
        },

        {
            label: "alpa = " + alpa + " hari",
            data: alpa,
            color: "#DA5430"
        },
        {
            label: "Sakit = " + sakit + " hari",
            data: sakit,
            color: "#FEE074"
        }
    ]

    function drawPieChart(placeholder, data, position) {
        $.plot(placeholder, data, {
            series: {
                pie: {
                    show: true,
                    tilt: 0.8,
                    highlight: {
                        opacity: 0.25
                    },
                    stroke: {
                        color: '#fff',
                        width: 2
                    },
                    startAngle: 2
                }
            },
            legend: {
                show: true,
                position: position || "ne",
                labelBoxBorderColor: null,
                margin: [-30, 15]
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        })
    }
    drawPieChart(placeholder, data);

    /**
    we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
    so that's not needed actually.
    */
    placeholder.data('chart', data);
    placeholder.data('draw', drawPieChart);


    //pie chart tooltip example
    var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo(
        'body');
    var previousPoint = null;

    placeholder.on('plothover', function(event, pos, item) {
        if (item) {
            if (previousPoint != item.seriesIndex) {
                previousPoint = item.seriesIndex;
                var tip = item.series['label'];
                $tooltip.show().children(0).text(tip);
            }
            $tooltip.css({
                top: pos.pageY + 10,
                left: pos.pageX + 10
            });
        } else {
            $tooltip.hide();
            previousPoint = null;
        }

    });

    /////////////////////////////////////
    $(document).one('ajaxloadstart.page', function(e) {
        $tooltip.remove();
    });




    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
        d3.push([i, Math.tan(i)]);
    }


    var sales_charts = $('#sales-charts').css({
        'width': '100%',
        'height': '220px'
    });
    $.plot("#sales-charts", [{
            label: "Domains",
            data: d1
        },
        {
            label: "Hosting",
            data: d2
        },
        {
            label: "Services",
            data: d3
        }
    ], {
        hoverable: true,
        shadowSize: 0,
        series: {
            lines: {
                show: true
            },
            points: {
                show: true
            }
        },
        xaxis: {
            tickLength: 0
        },
        yaxis: {
            ticks: 10,
            min: -2,
            max: 2,
            tickDecimals: 3
        },
        grid: {
            backgroundColor: {
                colors: ["#fff", "#fff"]
            },
            borderWidth: 1,
            borderColor: '#555'
        }
    });


    $('#recent-box [data-rel="tooltip"]').tooltip({
        placement: tooltip_placement
    });

    function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('.tab-content')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
        return 'left';
    }


    $('.dialogs,.comments').ace_scroll({
        size: 300
    });


    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
    //so disable dragging when clicking on label
    var agent = navigator.userAgent.toLowerCase();
    if (ace.vars['touch'] && ace.vars['android']) {
        $('#tasks').on('touchstart', function(e) {
            var li = $(e.target).closest('#tasks li');
            if (li.length == 0) return;
            var label = li.find('label.inline').get(0);
            if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
        });
    }

    $('#tasks').sortable({
        opacity: 0.8,
        revert: true,
        forceHelperSize: true,
        placeholder: 'draggable-placeholder',
        forcePlaceholderSize: true,
        tolerance: 'pointer',
        stop: function(event, ui) {
            //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
            $(ui.item).css('z-index', 'auto');
        }
    });
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function() {
        if (this.checked) $(this).closest('li').addClass('selected');
        else $(this).closest('li').removeClass('selected');
    });


    //show the dropdowns on top or bottom depending on window height and menu position
    $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
        var offset = $(this).offset();

        var $w = $(window)
        if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
            $(this).addClass('dropup');
        else $(this).removeClass('dropup');
    });

})
</script>




<?php $this->load->view('templates/fotHtml'); ?>