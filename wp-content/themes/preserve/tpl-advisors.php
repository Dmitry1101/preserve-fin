<?php get_header(); /* Template Name: Advisors */ ?>

<div class="topp" style="<?php echo image_src(get_field('background_tb'), 'free', true, false); ?> background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="cont2">
        <?php echo menuBox(); ?>
        <div class="topp__jumbo">
            <div class="topp__jumbo-head">
                <?php the_field('title_tb'); ?>
            </div>
        </div>
    </div><!-- .cont2 -->
</div><!-- .topp -->

<?php if ($steps = get_field('stories_st')) { ?>
<div class="stories">
    <?php foreach ($steps as $st) { ?>
        <div class="storry s storry-1 time-fert__blck gyy">
            <div class="storry__wrapp flexx">
                <div class="roundz__it for-desktop">
                    <img src="<?php echo image_src($st['image'], '370x370', false, false); ?>" alt="" class="roundz__img">
                    <div class="over__blu"></div>
                </div>
                <div class="storry__blck content">
                    <div class="storry__head sect-title">
                        <?php echo $st['title']; ?>
                    </div>
                    <div class="roundz__it for-mobile">
                        <img src="<?php echo image_src($st['image'], '370x370', false, false); ?>" alt="" class="roundz__img">
                        <div class="over__blu"></div>
                    </div>
                    <div class="storry__txt">
                        <?php echo $st['text']; ?>
                    </div>
                </div>
            </div>
        </div><!-- .storry -->
    <?php } ?>
</div>
<?php } ?>

<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

