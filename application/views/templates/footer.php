<div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                <span class="blue bolder">Ace</span>
                Application &copy; 2013-2014
            </span>

            &nbsp; &nbsp;
            <span class="action-buttons">
                <a href="#">
                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                </a>

                <a href="#">
                    <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                </a>

                <a href="#">
                    <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                </a>
            </span>
        </div>
    </div>
</div>

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
if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" +
    "<" + "/script>");
</script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/js/buttons.colVis.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.select.min.js"></script>

<!-- ace scripts -->
<script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
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
    const id_user = $('input[name=id_user]').val();
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