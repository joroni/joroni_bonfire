<?php echo theme_view('header'); ?>
<style>
    .login-page {
        background-color: #afbec5;

    }

    .content a {
        color: #607D8B;
    }

</style>
<!--div class="container"> Start of Main Container -->
<section class="content">
    <div class="container-fluid">
        <?php
    echo isset($content) ? $content : Template::content();
?>
    </div>
</section>
<?php
    echo theme_view('footer', array('show' => false));
?>
