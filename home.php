<?php get_header() ?>

<div class="home">
    <div class="row col1"> 
     <?php $button= get_field('button'); ?>
     <a href="<?php echo $button['url'];?>" target='_blank'> <?php echo $button['title']; ?></a>
    </div>
    <div class="content">
     <div class="row col2"> 
      <?php $image= get_field('image');?>
     <img src="<?php echo $image['url'] ?>" alt="image">
     </div>
     <div class="row col3"> <?php the_field('title'); ?></div>
     </div>
</div>
<?php get_footer() ?>