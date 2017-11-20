<?php if (!is_page(6)) { ?>
<div class="footter">
	<div class="cont2">
		<div class="footter__wrapp ">
			<div class="footter__blck blck1">
				All Rights Reseved - Preserve fertility - 2017
			</div>
			<div class="footter__blck blck2">
				<div class="footter__menu">
					<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'foot_menu')); ?>
				</div>
			</div>
		</div>
	</div><!-- .cont2 -->
</div><!-- .footter -->

<div class="side-menu">
	<div class="side-menu__close"></div>
	<div class="side-menu__wrapp">
		<div class="side-menu__top">
			<div class="side-menu__nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'main_menu')); ?>
			</div>

		</div>
	</div>
	<div class="side-menu__footer">
		<div class="side-menu__blck blck-1">
			All Rights Reserved - 2017
		</div>
		<div class="side-menu__blck blck-2">
			<img src="<?php bloginfo('template_directory');?>/img/landing/menu-logo.png" alt="">
		</div>
	</div>
</div>


</div><!-- .whole -->
<?php } ?>

<div id="myModal" class="modal mod1">

	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header clearfix">
			<span class="close">&times;</span>
		</div>
		<div class="modal-body">
			<div>Itaque nostrum, quis eligendi ea quod tenetur mollitia magnam ut! Nihil magni, repudiandae impedit! Minima sint aperiam impedit quisquam earum amet quia, voluptates autem esse! Sapiente aspernatur pariatur tempora necessitatibus.</div>
			<div>Tenetur, odit ut omnis consectetur adipisci iusto molestias consequatur harum quaerat beatae voluptatem magnam neque dolorum doloremque facere. Fugiat cupiditate eaque a magni nesciunt, iste laudantium sint eum doloribus expedita.</div>
			<div>Neque quis est reprehenderit, id iste explicabo perferendis ipsam iusto numquam consequatur distinctio veritatis, culpa in quas et quasi! Consectetur doloremque illo dolores labore, a, blanditiis vero corporis similique minus.</div>
			<div>Iure facilis iusto, distinctio debitis dignissimos neque voluptatum praesentium repellendus qui similique, id, aliquam natus maiores error nostrum, quaerat reprehenderit perferendis sequi. Iste repellendus, qui provident. Vitae, veritatis soluta obcaecati.</div>
		</div>

	</div>

</div>

<div class="kd-totop"></div>

<?php wp_footer(); ?>
</body>
</html>
