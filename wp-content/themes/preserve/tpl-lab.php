<?php get_header(); /* Template Name: Your Lab */ ?>

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
    <div class="storry__wrapp txt-cent">
        <div class="storry__blck content">
            <div class="storry__head sect-title">
                <?php the_field('title_tt'); ?>
            </div>
        </div>
    </div>
</div><!-- .storry -->
<?php if ($doctors = get_field('doctors')) { ?>
    <div class="stories">
        <?php foreach ($doctors as $doctor) { ?>
            <div class="storry s storry-1 time-fert__blck gyy">
                <div class="storry__wrapp flexx">
                    <div class="roundz__it for-desktop">
                        <img src="<?php echo image_src($doctor['image'], '370x370', false, false); ?>" alt="" class="roundz__img">
                        <div class="over__blu"></div>
                    </div>
                    <div class="storry__blck content">
                        <div class="storry__head sect-title">
                            <?php echo $doctor['title']; ?>
                        </div>
                        <div class="roundz__it for-mobile">
                            <img src="<?php echo image_src($doctor['image'], '370x370', false, false); ?>" alt="" class="roundz__img">
                            <div class="over__blu"></div>
                        </div>
                        <div class="storry__txt">
                            <?php echo $doctor['text']; ?>
                        </div>
                    </div>
                </div>
            </div><!-- .storry -->
        <?php } ?>
    </div>
<?php } ?>

<div class="accredit s txt-cent">
    <div class="sect-title accredit__title">
        <?php the_field('title_ac'); ?>
    </div>
    <div class="sect-descr">
        <?php the_field('top_text_ac'); ?>
    </div>
    <?php if ($items_ac = get_field('items_ac')) { ?>
        <div class="accredit__list-1">
            <div class="kd-row">
                <?php foreach ($items_ac as $itm) { ?>
                    <div class="kd-col-3">
                        <div class="accredit__it">
                            <div class="accredit__img">
                                <img src="<?php echo $itm['image']; ?>" alt="">
                            </div>
                            <div class="accredit__txt">
                                <?php echo $itm['text']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div><!-- .accredit__list-1 -->
    <?php } ?>
</div><!-- .accredit -->

<div class="accredit s txt-cent">
    <div class="cont2">
        <div class="sect-title accredit__title">
            <?php the_field('title_proc'); ?>
        </div>
        <div class="sect-descr">
            <?php the_field('text_proc'); ?>
        </div>
        <img src="<?php the_field('image_proc'); ?>" class="accredit_graph" alt="">
    </div>
</div><!-- .accredit -->

<div class="accredit s txt-cent">
    <div class="sect-title accredit__title">
        <?php the_field('title_cr'); ?>
    </div>
    <div class="sect-descr">
        <?php the_field('text_cr'); ?>
    </div>
    <?php if ($cryostorage = get_field('cryostorage')) { ?>
        <div class="accredit__list-2 accredit__signs">
            <div class="kd-row">
                <?php foreach ($cryostorage as $cr) { ?>
                    <div class="kd-col-13">
                        <div class="accredit__signs-it">
                            <img src="<?php echo $cr['image']; ?>" alt="">
                            <p>
                                <?php echo $cr['text']; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div><!-- .kd-row -->
        </div>
    <?php } ?>
</div><!-- .accredit -->

<div class="accredit s txt-cent">
    <div class="cont2">
        <div class="sect-title accredit__title">
            <?php the_field('title_tr'); ?>
        </div>
        <div class="sect-descr">
            <?php the_field('text_tr'); ?>
        </div>
        <img src="<?php the_field('image_tr'); ?>" class="accredit_graph" alt="">
    </div>
</div><!-- .accredit -->

<?php get_template_part( 'constructor' ); ?>


<?php get_footer(); ?>

