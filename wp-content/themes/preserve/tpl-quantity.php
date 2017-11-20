<?php get_header(); /* Template Name: Quantity */ ?>

<div class="topp" style="<?php echo image_src(get_field('background_tb'), 'free', true, false); ?> background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="cont2">
        <?php echo menuBox(); ?>
        <div class="topp__jumbo">
            <div class="topp__jumbo-head">
                <?php the_field('title_tb'); ?>
            </div>
            <?php if (get_field('text_tb')) { ?>
                <div class="topp__jumbo-descr">
                    <?php the_field('text_tb'); ?>
                </div>
            <?php } ?>
        </div>
    </div><!-- .cont2 -->
</div><!-- .topp -->
<?php if (get_field('image_tt') || get_field('text_tt') || get_field('title_tt')) { ?>
    <div class="storry storry__full time-fert__blck">
        <div class="cont2">
            <div class="storry__wrapp txt-cent">
                <?php if (get_field('image_tt')) { ?>
                    <img src="<?php the_field('image_tt'); ?>" class="storry__img" alt="">
                <?php } ?>
                <?php if (get_field('title_tt') || get_field('text_tt')) { ?>
                    <div class="storry__blck content">
                        <div class="storry__head sect-title">
                            <?php the_field('title_tt'); ?>
                        </div>
                        <div class="storry__txt">
                            <?php the_field('text_tt'); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!-- .cont2 -->
    </div><!-- .storry -->
<?php } ?>
<?php if (get_field('subtitle_si') || get_field('milestones_si')) { ?>
    <div class="miless ">
        <div class="cont2">
            <div class="miless__head">
                <?php the_field('subtitle_si'); ?>
            </div>
            <?php if ($milestones_si = get_field('milestones_si')) { ?>
                <div class="miless__list">
                    <?php foreach ($milestones_si as $mi) { ?>
                        <div class="miless__it odd">
                            <div class="miless__blck blck-1">
                                <?php echo $mi['year']; ?>
                            </div>
                            <div class="miless__blck blck-2">
                                <?php echo $mi['text']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div><!-- .miless__list" -->
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if ($info_info = get_field('info_info')) { ?>
    <div class="stories">
        <?php foreach ($info_info as $inf) { ?>
            <div class="storry s storry-1 time-fert__blck">
                <div class="storry__wrapp flexx">
 
                    <div class="pos-rel for-desktop <?php if ($inf['video']) {echo 'pos-rel__vidd';} ?>">
                        <img src="<?php echo $inf['image']; ?>" class="storry__img" alt="">
                        <span class="over__blu2"></span>
                        <?php if ($inf['video']) { ?>
                            <span class="play__trigg" data-hreff='<iframe src="<?php echo $inf['video']; ?>" width="643" height="360" frameborder="0"></iframe>'></span>
                        <?php } ?>
                    </div>

                    <div class="storry__blck content">
                        <div class="storry__head sect-title">
                            <?php echo $inf['title']; ?>
                        </div>
                        
                        <div class="pos-rel for-mobile <?php if ($inf['video']) {echo 'pos-rel__vidd';} ?>">
                            <img src="<?php echo $inf['image']; ?>" class="storry__img" alt="">
                            <span class="over__blu2"></span>
                            <?php if ($inf['video']) { ?>
                                <span class="play__trigg" data-hreff='<iframe src="<?php echo $inf['video']; ?>" width="643" height="360" frameborder="0"></iframe>'></span>
                            <?php } ?>
                        </div>    

                        <div class="storry__txt">
                            <?php echo $inf['text']; ?>
                        </div>
                    </div>
                </div>
            </div><!-- .storry -->
        <?php } ?>
    </div>
<?php } ?>


<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

