<?php get_header(); /* Template Name: Your Team */ ?>

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

<div class="storry storry__full time-fert__blck gyy">
    <div class="cont2">
        <div class="storry__wrapp txt-cent">
            <div class="storry__blck content">
                <div class="storry__head sect-title">
                    <?php the_field('title_tt'); ?>
                </div>
                <div class="storry__txt">
                    <?php the_field('text_tt'); ?>
                </div>
            </div>
        </div>
    </div><!-- .cont2 -->
</div><!-- .storry -->
<?php if ($info_info = get_field('info_info')) { ?>
    <div class="roundz">
        <?php foreach ($info_info as $info) { ?>
            <div class="roundz__it">
                <img src="<?php echo image_src($info['image'], '370x370', false, false); ?>" alt="" class="roundz__img">
                <div class="over__blu"></div>
                <div class="roundz__head"><a href="<?php echo $info['kd89_acf_link']; ?>"><?php echo $info['text']; ?></a></div>
            </div>
        <?php } ?>
    </div><!-- .roundz -->
<?php } ?>


<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

