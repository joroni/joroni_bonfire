    <?php if ( ! isset($show) || $show == true) : ?>
  
    <footer class="footer">
        <div class="container">
            <p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION; ?></a></p>
        </div>
    </footer>
    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>');</script>-->
     <script>window.jQuery || document.write('<script src="<?php echo plugins_path(); ?>jquery/jquery.min.js"><\/script>');</script>
    <script>window.jQuery || document.write('<script src="<?php echo plugins_path(); ?>bootstrap-select/js/bootstrap-select.js"><\/script>');</script>
    <script>window.jQuery || document.write('<script src="<?php echo plugins_path(); ?>jquery-slimscroll/jquery.slimscroll.js"><\/script>');</script>
    
    <?php echo Assets::js(); ?>
</body>
</html>