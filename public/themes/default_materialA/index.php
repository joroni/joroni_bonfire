<div class="overlay"></div>
<?php echo theme_view('header'); ?>

<!--<div class="container-fluids">-- Start of Main Container -->
    <?php
    echo theme_view('_sitenav');

    echo Template::message();
    ?>
      <section class="content">
        <div class="container-fluid">
    <?php
    echo isset($content) ? $content : Template::content();
    ?>
    </div>
</section>
    <?php

    echo theme_view('footer');
    ?>