</div>
</div>


<!-- END FOOTER -->
</div>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="js/jquery.cokie.min.js" type="text/javascript"></script>
<script src="js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="js/jquery.vmap.js" type="text/javascript"></script>

<script src="js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script src="js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>

<script src="js/jquery.flot.min.js" type="text/javascript"></script>
<script src="js/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="js/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="js/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/daterangepicker.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<script src="js/metronic.js" type="text/javascript"></script>
<script src="js/layout.js" type="text/javascript"></script>
<script src="js/demo.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>
<script src="js/tasks.js" type="text/javascript"></script>
<script src="js/deleteConfirmation.js"></script>

<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>

</body>
</html>