<?php get_header() ?>
<?php $bg_image= get_field('background');?>
<?php $lifestyle_image= get_field('lifestyle');?>
<?php $guide_image= get_field('guide');?>
<?php $tv_image= get_field('tv');?>
<?php $gr1c1_image= get_field('gridrowonecolone');?>
<?php $gr1c2_image= get_field('gridrowonecoltwo');?>
<?php $gr2c1_image= get_field('gridrowtwocolone');?>
<?php $gr2c2_image= get_field('gridrowtwocoltwo');?>
<div class="home">
    <div class="container">
        <div class="row">
            <div class="content col-md-7">
                <img src="<?php echo $tv_image['url'] ?>" alt="" />
            </div>
            <div class="overlay col-md-5 ">
                <div class="title"><?php the_field('title'); ?></div>
                <div class="subtitleOne"><?php the_field('subtitleone'); ?></div>
                <div class="subtitleTwo"><?php the_field('subtitletwo'); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="lifestyle">
    <img src="<?php echo $lifestyle_image['url'] ?>" alt="" />
</div>
<div class="guide">
    <div class="containerr">
        <div class="title"><?php the_field('guidetitle'); ?></div>
        <div class="subtitle"><?php the_field('guidesubtitle'); ?></div>
    </div>
    <div class="wrapper">
        <img src="<?php echo $guide_image['url'] ?>" alt="" />
    </div>
</div>
<div class="grid container-fluid">
    <div class="row row1">
        <div class="col-md-6">
        <img src="<?php echo $gr1c1_image['url'] ?>" alt="" />
        </div>
        <div class="col-md-6">
        <img src="<?php echo $gr1c2_image['url'] ?>" alt="" />
        </div>
    </div>
    <div class="row row2">
        <div class="col-md-6">
        <img src="<?php echo $gr2c1_image['url'] ?>" alt="" />
        </div>
        <div class="col-md-6">
        <img src="<?php echo $gr2c2_image['url'] ?>" alt="" />
        </div>
    </div>
</div>
<div class="press">
    <div class="wrapper">
      <div class="title"> In The Press</div>
      <div class="subtitle">Lorem ipsum dolor sit Commodi, odio!</div>
    </div>
    <div class="corousel">
        <div class="oval oval1" style="background:#d8d8d8;"></div>
        <div class="oval oval2"></div>
        <div class="oval oval3" style="background:#d8d8d8;"></div>
    </div>
</div>
<?php get_footer() ?>