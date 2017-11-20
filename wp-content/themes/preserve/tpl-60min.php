<?php get_header(); /* Template Name: 60min */ ?>

<div class="topp" style="<?php echo image_src(get_field('background_tb'), 'free', true, false); ?> background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="cont2">
        <?php echo menuBox(); ?>
        <div class="topp__jumbo">
            <div class="topp__jumbo-head">
                <?php the_field('title_tb'); ?>
            </div>
            <div class="topp__jumbo-descr">
                <?php the_field('text_tb'); ?>
            </div>
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


<?php 
if ($eggs = get_field('eggs')) : 
    
    $c = 1; 
    $eggs_count = count( $eggs );  ?>

    <?php 
    foreach ($eggs as $egg) : ?>
        

       

        <div class="eggs s">
            <div class="eggs__it <?php echo( $c % 2 == 0 ) ? 'even' : 'odd' ?>">
                
                <?php 
                if( $c % 2 == 0 ) : ?>
                    
                    <div class="eggs__blck blck-2">
                        <div class="eggs__wrap">
                            <div class="eggs__head sect-title">
                                <span><?php echo $egg['day']; ?></span>
                                <?php echo $egg['title']; ?>
                            </div>
                            <div class="for-mobile">
                                <img class="eggs__img" src="<?php echo $egg['image']; ?>" alt="">
                            </div>
                            <div class="eggs__txt">
                               <?php echo $egg['text']; ?>
                            </div>
                        </div>  
                    </div>

                    <div class="eggs__blck blck-1 for-desktop">
                        <img class="eggs__img" src="<?php echo $egg['image']; ?>" alt="">
                    </div>

                <?php 
                else: ?>
                   
                   <div class="eggs__blck blck-1 for-desktop">
                        <img class="eggs__img" src="<?php echo $egg['image']; ?>" alt="">
                    </div>
                    
                    <div class="eggs__blck blck-2">
                        <div class="eggs__wrap">
                            <div class="eggs__head sect-title">
                                <span><?php echo $egg['day']; ?></span>
                                <?php echo $egg['title']; ?>
                            </div>
                            <div class="for-mobile">
                                <img class="eggs__img" src="<?php echo $egg['image']; ?>" alt="">
                            </div>
                            <div class="eggs__txt">
                               <?php echo $egg['text']; ?>
                            </div>
                        </div>  
                    </div>

                <?php 
                endif; ?>

                

            </div>
        </div><!-- .eggs -->

        <div class="eggs__arr <?php echo( $c >= $eggs_count ) ? 'latesst' : '' ?>">
            <div class="cont2">
                <div class="eggs__arr-fw">
                    <img src="<?php echo theme(); ?>/img/how_it_works/<?php echo( $c % 2 == 0 ) ? 'arr-back.png' : 'arr-forward.png' ?>" alt="">
                </div>
            </div>
        </div>






        

    <?php 
        $c++;
    endforeach; 

endif; ?>




<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

