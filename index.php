<?php
get_header();
?>
<div class="v-header container">
<div class="videoBgWrapper">
  <video autoplay muted loop>
    <source src="<?php echo get_template_directory_uri() .'/assets/media/Gradient_Video.mp4' ?>" type="video/mp4" />
  </video>
</div>
<!-- <div class="BgWrapper">
<div class='BG_logo'></div>
</div> -->
<div class="header-content">
  <div class="row row1">
    <div class="row1-col row1-col1">
    <div class='NX_logo'></div>
    </div>
    <div class="row1-col row1-col2">
      <img class="row1-col2__img" src="<?php echo get_template_directory_uri() .'/assets/media/Samsung_Logo.svg' ?>" alt="" />
    </div>
  </div>

  
  <div class="row row2">
    <div class="row2-col row2-col1">
      <div class="nx_text"> Part of North America Service Business </div>
    </div>
    <div class="row2-col row2-col2">
    <div class="nx_description">
       <div> We seek the next experience. </div>
       <div> We create new experiences for Samsung's </div>
       <div>consumer product lines, </div>
       <div>from core TV and mobile products </div>
      <div>for the future of digital lifestyle. </div>
    </div>
    </div>
    <div class="row2-col row2-col3">
    <div class="nx_team">The Next Experience Team </div>
    </div>
  </div>
  <div class="row row3">
    <div class="row3-col row3-col1">Coming soon end of 2020</div>
  </div>
</div>
</div>
<?php
get_footer();
?>