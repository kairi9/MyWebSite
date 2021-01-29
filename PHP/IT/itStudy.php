<!DOCTYPE html>
<html lang="ja">
<head>
  <title>基本情報技術者試験用語集</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Languages/defo.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="../Languages/defo.js"></script>
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
  <style>
    .term{
      width: 18%;
      text-align: center;
      font-weight: 600;
    }
    .mean{
      width: 70%;
    }
  </style>
</head>
<body>
  <header>
    <div class="icon home_icon">
      <a href="http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/index-demo.php"><img src="../images/home.png" alt="To Home"></a>
    </div>
    <div class="menu">
      <h1>基本情報技術者試験用語集</h1>
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
        <h3>用語集</h3>
      </div>
      <table id="codes">
        <tr class="theader">
          <th class="term">用語</th>
          <th class="maen">意味</th>
        </tr>
        <?php
          require '../func.php';
          disp_data_from_DB('ITStudy','IT');
        ?>
      </table>
    </section>
  </div>
</body>
</html>