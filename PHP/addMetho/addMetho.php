<?php
  $tbName = $_POST['choose_table'];
  if($tbName == "IT"){
    $dbname = "ITStudy";
  }else{
    $dbname = "web_language";
  }
  if(isset($_POST['name'])){
    $metho = $_POST['name'];
  }
  if(isset($_POST['detail'])){
    $can = $_POST['detail'];
  }
  if(isset($_POST['link'])){
    $link = $_POST['link'];
  }else{$link = 'none';}

  require '../func.php';
  insert_data_to_DB($tbName,$metho,$can,$link,$dbname);
  echo "<h2>データを追加しました</h2>";
  echo "<a href='addMethoDefo.php'>入力画面に戻る</a>";
?>