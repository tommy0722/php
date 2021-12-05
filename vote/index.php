<?php include_once "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>
      .container{
        min-height: 544px;
        }
  </style>
</head>

<body>

  <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
    <a href="index.php">
      <!-- 輪播圖 -->
      <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
        <div class="carousel-inner position-absolute" style="top:-250px">
            <?php
            // 取得資料表中狀態為1的廣告圖片
            $images=all('ad',['sh'=>1]);
            // 用迴圈來跑每一筆廣套圖片依照HTML格式顯示在網頁上
            foreach ($images as $key => $value) {
              // 判斷如果是第一筆，會加入一個active的class
              if ($key==0) {
                echo "<div class='carousel-item active'>";
              }else{
                echo "<div class='carousel-item'>";
              }
              // 帶入圖片資訊
              echo "<img class 'd-block w-100' src='image/{$image['name']}' title='{$image['intro']}'>";
              echo "<div>";
            }
            ?>
          </div>
        </div>
      </div>
    </a>
  </div>
  <nav class="bg-light shadow py-3 text-center mb-4x">
    <div>&nbsp;</div>
    <?php
    if (isset($_SESSION['error'])) {
      echo $_SESSION['error'];
    }

    if (isset($_SESSION['user'])) {
      echo "<span class='pr-5'>歡迎!!{$_SESSION['user']}</span>";
    ?>
      <div class="float-right">
        <a class="btn btn-sm btn-primary mx-1" href="logout.php">登出</a>

      </div>
    <?php
    } else {
    ?>

      <div class="float-right">
        <a class="btn btn-sm btn-primary mx-1" href="?do=login">會員登入</a>
        <a class="btn btn-sm btn-info mx-1" href="?do=reg">註冊新會員</a>
      </div>
    <?php
    }
    ?>
  </nav>
  <div class="container">
    <?php
    // 三元運算式
    // 如果讀得到$_GET['do'] echo $_GET['do'] 讀不到 echo show_vote_list
    // 回傳的值為路徑+檔名,php
    // 如果$flie值存在，導入$file路徑，沒有則首頁
    $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';
    $file = "./frontend/" . $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "./frontend/show_vote_list.php";
    }
    ?>
  </div>

  <div class="p-3 text-center text-light bg-primary fixed-bottom">mack版權所有、歡迎盜用</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>