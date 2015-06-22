<?php
header('Content-Type: text/javascript; charset=UTF-8');
$(function(){

  var click_flg = true;
  $("#btn").click(function(){
    if(click_flg) {
      click_flg = false;
      $("#lyrics").slideToggle("slow");
      var value = $("#btn").val();
      if(value=="▼歌詞表示"){
        $("#btn").attr("value","▲歌詞非表示");
        $("#btn").css("letter-spacing","8px");
      }else{
        $("#btn").attr("value","▼歌詞表示");
        $("#btn").css("letter-spacing","12px");
      }
      setTimeout(function(){
            click_flg = true;
        },800);
    }else{
      return false;
    }
  });

  $(window).scroll(function(){
    //最上部から現在位置までの距離を取得して、変数[now]に格納
    var now = $(window).scrollTop();
    //最上部から現在位置までの距離(now)が1000以上
    if(now > 1000){
      $('#page-top').fadeIn('slow');
    }else{
      $('#page-top').fadeOut('slow');
    }
  });

  $('#move-page-top').click(function(){
    $('html,body').animate({scrollTop:0},'slow');
  });
});
?>
