<?php
/**
 * 作成者：神谷昌典
 */

$modorulink = get_post_type_archive_link("audition_artist");//オーディション通過者一覧ページへのリンク
$votes_num = get_post_meta($post->ID, "votes_num", true);//得票数
$date = date("Y-m-d");
$voted = false;//投票済みかどうか
if(isset($_COOKIE[$post->ID])){
	if($_COOKIE[$post->ID] == $date){
		//本日投票済み
		$voted = true;
	}
}

get_header(); ?>
<div class="container">
<?php
//--------------------------------------------
//投票機能用javascript
//--------------------------------------------
?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.4.js"></script>
<script type="text/javascript">
$(function(){
	$("#vote_button").click(function(){
		$.ajax({
			'type': 'POST',
			'url': "<?php echo get_stylesheet_directory_uri() ?>/votes.php",
			'data': {
				"post_id": <?php the_ID();?>
			},
			'success': success
		});
	});
});
function success(resp){
	if(resp === "double"){
		alert("このアーティストに本日投票済みです。");
		return;
	}else if(resp === "error"){
		return;
	}

	resp = jQuery.parseJSON(resp);
	$("#votes_num").html(resp.votes_num);
	$("#vote_button").val("本日投票済み").attr("disabled", "disabled");
}
</script>

	<?php
	if( have_posts() ) : the_post();
	?>
		<section class="page-section zigzag" >
			<div class="page-section-inner">

				<!-- posts list -->
				<div id="posts-list" class="clearfix">
					<h1><?php the_title(); ?></h1>

					<div class="flex-video widescreen">
						<iframe src="https://www.youtube.com/embed/9dLXMqhDcSY" frameborder="0" allowfullscreen=""></iframe>
					</div>
					<div>
						<p><?php the_content(); ?></p>
						<div>
							<?php
							//得票数：<span id="votes_num"> echo $votes_num; </span><br />
							?>
							<input type="button" id="vote_button" <?php
								if($voted){
									echo " value=\"本日投票済み\" disabled";
								}else{
									echo " value=\"投票する\" ";
								}
							?> />
							<a href="<?php echo $modorulink; ?>">戻る</a>
						</div>
					</div>
				</div>
				<!-- ENDS posts list -->

			</div>
			<!-- ENDS inner section -->
		</section>
		<article id="audition_artist">


		</article>
	<?php
	endif;
	?>
</div>
<?php get_footer();
