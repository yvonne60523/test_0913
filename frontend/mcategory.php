<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include("template/files.php"); ?>
</head>

<link rel="stylesheet" href="../css/category.css">
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/script.js"></script>
<body>
  <?php include("template/header.php"); ?>
<div class="Container">
<ul id="LeftContent">
    <li><a href="#">最新商品/New</a></li>
    <li><a href="#">全部商品/All</a></li>
    <li><a href="#">飾品/Accessories</a>
      <ul>
        <li><a href="#">耳環</a></li>
        <li><a href="#">項鍊</a></li>
        <li><a href="#">頸鍊</a></li>
        <li><a href="#">戒指</a></li>
        <li><a href="#">手環</a></li>
      </ul>
    </li>
    <li><a href="#">髮飾/Hair Accessories</a>
    <ul>
      <li><a href="#">髮帶</a></li>
      <li><a href="#">髮夾</a></li>
      <li><a href="#">髮圈</a></li>
    </ul>
    </li>
    <li><a href="#">方巾/Scarf</a>
    <ul>
      <li><a href="#">全部方巾</a></li>
    </ul>
    </li>
      <li><a href="#">其他/Others</a>
    <ul>
      <li><a href="#">其他商品</a></li>
    </ul>
    </li>
</ul>
<div id="RightContent">
<!--一頁24個品項  -->
<ul>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
  <li><div class="list_pic"><img src="../images/b3.jpg" alt=""></div><div class="list_info"><a href="#">竹久夢二少女水玉寬版髮帶(兩色)</a></div><div class="price">NT.290</div></li>
</ul>

<div class="product_pegination">
<ul class="pagination">
  <li><a href="#">«</a></li>
  <li><a href="#">1</a></li>
  <li><a class="active" href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">6</a></li>
  <li><a href="#">7</a></li>
  <li><a href="#">»</a></li>
</ul>
</div>

</div>

</div>

<?php include("template/footer.php"); ?>
</body>
</html>
