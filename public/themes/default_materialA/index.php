<?php echo theme_view('header'); ?>
<div class="overlay"></div>

<body class="ls-closed">
        <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
<!--<div class="container-fluids"> Start of Main Container -->
    <?php
    echo theme_view('_sitenav');

    echo Template::message();
    ?>
      <section class="content">
                    <div class="container-fluid">
            <?php
            echo isset($content) ? $content : Template::content();

            $this->load->helper('categories/categories');
            ?>
                </div>




                <?php
                if (!empty($posts) && is_array($posts)) :
                    foreach ($posts as $post) :
                ?>
                <div class="post">
                    <h2><?php e($post->title); ?></h2>
                    <?php echo auto_typography($post->body); ?>
                </div>
                <?php
                    endforeach;
                else :
                ?>
                <div class="alert alert-info">
                    No Posts were found.
                </div>
                    <?php
                    endif;
                    ?>
    </section>
    <?php

    echo theme_view('footer');
    ?>