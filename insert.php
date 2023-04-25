<?php

session_start();

//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];

//セッション変数からログインユーザーIDを取得する
$user_id = $_SESSION['user_id'];


//2. DB接続します
require_once("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table(user_id,name,email,naiyou,indate)VALUES(:user_id,:name,:email,:naiyou,sysdate())");
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}
?>
