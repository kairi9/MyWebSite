<?php
  function select_page($language){
    $languages = array(
      "HTML"=>"http://www.htmq.com/htmlkihon/001.shtml",
      "CSS"=>"http://www.htmq.com/csskihon/001.shtml",
      "JavaScript"=>"https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference",
      "Python"=>"https://docs.python.org/ja/3/",
      "Ruby"=>"https://docs.ruby-lang.org/ja/2.7.0/doc/index.html",
      "Java"=>"https://docs.oracle.com/javase/jp/8/docs/api/");
    $language = $language;
    require "Languages/defo.php";
  }

  function insert_data_to_DB($tableName,$metho,$can,$link,$dbname){
    // 変数の初期化
    $sql = null;
    $res = null;
    $dbh = null;
    try {
      // DBへ接続
      $dbh = new PDO("mysql:dbname=$dbname","root");

      // SQL作成
      if($dbname=="web_language"){
        $sql = "INSERT INTO $tableName ( メソッド,出来ること,リンク ) VALUES ( '$metho','$can','$link' );";
      }else{
        $sql = "INSERT INTO $tableName ( メソッド,出来ること) VALUES ( '$metho','$can' );";
      }
      // SQL実行
      $res = $dbh->query($sql);

    } catch(PDOException $e) {
      echo $e->getMessage();
      die();
    }

    // 接続を閉じる
    $dbh = null;
  }

  function disp_data_from_DB($dbName,$tbName){
    // 変数の初期化
    $sql = null;
    $res = null;
    $dbh = null;
    try {
      // DBへ接続
      $dbh = new PDO("mysql:dbname=$dbName","root");

      // SQL作成
      $sql = "SELECT * FROM $tbName";

      // SQL実行
      $res = $dbh->query($sql);
      $count = 1;
      // 取得したデータを出力
      foreach( $res as $value ) {
        $method = htmlspecialchars($value['メソッド']);
        $can = htmlspecialchars($value['出来ること']);
        if($dbName=='web_language'){$file = htmlspecialchars($value['リンク']);}
        if($count % 2 == 0){
          if($dbName=='web_language'){
            echo "<tr class='dark'><td>{$method}</td><td>{$can}</td><td><a href='{$file}' target='blank' class='link'>{$file}</a></td></tr>";
          }else{
            echo "<tr class='dark'><td class='term'>{$method}</td><td class='mean'>{$can}</td></tr>";
          }
        }else{
          if($dbName=='web_language'){
            echo "<tr class='light'><td>{$method}</td><td>{$can}</td><td><a href='{$file}' target='blank' class='link'>{$file}</a></td></tr>";
          }else{
            echo "<tr class='light'><td class='term'>{$method}</td><td class='mean'>{$can}</td></tr>";
          }
        }
        $count++;
      }

    } catch(PDOException $e) {
      echo $e->getMessage();
      die();
    }

    // 接続を閉じる
    $dbh = null;
  }
?>