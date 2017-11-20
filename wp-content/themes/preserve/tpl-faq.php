<?php get_header(); /* Template Name: FAQs */ ?>

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

<div class="ss txt-cent">
    <div class="cont2">
        <div class="sect-title">
            <?php the_field('title_kn'); ?> 
        </div>
        <?php if ($knowledge = get_field('knowledge')) { 
                $kd_countt = 1; ?>
            <div class="vars__list">
                <?php foreach ($knowledge as $kn) { ?>
                    <div ontouchstart="this.classList.toggle('hover');" data-scrollto="#scrl_blck_<?php echo $kd_countt; ?>" class="vars__blck kd_vars__blck blck-<?php echo $kd_countt; ?>">
                        <div class="vars__line"></div>
                        <div class="vars__bg active"><?php echo $kn['title']; ?></div>
                        <div class="vars__bg vars__bg-h"><?php echo $kn['title']; ?></div>    

                        <div class="vars__name"><?php echo $kn['text']; ?></div>
                                            
                    </div>
                <?php 
                  $kd_countt++;  
                } ?>
            </div><!-- .vars__list -->
        <?php } ?>
    </div>`<!-- .cont2 -->
</div><!-- .ss -->

<div class="faqs txt-cent ss vidd-sm-thumb" id="scrl_blck_1">
    <div class="cont2">
        <div class="sect-title">
            <?php the_field('title_wf'); ?>
        </div>
        <?php if ($why_freeze = get_field('why_freeze')) {
            $frShow = 3;
            $frCount = 0;
            $kd_count = 0;
        ?>
            <div class="kd-row">
                <?php foreach ($why_freeze as $wh) { $frCount++; ?>
                    <div class="kd-col-4 <?php if ($frCount > $frShow) {echo 'p-hide';} ?>">
                        <div class="faqs__it">
                            <div class="faqs__vidd">
                                <a href="<?php echo $wh['video']; ?>" class="faqs__link vidd-sm-link">
                                    <img src="<?php echo image_src($wh['image'], '400x270', false, false); ?>" alt="" class="faqs__thumb">
                                    <span class="over__blu2"></span>
                                    <span class="faqs__play faqs__play-blu2"></span>
                                </a>
                                <div class="faqs__bg faqs__bg-blu2"><?php echo $wh['question']; ?></div>
                            </div>
                            <div class="faqs__head"><?php echo $wh['title']; ?></div>
                            <div class="faqs__descr">
                                <?php echo $wh['text']; ?>
                            </div>
                            <div class="faqs__tbl tbl">
                                <div class="tbl-cell cell-1 mdl">
                                    <img src="<?php echo image_src($wh['photo'], '54x54', false, false); ?>" alt="">
                                </div>
                                <div class="tbl-cell cell-2 mdl">
                                    <p>
                                        <b>
                                            <?php echo $wh['name']; ?>
                                        </b>
                                        <em>
                                            <?php echo $wh['position']; ?>
                                        </em>
                                    </p>
                                </div>
                            </div><!-- .faqs__tbl -->
                        </div><!-- .faqs__it -->
                    </div>
                    
                <?php 
                    $kd_count++;
                    echo ( $kd_count % 3 == 0 ) ? '</div><div class="kd-row">' : '';
                } //endforeach?>
            
            </div><!-- .kd-row -->
        <?php } ?>
        <?php if ($frCount > $frShow) { ?>
            <button class="load-more happyy__load-more ">
                <i></i>
                LOAD MORE
            </button>
        <?php } ?>
    </div>
</div><!-- .faqs -->

<div class="faqs txt-cent ss vidd-sm-thumb" id="scrl_blck_2">
    <div class="cont2">
        <div class="sect-title">
            <?php the_field('title_hf'); ?>
        </div>
        <?php if ($how_freeze = get_field('how_freeze')) {
            $howShow = 3;
            $howCount = 0;
            $kd_count = 0;
        ?>
            <div class="kd-row">
                <?php foreach ($how_freeze as $fr) { $howCount++; ?>
                    <div class="kd-col-4 <?php if ($howCount > $howShow) {echo 'p-hide';} ?>">
                        <div class="faqs__it">
                            <div class="faqs__vidd">
                                <a href="<?php echo $fr['video']; ?>" class="faqs__link vidd-sm-link">
                                    <img src="<?php echo image_src($fr['image'], '400x270', false, false); ?>" alt="" class="faqs__thumb">
                                    <span class="over__red"></span>
                                    <span class="faqs__play faqs__play-red"></span>
                                </a>
                                <div class="faqs__bg faqs__bg-red"><?php echo $fr['question']; ?></div>
                            </div>
                            <div class="faqs__head"><?php echo $fr['title']; ?></div>
                            <div class="faqs__descr">
                                <?php echo $fr['text']; ?>
                            </div>
                            <div class="faqs__tbl tbl">
                                <div class="tbl-cell cell-1 mdl">
                                    <img src="<?php echo image_src($fr['photo'], '54x54', false, false); ?>" alt="">
                                </div>
                                <div class="tbl-cell cell-2 mdl">
                                    <p>
                                        <b>
                                            <?php echo $fr['name']; ?>
                                        </b>
                                        <em>
                                            <?php echo $fr['position']; ?>
                                        </em>
                                    </p>
                                </div>
                            </div><!-- .faqs__tbl -->
                        </div><!-- .faqs__it -->
                    </div>
                <?php 
                $kd_count++;
                 echo ( $kd_count % 3 == 0 ) ? '</div><div class="kd-row">' : '';
            } ?>
            </div><!-- .kd-row -->
        <?php } ?>
        <?php if ($howCount > $howShow) { ?>
            <button class="load-more happyy__load-more ">
                <i></i>
                LOAD MORE
            </button>
        <?php } ?>

    </div>
</div><!-- .faqs -->

<div class="faqs txt-cent ss vidd-sm-thumb" id="scrl_blck_3">
    <div class="cont2">
        <div class="sect-title">
            <?php the_field('title_gtn'); ?>
        </div>
        <?php if ($get_to_know = get_field('get_to_know')) {
            $gtShow = 3;
            $gtCount = 0;
            $kd_count = 0;
            ?>
            <div class="kd-row">
                <?php foreach ($get_to_know as $gtnu) { $gtCount++; ?>
                    <div class="kd-col-4 <?php if ($gtCount > $gtShow) {echo 'p-hide';} ?>">
                        <div class="faqs__it">
                            <div class="faqs__vidd">
                                <a href="<?php echo $gtnu['video']; ?>" class="faqs__link vidd-sm-link">
                                    <img src="<?php echo image_src($gtnu['image'], '400x270', false, false); ?>" alt="" class="faqs__thumb">
                                    <span class="over__blu"></span>
                                    <span class="faqs__play faqs__play-blu"></span>
                                </a>
                                <div class="faqs__bg faqs__bg-blu"><?php echo $gtnu['question']; ?></div>
                            </div>
                            <div class="faqs__head"><?php echo $gtnu['title']; ?></div>
                            <div class="faqs__descr">
                                <?php echo $gtnu['text']; ?>
                            </div>
                            <div class="faqs__tbl tbl">
                                <div class="tbl-cell cell-1 mdl">
                                    <img src="<?php echo image_src($gtnu['photo'], '54x54', false, false); ?>" alt="">
                                </div>
                                <div class="tbl-cell cell-2 mdl">
                                    <p>
                                        <b>
                                            <?php echo $gtnu['name']; ?>
                                        </b>
                                        <em>
                                            <?php echo $gtnu['position']; ?>
                                        </em>
                                    </p>
                                </div>
                            </div><!-- .faqs__tbl -->
                        </div><!-- .faqs__it -->
                    </div>
                <?php 
                $kd_count++;
                 echo ( $kd_count % 3 == 0 ) ? '</div><div class="kd-row">' : '';
            } ?>
            </div><!-- .kd-row -->
        <?php } ?>
        <?php if ($gtCount > $gtShow) { ?>
            <button class="load-more happyy__load-more ">
                <i></i>
                LOAD MORE
            </button>
        <?php } ?>

    </div>
</div><!-- .faqs -->

<div class="faqs txt-cent ss lasst vidd-sm-thumb" id="scrl_blck_4">
    <div class="cont2">
        <div class="sect-title">
            <?php the_field('title_cost'); ?>
        </div>
        <?php if ($cost = get_field('cost')) {
            $coShow = 3;
            $coCount = 0;
            $kd_count = 0;
            ?>
            <div class="kd-row">
                <?php foreach ($cost as $co) { $coCount++; ?>
                    <div class="kd-col-4 <?php if ($coCount > $coShow) {echo 'p-hide';} ?>">
                        <div class="faqs__it">
                            <div class="faqs__vidd">
                                <a href="<?php echo $co['video']; ?>" class="faqs__link vidd-sm-link">
                                    <img src="<?php echo image_src($co['image'], '400x270', false, false); ?>" alt="" class="faqs__thumb">
                                    <span class="over__grn"></span>
                                    <span class="faqs__play faqs__play-grn"></span>
                                </a>
                                <div class="faqs__bg faqs__bg-grn"><?php echo $co['question']; ?></div>
                            </div>
                            <div class="faqs__head"><?php echo $co['title']; ?></div>
                            <div class="faqs__descr">
                                <?php echo $co['text']; ?>
                            </div>
                            <div class="faqs__tbl tbl">
                                <div class="tbl-cell cell-1 mdl">
                                    <img src="<?php echo image_src($co['photo'], '54x54', false, false); ?>" alt="">
                                </div>
                                <div class="tbl-cell cell-2 mdl">
                                    <p>
                                        <b>
                                            <?php echo $co['name']; ?>
                                        </b>
                                        <em>
                                            <?php echo $co['position']; ?>
                                        </em>
                                    </p>
                                </div>
                            </div><!-- .faqs__tbl -->
                        </div><!-- .faqs__it -->
                    </div>
                <?php 
                 $kd_count++;
                 echo ( $kd_count % 3 == 0 ) ? '</div><div class="kd-row">' : '';
            } ?>

            </div><!-- .kd-row -->
        <?php } ?>
        <?php if ($coCount > $coShow) { ?>
            <button class="load-more happyy__load-more ">
                <i></i>
                LOAD MORE
            </button>
        <?php } ?>
    </div>
</div><!-- .faqs -->

<?php get_template_part( 'constructor' ); ?>


<?php get_footer(); ?>

