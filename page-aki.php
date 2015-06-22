<?php
/*
Template Name: あきいちこ
*/
?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/history/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/music_script.js"></script>
<div id="aki">
  <div id="music" class="clearfix">
      <h2>夢飛行機とは</h2>
      <p>
        中部国際空港セントレアの開港10周年を記念して2014年1月31日、2月1日の二日間に渡って開かれた『空港音楽祭2015・麗春』で、HAL名古屋の学生が  制作したテーマソング『夢飛行機』が発表されました。
        その音楽祭のテーマソング、『夢飛行機』は、HAL名古屋 ミュージック学科の学生たちと、名古屋を中心に活躍するシンガー･ソングライター あきいちこさんとの共 同作品。学生たちが「翼」「大空」など空港を連想する言葉を並べ、あきいちこさんがまとめあげた歌詞に、学生たちがメロディをつけてひとつの曲として完成されま した。学校内のレコーディングスタジオでの打合せや音あわせを重ねてつくられ、アレンジやレコーディングまで学生が担当。制作に半年間をかけたこの楽曲は、『空 港音楽祭2015・麗春』会場であきいちこさんが歌い上げ、多くの方々に届けられました。
      </p>
  </div>

  <div id="download">
    夢飛行機ダウンロード<br />
    <a href="<?php bloginfo('template_directory'); ?>/download.php"><img src="<?php bloginfo('template_directory'); ?>/images/downBtn.png" alt="ダウンロード"/></a><br />
    <input type="button" id="btn" value="▼歌詞表示">
  </div>

  <div id="lyrics" oncontextmenu="return false;" onselectstart="return false;">
    <h2>夢飛行機</h2><br />
    <p>
      いま私の願いごとが<br />
      かなうならば翼がほしい<br />
      この背中に鳥のように<br />
      白い翼つけてください<br />
      この大空に翼をひろげ<br />
      飛んで行きたいよ<br />
      悲しみのない自由な空へ<br />
      翼はためかせ<br />
      行きたい<br /><br />

      いま富とか名誉ならば<br />
      いらないけど翼がほしい<br />
      子どものとき夢みたこと<br />
      今も同じ夢に見ている<br />
      この大空に翼をひろげ<br />
      飛んで行きたいよ<br />
      悲しみのない自由な空へ<br />
      翼はためかせ<br /><br />

      この大空に翼をひろげ<br />
      飛んで行きたいよ<br />
      悲しみのない自由な空へ<br />
      翼はためかせ<br />
      行きたい<br /><br />
    </p>
  </div>

  <div id="artist" class="clearfix">
    <div id="artist_photo">
      <img src="<?php bloginfo('template_directory'); ?>/images/akiichiko.jpg" alt="あきいちこ"/>
    </div>
    <div id="artist_details">
      <h3>あきいちこ</h3>
      <p>
        6月9日生まれ　<br />AB型　ふたご座<br />
        名古屋を中心に活動するシンガーソングライター。<br />ストリートからカフェ、ライブハウスと様々な場所での
        精力的なライブ活動を行いながら、数々のコンテストで受賞。<br />
        オリジナル曲「あお」「Beautiful Days」「Step Step」は
        テレビ番組で起用され、2014年1月にはラジオパーソナリティを務めるなど、
        在名メディアでも活躍している。<br />
        2015年1月には空港 音楽祭のテーマソング「夢飛行機」を専門学校ＨＡＬ名古屋の学生とともに制作・発表。<br />
        その他、高校や中学校でライブを行うなど、
        学校教育の場にも活躍の場を拡げている
      </p>
    </div>
  </div>


  <div id="page-top">
    <p><a id="move-page-top">▲</a></p>
  </div>
</div>
<?php get_footer(); ?>