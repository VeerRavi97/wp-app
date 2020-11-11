<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <?php wp_head() ?>
    <script type="text/javascript">
       let theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script> 
</head>
<?php $theme_color= get_field('theme'); ?>
<body>
<header>
<nav class="nav">
    <div class="logo"></div>
    <div class='items'>
      <?php wp_nav_menu(); ?>
    </div>
    <div class="burger">
    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/icon-menu.png';?>" alt="">
      </div>
</nav>
</header>