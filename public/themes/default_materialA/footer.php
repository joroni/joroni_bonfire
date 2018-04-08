    <?php if ( ! isset($show) || $show == true) : ?>
    <hr />
    <footer class="footer">
        <div class="container">
            <p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION; ?></a></p>
        </div>
    </footer>
    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="</*?php echo js_path(); */?>jquery-1.7.2.min.js"><\/script>');</script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery.min.js"><\/script>');</script>
	
    <?php echo Assets::js(); ?>

      <!-- Bootstrap Core Js -->
      <script src="<?php echo Template::theme_url('plugins/bootstrap/js/bootstrap.js'); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo Template::theme_url('plugins/bootstrap-select/js/bootstrap-select.js'); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo Template::theme_url('plugins/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>
     <!-- Waves Effect Plugin Js -->
     <script src="<?php echo Template::theme_url('plugins/node-waves/waves.js'); ?>"></script>
     

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo Template::theme_url('plugins/jquery-countto/jquery.countTo.js'); ?>"></script>

  <script src="<?php echo Template::theme_url('js/admin.js'); ?>"></script>
    <script src="<?php echo Template::theme_url('js/actions.js'); ?>"></script>
  
</body>
</html>