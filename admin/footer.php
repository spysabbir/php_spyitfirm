        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; <?= date('Y') ?>. <?= spy_sabbir_update('theme_default', 'company_name'); ?>. All Rights Reserved.</div>
                <div>Attentively and carefully made by <?= spy_sabbir_update('theme_default', 'company_name'); ?>.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Follow:</span>
                <a target="_blank" class="pd-x-5" href="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>"><i class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>"><i class="fa fa-twitter tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>"><i class="fa fa-instagram tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>"><i class="fa fa-linkedin tx-20"></i></a>
            </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#message_table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });
    </script>
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/moment/moment.js"></script>
    <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="lib/peity/jquery.peity.js"></script>
    <script src="lib/chartist/chartist.js"></script>
    <script src="lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="lib/d3/d3.js"></script>

    <script src="js/bracket.js"></script>
    <script src="js/ResizeSensor.js"></script>
    <script src="js/dashboard.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Data Table With Export Button-->
    <script src="lib/datatables/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="lib/datatables/jszip/jszip.min.js"></script>
    <script src="lib/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="lib/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="lib/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="lib/datatables/buttons/js/buttons.print.min.js"></script>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <script>
        $(function() {
            'use strict'
            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function() {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia(
                        '(max-width: 1299px)')
                    .matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                        'collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Type Your Text',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['action', ['undo', 'redo', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['backcolor', 'forecolor']],
                ['height', ['height']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen', 'codeview']],
            ],
        });
    </script>
</body>

</html>