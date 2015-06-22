<?php
/*
Template Name: history page
*/
?>
 <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/history/demo.css" /> -->
		<!-- Style of the component -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/history/style.css" /> -->
<!-- 		<noscript>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/history/styleNoJS.css" />
		</noscript> -->
<?php get_header() ?>
<div class="container">
	<div id="history">
		<?php the_post() ?>
		<!-- page-content -->
		<section class="page-section zigzag" >
			<div class="page-section-inner entry-content">
				<!-- Style for the demo page -->
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/history/jquery-2.1.4.js"></script>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/history/jquery.easing.1.3.js"></script>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/history/jquery.mousewheel.js"></script>
				<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/history/jquery.vaccordion.js"></script>
				<script type="text/javascript">
				$(function() {
				$('#va-accordion').vaccordion({
				visibleSlices	: 5,	//最初から表示されてる数をここで指定するッス
				expandedHeight	: 500,	//アコーディオンを広げた際の大きさッス
				animOpacity		: 0.1,
				contentAnimSpeed: 100
				});
				});
				</script>
			</div>
		</section><!-- /.page-section -->
		<!--		全体の高さを決めるときはjquery.vaccordion,jsのaccordionHを編集しましょう-->

		<div class="container">
			<h2 class="heading"><?php the_title() ?></h2>



			<div id="va-accordion" class="va-container">
				<div class="va-wrapper">


					<div class="va-slice va-slice-1">
						<h3 class="va-title">サンプル01<br>
							<span id="test">こんにちわ世界</span>
						</h3>
						<div class="va-content">
							<p>Henry Watson</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
							<img src="<?php bloginfo('template_directory'); ?>/images/history/s_1.png" width="200" >
						</div><!-- /.va-content -->
					</div><!-- /.va-slice -->

					<div class="va-slice va-slice-2">
						<h3 class="va-title">サンプル02</h3>
						<div class="va-content">
							<p>Keith Johnson</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="va-slice va-slice-3">
						<h3 class="va-title">サンプル03</h3>
						<div class="va-content">
							<p>Andrew Alaniz</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="va-slice va-slice-4">
						<h3 class="va-title">サンプル04</h3>
						<div class="va-content">
							<p>Ben Freeman</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="va-slice va-slice-5">
						<h3 class="va-title">サンプル05</h3>
						<div class="va-content">
							<p>Alex Schuman</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="va-slice va-slice-6">
						<h3 class="va-title"></h3>
						<div class="va-content">
							<p>Maria Wales</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="va-slice va-slice-7">
						<h3 class="va-title">サンプル07</h3>
						<div class="va-content">
							<p>Paul White</p>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

				</div><!-- /.va-wraper -->
				<?php get_template_part('includes/wp-link-pages') ?>
			</div><!-- /.va-accordion -->


		</div><!-- /.container(history内) -->
		<!-- ENDS page-content -->
	</div><!-- /#history -->
</div><!-- /.container -->
<?php get_footer() ?>