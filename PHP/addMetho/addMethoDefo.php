<!DOCTYPE html>
<html lang="ja">
<head>
  <title>データ追加</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Languages/defo.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(function(){
      $('#choose_table').change(function(){
        if($('#choose_table').val()=='IT'){
          $('#hasLink').css('display','none');
        }else{
          $('#hasLink').css('display','block');
        }
      })

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
    .dataForm{
      margin-top: 50px;
      text-align: center;
    }
    dl{
      font-size: 22px;
      font-weight: 600;
    }
    #choose_table,#name,#detail,#link{
      line-height: 18px;
      font-size: 16px;
      padding: 2px;
      width: 14em;
    }
    #detail{
      height: 9em;
    }
    #hasLink{
      text-align: center;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <header>
    <div class="icon home_icon">
      <a href="http://ec2-18-183-167-81.ap-northeast-1.compute.amazonaws.com/index-demo.php"><img src="../images/home.png" alt="To Home"></a>
    </div>
    <div class="menu">
      <h1>データ追加</h1>
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
      <form action="addMetho.php" method="post" class="dataForm">
        <dl>
          <dt>データの追加先</dt>
          <dd>
            <select name="choose_table" id="choose_table">
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="JAVASCRIPT">JavaScript</option>
              <option value="JAVA">Java</option>
              <option value="PYTHON">Python</option>
              <option value="RUBY">Ruby</option>
              <option value="IT">基本情報技術者試験用語集</option>
            </select>
          </dd>
          <dt>データ名</dt>
          <dd><input type="text" name="name" id="name" required></dd>
          <dt>データ内容</dt>
          <dd>
            <textarea name="detail" id="detail"></textarea>
          </dd>
          <div id="hasLink">
            <dt>リンク</dt>
            <dd>
              <textarea name="link" id="link"></textarea>
            </dd>
          </div>
        </dl>
        <p id="submit_button_cover">
            <input type="submit" id="submit_button" value="送信する">
        </p>
      </form>
    </section>
  </div>
</body>
</html>