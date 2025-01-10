<?php
/**
 * Header template.
 *
 * @package Gravity
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Gravity Theme" />
    <meta name="keywords" content="Gravity Theme for WordPress" />
    <meta name="author" content="Yulia Savinkova" />
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>

    <header>Header</header>