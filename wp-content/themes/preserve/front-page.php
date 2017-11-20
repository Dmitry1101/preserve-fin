<?php get_header(); ?>

    <div class="topp" style="<?php echo image_src(get_field('background_tb'), 'free', true, false); ?> background-repeat: no-repeat; background-position: center; background-size: cover;">

        <div class="cont2">

            <?php echo menuBox(); ?>

            <div class="topp__info">
                <div class="header__titl topp__info-titl sect-title">
                    <?php the_field('title_tb'); ?>
                </div>
                <div class="topp__info-descr">
                    <?php the_field('description_tb'); ?>
                </div>
            </div><!-- .topp__info -->

            <?php if ($persons_tb = get_field('persons_tb')) { 
                $kd_count = 1; ?>

                <div class="topp__list">
                    <?php foreach ($persons_tb as $per) { ?>
                        <div class="topp__list-it <?php echo( $kd_count % 4 == 0 ) ? 'akktiff' : '' ?>">
                            <div class="topp__list-person">
                                <img src="<?php echo $per['image']; ?>" alt="" class="topp__list-img">
                            </div>
                            <div class="topp__list-info">
                                <div class="topp__list-wrap">
                                    <div class="topp__list-blck1">
                                        <?php echo $per['top_text']; ?>
                                    </div>
                                    <div class="topp__list-blck2">
                                        <?php echo $per['bottom_text']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    
                    $kd_count++;

                    } ?>
                </div><!-- .topp__list -->
            <?php } ?>
        </div><!-- .cont2 -->
    </div><!-- .topp -->

    <div class="howw s">
        <div class="cont2">
            <div class="sect-title howw__title">
                <a href="<?php the_field('title_link_hiw'); ?>"><?php the_field('title_hiw'); ?></a>
            </div>
            <?php if ($how_it_works_hiw = get_field('how_it_works_hiw')) { ?>
                <div class="howw__group">
                    <?php foreach ($how_it_works_hiw as $how) { ?>
                        <div class="howw__it">
                            <div class="howw__img">
                                <a href="<?php echo $how['link']; ?>">
                                    <img src="<?php echo $how['image']; ?>" alt="">
                                </a>
                            </div>
                            <div class="howw__head">
                                <?php echo $how['title']; ?>
                            </div>
                            <div class="howw__txt">
                                <?php echo $how['text']; ?>
                            </div>
                            <a href="<?php echo $how['link']; ?>" class="read-mmore">Read More</a>
                        </div><!-- .howw__it -->
                    <?php } ?>
                </div><!-- .howw__group -->
            <?php } ?>
        </div><!-- .cont2 -->
    </div><!-- .howw -->

<?php 
    if ($stories = get_field('stories')) { 
      $cc = 1; ?>
    <div class="stories">
        <?php foreach ($stories as $st) { ?>
            <div class="storry s storry-1" style="background-color: <?php echo $st['background_color']; ?>">
                <div class="storry__wrapp flexx">
                    <div class="pos-rel for-desktop">
                        <img src="<?php echo $st['image']; ?>" class="storry__img" alt="">
                        <span class="over__blu2" <?php if ($st['color']) { ?>style="background: <?php echo $st['color']; ?>"<?php } ?>></span>
                    </div>

                    <div class="storry__blck content">
                        <div class="storry__head sect-title" <?php if ($st['color']) { ?>style="color: <?php echo $st['color']; ?>;"<?php } ?>>
                            <?php echo $st['title']; ?>
                        </div>
                         <div class="pos-rel for-mobile">
                            <img src="<?php echo $st['image']; ?>" class="storry__img" alt="">
                            <span class="over__blu2" <?php if ($st['color']) { ?>style="background: <?php echo $st['color']; ?>"<?php } ?>></span>
                        </div>
                        <div class="storry__txt">
                            <?php echo $st['text']; ?>
                            <a href="<?php echo $st['link']; ?>" class="read-mmore kd89-butt-<?php echo $cc; ?>" <?php if ($st['color']) { ?>style="background: <?php echo $st['color']; ?>"<?php } ?>>Read More</a>
                        </div>
                    </div>
                </div>
            </div><!-- .storry -->
        <?php 
        $cc++;
        } ?>
    </div>
<?php } ?>
 
    <div class="happyy s">
        <div class="cont2">
            <div class="sect-title happyy__title">
                <?php the_field('title_hp'); ?>
            </div>
            <?php if ($happy_stories = get_field('happy_stories')) { ?>
                <div class="happyy__list">
                    <?php foreach ($happy_stories as $hap) { ?>
                        <!-- <div class="happyy__it" ontouchstart="this.classList.toggle('hover');">
                          -->
                        <div class="happyy__it"> 

                            <div class="happyy__flip">
                                <div class="happyy__side1">
                                    <div class="happyy__img pos-rel">
                                        <img src="<?php echo $hap['image']; ?>" alt="">
                                        <span class="over__blu2" <?php $hap['gradient_from'] && $hap['gradient_to'] ?>style="background: linear-gradient(to right, <?php echo $hap['gradient_from']; ?> 0%, <?php echo $hap['gradient_to']; ?> 100%);"<?php ?>></span>
                                    </div>
                                    <div class="happyy__name">
                                        <?php echo $hap['name']; ?>
                                    </div>
                                </div>
                                <div class="happyy__side2">
                                    <div class="happyy__side2-txt">
                                        <div>
                                            <?php echo $hap['text']; ?>
                                        </div>
                                        <button class="to-mod read-mmore happyy__side2-more" data-to=".mod1">Read more</button>
                                    </div>
                                </div>
                            </div><!-- .happyy__flip -->
                        </div><!-- .happyy__it -->
                    <?php } ?>
                </div><!-- .happyy__list -->
            <?php } ?>
        </div><!-- .cont2 -->
    </div><!-- .happyy -->

    <div class="know-us s">
        <div class="cont2">
            <div class="sect-title know-us__title">
                <?php the_field('title_ku'); ?>
            </div>
            <div class="know-us__descr">
                <?php the_field('description_ku'); ?>
            </div>
            <?php if ($know_us_ku = get_field('know_us_ku')) { ?>
                <div class="know-us__list">
                    <?php foreach ($know_us_ku as $kn) { ?>
                        <div class="know-us__blck">
                            <div class="know-us__head w-line">
                                <a href="<?php echo $kn['link']; ?>"><?php echo $kn['title']; ?></a>
                            </div>
                            <div class="know-us__txt">
                                <?php echo $kn['text']; ?>
                            </div>
                            <a href="<?php echo $kn['link']; ?>" class="read-mmore">Read More</a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div><!-- .cont2 -->
    </div><!-- .know__us -->

    <div class="join" style="<?php echo image_src(get_field('background_ju'), 'free', true, false); ?>">
        <div class="cont2">
            <div class="join__wrap">
                <div class="join__blck1">
                    <?php the_field('left_tex_ju'); ?>
                </div>
                <div class="join__blck2">
                    <?php echo do_shortcode('[contact-form-7 id="97" title="Join Us"]'); ?>
                </div>
            </div>
        </div>
    </div><!-- .join -->

    <div class="addr s">
        <div class="cont1">
            <div class="addr__wrapp">
                <div class="addr__it item1">
                    <a href="#">
                        <img src="<?php echo theme(); ?>/img/logo.png" alt="">
                    </a>
                </div>
                <div class="addr__it item2">
                    <div class="tbl">
                        <div class="tbl-cell cell-1 mdl">
                            <span class="addr__ico addr__phone"></span>
                        </div>
                        <div class="tbl-cell cell-2 mdl">
                            <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="addr__it item3">
                    <div class="tbl">
                        <div class="tbl-cell cell-1 mdl">
                            <span class="addr__ico addr__mail"></span>
                        </div>
                        <div class="tbl-cell cell-2 mdl">
                            <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                        </div>
                    </div>
                </div><!-- .addr__it -->
                <div class="addr__it item4">
                    <div class="tbl">
                        <div class="tbl-cell cell-1 mdl">
                            <span class="addr__ico addr__street"></span>
                        </div>
                        <div class="tbl-cell cell-2 mdl">
							<a href="https://www.google.com/maps/dir/My+location/3216​ ​Fillmore​ ​St. San​ ​Francisco,​ ​CA​ ​94123" target="__blank">
								<?php the_field('adress', 'option'); ?>
							</a>
                        </div>
                    </div>
                </div><!-- .addr__it -->
                
            </div>
        </div>
    </div>

<?php get_footer(); ?>