<?php get_header(); /* Template Name: Landing */ ?>
<div class="s header">
    <div class="cont1">
        <div class="header__blck">
            <img src="<?php echo theme('img/logo.png'); ?>" class="header__logo" alt="">
            <div class="header__titl sect-title">
                <?php the_field('title_tb'); ?>
            </div>
            <div class="header__txt content">
                <?php the_field('text_tb'); ?>
            </div>
        </div><!-- header__blck -->
    </div><!-- .cont1 -->
</div><!-- .header -->
<div class="info s">
    <div class="cont1">
        <div class="info__blck">
            <div class="sect-title info__title">
                <?php the_field('title_info'); ?>
            </div>
            <div class="info__txt content">
                <?php the_field('text_info'); ?>
            </div>
        </div>
    </div><!-- .cont1 -->
</div><!-- .info -->
<div class="colored colored-1 s">
    <div class="cont1 clearfix">
        <div class="colored__blck">
            <div class="colored__head">
                <?php the_field('title_sf'); ?>
            </div>
        </div>
        <div class="colored__blck">
            <div class="colored__txt">
                <?php the_field('text_sf'); ?>
            </div>
        </div><!-- .colored__blck -->
    </div>
</div>
<div class="colored colored-2 s">
    <div class="cont1 clearfix">
        <div class="colored__blck">
            <div class="colored__head">
                <?php the_field('title_sv'); ?>
            </div>
        </div>
        <div class="colored__blck">
            <div class="colored__txt">
                <?php the_field('text_sv'); ?>
            </div>
        </div><!-- .colored__blck -->
    </div>
</div><!-- .colored -->
<div class="process s">
    <div class="cont1">
        <div class="sect-title process__title">
            <?php the_field('title_proc'); ?>
        </div>
        <?php if ($process = get_field('process')) { ?>
            <div class="process__list">
                <?php foreach ($process as $proc) { ?>
                    <div class="process__blck blck-1">
                        <div class="process__head">
                            <?php echo $proc['title']; ?>
                        </div>
                        <div class="process__txt">
                            <?php echo $proc['text']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div><!-- .process__list -->
        <?php } ?>
    </div>
</div><!-- .process -->
<div class="facts s" style="<?php echo image_src(get_field('background_facts'), 'free', true, false); ?>">
    <div class="cont1 clearfix">
        <div class="facts__blck">
            <div class="sect-title facts__title">
                <?php the_field('title_facts'); ?>
            </div>
            <div class="facts__descr">
                <?php the_field('subtitle_facts'); ?>
            </div>
            <div class="colored__txt">
                <?php the_field('text_facts'); ?>
            </div>
        </div><!-- .facts__blck -->
    </div>
</div><!-- .facts -->
<div class="physicians s">
    <div class="cont1 clearfix">
        <div class="physicians__blck blck1">
            <div class="sect-title physicians__title">
                <?php the_field('title_ph'); ?>
            </div>
            <div class="physicians__descr">
                <?php the_field('top_text'); ?>
            </div>
        </div><!-- .blck1 -->
        <?php if ($physicians = get_field('physicians')) { ?>
            <?php foreach ($physicians as $phy) { ?>
                <div class="physicians__blck blck2">
                    <img src="<?php echo $phy['image']; ?>" alt="" class="physicians__img">
                    <div class="physicians__txt">
                        <?php echo $phy['text']; ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div><!-- .physicians -->
<div class="office">
    <div class="office__blck blck-1 clearfix">
        <div class="office__wrapp">
            <div class="sect-title office__title">
                <?php the_field('title_office'); ?>
            </div>
            <div class="office__descr">
                <?php the_field('subtitle_office'); ?>
            </div>
            <div class="office__txt content">
                <?php the_field('text_office'); ?>
            </div><!-- .office__txt -->

            <div class="office__tbl tbl">
                <div class="cell-1 celll">
                    <i class="office__ico ico-phone" style="<?php echo image_src(get_field('adress_image_office'), '54x54', true, false); ?> background-position: center; background-repeat: no-repeat;"></i>
                    <span><?php the_field('adress_office'); ?></span>
                </div>
                <div class="cell-2 celll">
                    <i class="office__ico ico-phone" style="<?php echo image_src(get_field('phone_image_office'), '54x54', true, false); ?> background-position: center; background-repeat: no-repeat;"></i>
                    <span><?php the_field('phone_office'); ?></span>
                </div>
            </div>

        </div>
    </div>

    <?php
    $location = get_field('map');
    if( !empty($location) ):
        ?>
        <div class="acf-map office__blck blck-2" id="map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    <?php endif; ?>
</div><!-- .office -->
<div class="footer">
    <div class="cont1">
        <div class="footer__inner">
            <img src="<?php echo theme('img/logo.png'); ?>" class="footer__logo">
            <div class="footer__info">
                Full website coming soon
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

