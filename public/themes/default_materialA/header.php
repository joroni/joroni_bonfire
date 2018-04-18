

<head>
    <meta charset="utf-8">
    <title>
        <?php
echo isset($page_title) ? "{$page_title} : " : '';
e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire');
?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php
e(isset($meta_description) ? $meta_description : '');
?>">
    <meta name="author" content="<?php
e(isset($meta_author) ? $meta_author : '');
?>">


<!--[if lte IE 8]>
 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"
<![endif]-->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php
echo base_url();
?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php
echo base_url();
?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php
echo base_url();
?>favicon-16x16.png">
    <link rel="manifest" href="<?php
echo base_url();
?>site.webmanifest">
    <link rel="mask-icon" href="<?php
echo base_url();
?>safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php
echo base_url();
?>favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php
Assets::add_css(array(
		'bootstrap-responsive.min.css',
		'bootstrap/css/bootstrap.min.css',
		'animate-css/animate.css',
		'style.css',
		'materialize.css',
		'themes/all-themes.css',
		'custom.css'
));
//Assets::add_js(array('bootstrap.min.js', 'admin.js', 'actions.js'));
$inline = '$(".dropdown-toggle").dropdown();';
$inline .= '$(".tooltips").tooltip();';
Assets::add_js($inline, 'inline');
?>

        <?php
echo Assets::css();
?>
        <?php
/* Modernizr is loaded before CSS so CSS can utilize its features */
// echo Assets::js('modernizr-2.5.3.js');
?>
</head>

