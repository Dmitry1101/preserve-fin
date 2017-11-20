<?php get_header(); /* Template Name: Why */ ?>

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

<div class="overview s">
    <div class="cont2">
        <div class="overview__inn content">
            <div class="sect-title overview__title">
                <?php the_field('title_tt'); ?>
            </div>
            <div class="overview__descr">
                <?php the_field('text_tt'); ?>
            </div>
            <?php if ($info_info = get_field('info_info')) { ?>
                <div class="overview__list">
                    <?php foreach ($info_info as $inf) { ?>
                        <div class="overview__list-it pos-rel" style="<?php echo image_src($inf['image'], '370x370', true, false); ?> -webkit-background-size: cover; background-size: cover;">
                            <span class="over__blu2"></span>
                            <div class="overview__list-inner">
                                <p>
                                    <b><?php echo $inf['title']; ?></b>
                                </p>
                                <p>
                                    <?php echo $inf['text']; ?>
                                </p>
                                <p>
                                    <a href="<?php echo $inf['link']; ?>" class="read-mmore">Read More</a>
                                </p>
                            </div><!-- .overview__list-inner -->
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>	<!-- .overview__inn -->
    </div><!-- .cont2 -->
    <?php get_template_part( 'constructor' ); ?>
</div><!-- .overview -->





<?php get_footer(); ?>

