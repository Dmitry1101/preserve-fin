<?php get_header(); /* Template Name: 30min */ ?>

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
<?php if ($steps = get_field('steps')) { 
	$kd_counntt = 1; ?>
<div class="stories">
	<?php foreach ($steps as $st) { ?>
		<div class="storry s storry-1 time-fert__blck gyy">
			<div class="storry__wrapp flexx">

				<?php echo( is_page(229) && $kd_counntt == 2 ) ? '<div class="kd89-use-wrap pos-rel"><div class="kd89-use-head txt-cent for-desktop">Typical calendar using frozen eggs to become pregnant</div>' : "";?>
				
				<div class="for-desktop">
					<img src="<?php echo $st['image']; ?>" class="storry__img" alt="">                                  
					
						<?php 
						if(is_page(229) && $kd_counntt == 2) : ?>
							
							<div class="tbl pregn__tbl">
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-blue"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Preconception consultation
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-roz"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Embryo transfer
									</div>
								</div>  
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-gyy"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Pregnancy test!
									</div>
								</div>    
							</div>
						
						<?php
							endif;?>


				</div> 
			   

				

				<?php echo( is_page(229) && $kd_counntt == 2 ) ? '</div>' : "";?>



				<div class="storry__blck content <?php if( is_page(229) ) : ?> kd_class-<?php echo $kd_counntt; ?> <?php endif; ?>">
					
					<div class="storry__head sect-title w-lab <?php echo ($st['letter']) ? 'kd89-w-lett' : ''; ?>">
						<?php if ($st['letter']) { ?><span><?php echo $st['letter']; ?></span><?php } ?>
						<?php echo $st['title']; ?>
					</div>


					<div class="for-mobile">
												
						<?php echo( is_page(229) && $kd_counntt == 2 ) ? '<div class="kd89-use-wrap"><div class="kd89-use-head txt-cent for-mobile">Typical calendar using frozen eggs to become pregnant</div></div>' : "";?>
	

						<img src="<?php echo $st['image']; ?>" class="storry__img" alt=""> 
						
							
							<?php 
						if(is_page(229) && $kd_counntt == 2) : ?>
							
							<div class="tbl pregn__tbl">
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-blue"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Preconception consultation
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-roz"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Embryo transfer
									</div>
								</div>  
								<div class="tbl-row">
									<div class="tbl-cell cell-1 mdl">
									   <i class="ico ico-gyy"></i> 
									</div>
									<div class="tbl-cell cell-2 mdl">
										Pregnancy test!
									</div>
								</div>    
							</div>
						
						<?php
							endif;?>
	


					</div>
					<div class="storry__txt">
						<?php echo $st['text']; ?>
					</div>
				</div>
			</div>
		</div><!-- .storry -->
	<?php 
		$kd_counntt++;
	} ?>
</div>
<?php } ?>

<?php get_template_part( 'constructor' ); ?>

<?php get_footer(); ?>

