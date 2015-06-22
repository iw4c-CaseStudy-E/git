<?php get_header(); ?>

<div id="aud" class="container clearfix">
  <h1>一次審査通過者一覧</h1>
  <p>
    2015年7月４日、５日に開催される空港音楽祭の一次オーディション通過者です。<br>
    次に行われる二次オーディションでは一般投票も加味されます。<br>
    アーティスト詳細ページもあるので、そちらで投票お願いします。
  </p>
  <?php while ( have_posts() ) : the_post(); $num = get_post_meta(get_the_ID(),"votes_num",true);
  $img = get_field('artist_img'); ?>

    <div class="aud_box">
      <div class="aud_in"><a href="<?php esc_url(the_permalink());?>">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" /><br>
        <p>
          <?php the_title(); ?><br>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aicon.png" class="ico" /><?php echo $num; ?>
        </p>
      </a></div><!-- .aud_in -->
    </div><!-- .aud_box -->

  <?php endwhile; ?>
</div><!-- #aud -->
<?php get_footer(); ?>