<?php if($flexible = get_field('constructor_fields')): ?>
    <?php foreach($flexible as $key=>$item): ?>
        <?php $layout = $item['acf_fc_layout']; ?>
        <?php if($layout == 'navigation_constructor') { ?>

            <div class="overview s time-fert__blck <?php if ($item['color_scheme'] == 'red') {echo 'roz';} ?>">
                <div class="cont2">
                    <div class="overview__inn content">
                        <div class="overview__txt content">
                            <p><?php echo $item['top_text']; ?></p>
                            <?php if ($item['prev_button_link'] || $item['next_button_link']) { ?>
                                <p>
                                    <?php if ($item['prev_button_link']) { ?>
                                        <a href="<?php echo $item['prev_button_link']; ?>" class="round-butt butt <?php if ($item['color_scheme'] == 'blue') {echo 'blu';} elseif ($item['color_scheme'] == 'grey') {echo 'gyy';} ?> prev"><?php echo $item['prev_button_text']; ?></a>
                                    <?php } ?>
                                    <?php if ($item['next_button_link']) { ?>
                                        <a href="<?php echo $item['next_button_link']; ?>" class="round-butt butt <?php if ($item['color_scheme'] == 'blue') {echo 'blu';} elseif ($item['color_scheme'] == 'grey') {echo 'gyy';} ?> next"><?php echo $item['next_button_text']; ?></a>
                                    <?php } ?>
                                </p>
                            <?php } ?>
                            <p>
                                <a href="<?php echo $item['bottom_link']; ?>"><?php echo $item['bottom_text']; ?></a>
                            </p>
                        </div>
                    </div>	<!-- .overview__inn -->
                </div><!-- .cont2 -->
            </div><!-- .overview -->

        <?php } elseif ($layout == 'videos_constructor') { ?>
            <?php if ($vids = $item['items']) { ?>
                <div class="vidd <?php if ($item['color_scheme'] == 'red') { ?>rozz<?php } ?> vidd-sm-thumb">
                    <div class="cont2">
                        <div class="vidd__list">
                            <?php foreach ($vids as $vi) { ?>
                                <div class="vidd__list-it">
                                    <div class="vidd__list-blck blck-1">
                                        <div class="vidd__img-wrap">
                                            <a href="<?php echo $vi['video_link']; ?>" class="faqs__link vidd-sm-link">
                                                <img src="<?php echo image_src($vi['thumbnail'], '337x228', false, false); ?>" alt="" class="faqs__thumb">
                                                <?php if ($item['color_scheme'] == 'red') { ?>
                                                    <span class="over__red"></span>
                                                    <span class="faqs__play faqs__play-red"></span>
                                                <?php } elseif ($item['color_scheme'] == 'blue') { ?>
                                                    <span class="over__blu2"></span>
                                                    <span class="faqs__play faqs__play-blu2"></span>
                                                <?php } ?>
                                            </a>
                                            <span class="vidd__quality"></span>
                                        </div>
                                    </div>
                                    <div class="vidd__list-blck blck-2">
                                        <div class="vidd__list-head">
                                            <?php echo $vi['title']; ?>
                                        </div>
                                        <div class="vidd__list-txt">
                                            <?php echo $vi['text']; ?>
                                        </div>
                                        <div class="vidd__list-tbl tbl">
                                            <div class="tbl-cell cell-1 mdl">
                                                <img src="<?php echo image_src($vi['photo'], '54x54', false, false); ?>" alt="">
                                            </div>
                                            <div class="tbl-cell cell-2 mdl">
                                                <p><b><?php echo $vi['name']; ?></b></p>
                                                <p><em><?php echo $vi['position']; ?></em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div><!-- .vidd -->
                    </div>
                </div>
            <?php } ?>
        <?php } elseif ($layout == 'know_us_constructor') { ?>
            <div class="know-us s secc">
                <div class="cont2">
                    <div class="sect-title know-us__title">
                        <?php echo $item['title']; ?>
                    </div>
                    <div class="know-us__descr">
                        <?php echo $item['text']; ?>
                    </div>
                    <?php if ($links = $item['links']) {

                        $itCount = 0;
                        foreach ($links as $linkCount) {$itCount++;}

                        ?>
                        
                        
                        <?php 
                        if ($itCount == 2) : ?>
                           <div class="kd-row maw-800 ">  
                        <?php
                        else: ?>
                          <div class="know-us__list">
                        <?php
                        endif; ?>                
                        
                        
                            <?php foreach ($links as $link) { ?>
                                <div class="know-us__blck <?php if ($itCount == 2) {echo 'kd-col-6';} ?>">
                                    <div class="know-us__head w-line">
                                        <a href="<?php echo $link['link']; ?>"><?php echo $link['top_text']; ?></a>
                                    </div>
                                    <a href="<?php echo $link['link']; ?>" class="read-mmore">Read More</a>
                                </div>
                            <?php } ?>
                        
                        </div>
                    
                    <?php } ?>
                </div><!-- .cont2 -->
            </div><!-- .know__us -->
        <?php } elseif ($layout == 'join_us_constructor') { ?>
            <div class="join secc" <?php if ($item['background']) { ?>style="<?php echo image_src($item['background'], 'free', true ,false); ?>;"<?php } ?>>
                <div class="cont2">
                    <div class="join__wrap">
                        <div class="join__blck1" style="color: <?php echo $item['text_color']; ?>;">
                            <?php echo $item['left_text']; ?>
                        </div>
                        <div class="join__blck2">
                            <?php echo do_shortcode('[contact-form-7 id="97" title="Join Us"]'); ?>
                        </div>
                    </div>
                </div>
            </div><!-- .join -->
        <?php } elseif ($layout == 'contacts_constructor') { ?>
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
        <?php } ?>

    <?php endforeach; ?>
<?php endif; ?>
