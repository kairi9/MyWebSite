<?php
  $menus = array(
    "LANGUAGE"=>"http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/Languages/html.php",
    "IT用語集"=>"http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/IT/itStudy.php",
    "データ追加"=>"http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/addMetho/addMethoDefo.php"
  );
  foreach($menus as $menu=>$page){
    echo "<a href='$page'>$menu</a>";
  }
?>