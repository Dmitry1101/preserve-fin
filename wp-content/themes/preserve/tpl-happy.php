<?php get_header(); /* Template Name: Happy Stories */ ?>

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
<?php if ($stories_stories = get_field('stories_stories')) {
    $picToShow = 6;
    $picCount = 0;
?>
<div class="happy">
    <div class="cont2">
        <div class="happyy__list">
            <?php foreach ($stories_stories as $stor) {  $picCount++; ?>
                <!-- <div class="happyy__it <?php if ($picCount > $picToShow) {echo 'p-hide';} ?>" ontouchstart="this.classList.toggle('hover');"> -->
                <div class="happyy__it <?php if ($picCount > $picToShow) {echo 'p-hide';} ?>">
                    <div class="happyy__flip">
                        <div class="happyy__side1">
                            <div class="happyy__img pos-rel">
                                <img src="<?php echo image_src($stor['image'], '370x323', false, false); ?>" alt="">
                                <span class="over__blu2" <?php if ($stor['gradient_from'] || $stor['gradient_to']) { ?>style="background: linear-gradient(to right, <?php echo $stor['gradient_from']; ?> 0%, <?php echo $stor['gradient_to']; ?> 100%);"<?php } ?>></span>
                            </div>
                            <div class="happyy__name">
                                <?php echo $stor['name']; ?>
                            </div>
                        </div>
                        <div class="happyy__side2">
                            <div class="happyy__side2-txt">
                                <p><b><?php echo $stor['name']; ?></b></p>
                                <?php echo $stor['text']; ?>
                                <button class="to-mod read-mmore happyy__side2-more" data-to=".mod1">Read more</button>
                            </div>
                        </div>
                    </div><!-- .happyy__flip -->
                </div><!-- .happyy__it -->
            <?php } ?>
        </div><!-- .happyy__list -->


        <button class="load-more happyy__load-more ">
            <i></i>
            LOAD MORE
        </button>
        
        <!-- <br> -->
        <div class="txt-cent">
            <a class="happyy__submit-story" target="__blank" href="https://secureform.luxsci.com/forms/14535/9563/otdR/form.html">Submit Your Happy Story</a>                    
        </div>

        <!-- <br> -->


    </div><!-- .cont2 -->
</div><!-- .happyy -->
<?php } ?>


<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

