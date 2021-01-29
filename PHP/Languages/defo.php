<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo "<title>{$language}</title>";?>
  <link rel="stylesheet" href="defo.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="./defo.js"></script>
  <script>
    $(function(){
      $('.menu_icon').click(function(){
        if($('.menu_tab').is(':hidden')){
          $('.menu_tab').slideDown();
        }else{
          $('.menu_tab').slideUp();
        }
      })
    })
  </script>
</head>
<body>
  <header>
    <div class="icon home_icon">
      <a href="http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/index-demo.php"><img src="../images/home.png" alt="To Home"></a>
    </div>
    <div class="menu">
      <h1>言語まとめ</h1>
      <h2><?php echo "{$language}"?>まとめ</h2>
      <?php
        foreach ($languages as $l=>$link){
          if($l == $language){
            continue;
          }
          echo "<a href='{$l}.php'>{$l}</a>";
        }
      ?>
    </div>
    <div class="icon menu_icon">
      <img src="../images/menu.png" alt="Menu">
    </div>
    <div class="menu menu_tab">
      <?php require "../menu.php" ?>
    </div>
  </header>
  <div class="wrapper">
    <section class="main">
      <div id="main_head">
        <?php echo "<a href='$languages[$language]' target=blank><img src='../images/{$language}.png' alt='image' style='transition: all 0.8s;'></a>"?>
        <h3>←リファレンス　リンク</h3>
      </div>
      <table id="codes">
        <tr class="theader">
          <th>タグ</th>
          <th>出来ること</th>
          <th>リンク</th>
        </tr>
        <?php
          disp_data_from_DB('web_language',$language);
        ?>
      </table>
    </section>
  </div>
</body>
</html>