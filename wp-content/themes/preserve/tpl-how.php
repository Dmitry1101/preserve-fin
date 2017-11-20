<?php get_header(); /* Template Name: How It Works */ ?>

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
<?php if ($items_items = get_field('items_items')) { 
    $kd_count = 0; ?>
    <div class="progg">
        <div class="cont2">
            <div class="kd-row">
                <?php foreach ($items_items as $itm) { ?>
                    <div class="kd-col-4">
                        <a href="<?php echo $itm['urll']; ?>" class="progg__link">
                            <div class="progg__it <?php echo( $kd_count >= 3 ) ? '' : 'firsst'; ?>">
                                <div class="progg__img">
                                    <img src="<?php echo $itm['image']; ?>" alt="">
                                </div>
                                <div class="progg__head">
                                    <?php echo $itm['title']; ?>
                                </div>
                                <div class="progg__txt">
                                    <?php echo $itm['text']; ?>
                                </div>
                                <?php if ($itm['time']) { ?>
                                    <div class="progg__counter">
                                        <p>
                                            <?php echo $itm['time']; ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                        </a>    
                    </div>
                <?php 
                $kd_count++;
                 echo ( $kd_count % 3 == 0 ) ? '</div><div class="kd-row">' : '';
                } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

