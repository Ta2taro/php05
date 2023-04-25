<?php
session_start();

//1. POSTデータ取得
$name = $_POST['name'];
$email = $_POST['email'];
$naiyou = $_POST['naiyou'];

$user_id = $_SESSION['user_id'];

//2. DB接続します(エラー処理追加)
require_once("../funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table( user_id,name, email, naiyou, indate )VALUES(:user_id,:name, :email, :naiyou, sysdate())");
$stmt->bindValue(':user_id', $user_id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':naiyou', $naiyou);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  echo "false";
}else{
  echo "true";
}
?>