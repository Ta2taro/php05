<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./ajax/ajax.html">Ajax</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./ajax_input">Ajax_input</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="fileupload.html">写真アップロード</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./fileupload_sample">fileupload_sample</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
