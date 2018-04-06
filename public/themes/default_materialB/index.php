<?php echo theme_view('header'); ?>
<!-- <div class="container">Start of Main Container -->
 
<?php
    echo theme_view('_sitenav');
?>
 <section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            <div class="body">
            <?php

                echo Template::message();
                echo isset($content) ? $content : Template::content();
                ?>
                  </div>
            </div>
        </div>
        </div>
    </div>
</section>
    
<?php
    echo theme_view('footer');
    ?>