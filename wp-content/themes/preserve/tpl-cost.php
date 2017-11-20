<?php get_header(); /* Template Name: Cost */ ?>

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
            <?php the_field('title_path'); ?>
        </div>
        <?php if ($pathway = get_field('pathway')) { 
            $countt = 1; ?>
            <div class="vars__list">
                <?php 
                foreach ($pathway as $path) { ?>
                    <div data-scrollto="#scrl_blck_<?php echo $countt; ?>" class="vars__blck blck-4 kd_vars__blck kd_vars__blck2">
                        <div class="vars__line"></div>
                        <div class="vars__ico">
                            <img src="<?php echo $path['image']; ?>">
                        </div>
                        <div class="vars__name"><?php echo $path['text']; ?></div>
                    </div>
                <?php 
                   $countt++;    
                } ?>
            </div><!-- .vars__list -->
        <?php } ?>
    </div>`<!-- .cont2 -->
</div><!-- .ss -->

<?php if ($items_hu = get_field('items_hu')) { 
    $counttt = 1; ?>
    <?php foreach ($items_hu as $ithu) { ?>
        <div id="scrl_blck_<?php echo $counttt; ?>" class="faqs txt-cent ss">
            <div class="cont2">
                <div class="sect-title">
                    <?php echo $ithu['title_hu']; ?>
                </div>
                <div class="faqs-descr content">
                    <?php echo $ithu['top_text_hu']; ?>
                </div>


                <div class="kd-row">
                    <div class="kd-col-6">
                        <div class="faqs-inn content">
                            <?php echo $ithu['left_text_hu']; ?>
                        </div>
                    </div>
                    <div class="kd-col-6">
                        <div class="faqs-inn content">
                            <?php echo $ithu['right_text_hu']; ?>
                        </div>
                    </div>
                </div>

                <div class="faqs-cost">
                    <div class="faqs-cost__blck tbl">
                        <div class="sect1 tbl-cell">
                            Cost
                        </div>
                        <div class="sect2 tbl-cell">
                            <?php echo $ithu['bottom_text_hu']; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .faqs -->
    <?php 
        $counttt++; 
        } ?>

<?php } ?>

<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

