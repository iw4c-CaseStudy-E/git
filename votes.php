<?php
/**
 * 作成者：神谷昌典
 * javascriptに値を返します（Ajax）
 * ワードプレスが自動で作成したテーブルを直接操作します。
 * ワードプレスでカスタム投稿「audition_artist」を作り、カスタムフィールド「votes_num」が無いと動きません
 */
//jQueryによるajaxかどうかの判定
function is_ajax(){
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		return true;
	}else{
		return false;
	}
}

if(!is_ajax()){
	return;//ajaxによる通信じゃなかったらプログラムを終了します。
}

//-----------------------------------------------------------------------
//一日に何回も投票されてはいけないのでチェックします（cookieで）
//-----------------------------------------------------------------------
$post_id = $_POST["post_id"];//アーティストの投稿ID
$date = date("Y-m-d");
if(isset($_COOKIE[$post_id])){
	if($_COOKIE[$post_id] == $date){
		echo "double";//本日投票済み
		return;
	}
}
setcookie($post_id, $date , time() + 60 * 60 * 24 * 7, "/");//一日に一度しか投票できないようにするためのcookie

//-----------------------------------------------------------------------
//データベースと接続して投票します
//-----------------------------------------------------------------------
require('../../../wp-load.php');
//もしくは require($_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-load.php');
global $wpdb;

$meta_key = "votes_num";
$votes_num = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM $wpdb->postmeta WHERE meta_key = %s AND post_id = %s", $meta_key, $post_id));
if(isset($votes_num)){
	$votes_num++;
}else{
	//存在しないアーティストです。
	echo "error";
	return;
}

//update文で投票数をインクリメント
$wpdb->query($wpdb->prepare(
	"UPDATE $wpdb->postmeta SET meta_value = $votes_num WHERE meta_key = %s AND post_id = %s",
	$meta_key, $post_id
));

$response = array(
	"votes_num" => $votes_num
);

echo json_encode($response);
return;
