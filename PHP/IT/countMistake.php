<?php
  $tbName = 'countMistake';
  $dbname = "ITStudy";
  $indexRow = $_POST['indexNum']-1;
  // 変数の初期化
  $sql = null;
  $res = null;
  $dbh = null;
  try {
    // DBへ接続
    $dbh = new PDO("mysql:dbname=$dbname","root");
    // SQL作成
    $sql = "SELECT '間違えた回数' FROM 'countmistake' LIMIT 1 OFFSET $indexRow";
    // SQL実行
    $res = $dbh->query($sql);
    $count = $res[0]['間違えた回数'];
    echo htmlspecialchars($count);
    

  } catch(PDOException $e) {
    echo $e->getMessage();
    die();
  }

  // 接続を閉じる
  $dbh = null;
?>