<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank"><?php echo get_store_name(); ?></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo get_theme_uri('vendor/js-cookie/js.cookie.js', 'argon'); ?>"></script>
  <script src="<?php echo get_theme_uri('vendor/jquery.scrollbar/jquery.scrollbar.min.js', 'argon'); ?>"></script>
  <script src="<?php echo get_theme_uri('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js', 'argon'); ?>"></script>

  <!-- Argon JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script src="<?php echo get_theme_uri('js/argon9f1e.js?v=1.1.0', 'argon'); ?>"></script>
  <script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        locale: {
          format: 'DD/MM/Y'
        }
    }, cb);

    cb(start, end);

});
</script>
</body>
</html>