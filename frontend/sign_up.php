<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include("template/files.php"); ?>
</head>

<link rel="stylesheet" href="../css/sign_up.css">
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/script.js"></script>
<script>


</script>
<body>
  <?php include("template/header.php"); ?>
  <div class="Container">

<div id="Left">
  <div class="form">
        <div class="tab-content">
          <div id="signup">
            <h1>Sign Up 登入</h1>

            <form action="/" method="post">



            <div class="field-wrap">
              <label>
                E-mail信箱
              </label>
              <input type="email"  required />
            </div>

            <div class="field-wrap">
              <label>
                密碼
              </label>
              <input type="password"required autocomplete="off"/>
            </div>

            <button type="submit" class="button button-block"/>登入</button>

            </form>

          </div>


        </div><!-- tab-content -->

  </div> <!-- /form -->
</div> <!-- left結尾 -->
  <div id="Right">
    <div class="form">
          <div class="tab-content">


            <div id="login">
              <h1>第一次購物，加入會員</h1>

              <form action="/" method="post">
                <div class="top-row">
                  <div class="field-wrap">
                    <label>
                      姓名
                    </label>
                    <input type="text" placeholder="請輸入姓名" required />
                  </div>
                </div>

                <div class="field-wrap">
                <label>
                  E-mail信箱
                </label>
                <input type="email" placeholder="請輸入E-mail信箱作為帳號" required />
              </div>

              <div class="field-wrap">
                <label>
                  密碼
                </label>
                <input type="password"required >
              </div>

              <p class="forgot"><a href="#">忘記密碼?</a></p>

              <button class="button button-block"/>註冊</button>

              </form>

            </div>

          </div><!-- tab-content -->

    </div> <!-- /form -->
  </div> <!-- Right結尾 -->







</div><!--Container end  -->

  <?php include("template/footer.php"); ?>
</body>
</html>
