<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="js/flexslider/flexslider.css" >
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/script.js"></script>



</head>



<script>
$(document).ready(function(){
$('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
});
// document end
</script>

<body>

        <header id="Header">
            <div class="Container">
                <div id="MenuIcon"><a class="DB" href="#"><span class="SrOnly">MenuIcon</span></a></div>

                <div id="MemberContent">
                    <form action="" id="SearchContent">
                      <input type="text" name="Search" placeholder="search" value="">
                      <button type="submit" id="SearchBtn" value="" class="fa fa-search"></button>
                    </form>
                    <div id="Search"><a href="#" class="DB"><i class="fa fa-search" aria-hidden="true"></i><span class="SrOnly">搜尋</span></a></div>
                    <div id="MemberIcon"><a href="#" class="DB"><i class="fa fa-key" aria-hidden="true"></i><span class="SrOnly">帳號</span></a></div>
                    <div id="CartIcon"><a href="#" class="DB"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="SrOnly">購物車</span></a></div>

                </div>
                <h1 id="Logo"><a class="DB" href="index.php"><img src="images/logo.png" alt="" /></a></h1>
                <nav id="PrimaryNavigation" class="down">
                    <ul id="navli">
                        <li><a class="DB" href="#"><span class="">NEW</span></a></li>
                        <li><a class="DB" href="#"><span class="">ALL</span></a></li>
                        <li><a class="DB" href="#"><span class="">飾品</span></a>
                          <ol class="SubMenu" type="a">
                            <li><a href="#">耳環</a></li>
                            <li><a href="#">項鍊</a></li>
                            <li><a href="#">頸鍊</a></li>
                            <li><a href="#">戒指</a></li>
                            <li><a href="#">手環</a></li>
                          </ol>
                        </li>
                        <li><a class="DB" href="#"><span class="">包包</span></a></li>
                        <li><a class="DB" href="#"><span class="">髮飾</span></a>
                          <ol class="SubMenu" type="a">
                            <li><a href="#">髮帶</a></li>
                            <li><a href="#">髮夾</a></li>
                            <li><a href="#">髮圈</a></li>
                              </ol>
                        </li>
                        <li><a class="DB" href="#"><span class="">方巾</span></a></li>
                        <li><a class="DB" href="#"><span class="">其他</span></a></li>
                    </ul>
                </nav>
        </header>




        </div>

        <div id="Banner">
          <ul class="bxslider">
            <li><img src="images/bg.jpg" /></li>
            <li><img src="images/bg.jpg" /></li>
            <li><img src="images/bg.jpg" /></li>
          </ul>
        </div>
    </div>

    <div class="Container">
        <div class="Box ml0px"><img src="images/b1.jpg" alt=""></div>
        <div class="Box"><img src="images/b2.jpg" alt=""></div>
        <div class="Box"><img src="images/b3.jpg" alt=""></div>
        <div class="Box ml0px"><img src="images/b4.jpg" alt=""></div>
        <div class="Box"><img src="images/b5.jpg" alt=""></div>
        <div class="Box"><img src="images/b6.jpg" alt=""></div>
    </div>

    <footer id="Footer">

        <div class="Container">
            <ul>
                <li><a class="DB" href="">關於我們</a></li>
                <li><a class="DB" href="">購物須知</a></li>
                <li><a class="DB" href="">購物流程</a></li>
                <li><a class="DB" href="">售後服務</a></li>
            </ul>
            <!--&nbsp;是特殊字元 空白鍵的意思  -->
            <div id="Follow">FOLLOW US &nbsp;<img src="images/f1-01.png" alt=""> <img src="images/f2-01.png" alt=""> <img src="images/f3-01.png" alt=""></div>

            <div id="Email">E-mail:milky_forest@gmail.com</div>
            <div id="Copyright">COPYRIGHT &copy; 2016 MILKY FOREST ALL RIGHTS RESERVED.</div>
        </div>
    </footer>

</body>

</html>
