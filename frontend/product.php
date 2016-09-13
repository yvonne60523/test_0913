<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include("template/files.php"); ?>
</head>

<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/category.css">
<link rel="stylesheet" href="../css/product.css">
<script src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/script.js"></script>

<script>
//數量按鈕
	$(function(){
		var $q = parseInt($('#Quantity').val());

		$('#minus').click(function(){
			if($q > 1){
				$q--;
				$('#Quantity').val($q);
					console.log("q="+$q);
			}
		});
		$('#plus').click(function(){
			$q++;
			//如果沒有限定庫存，就不需要寫判斷式
				$('#Quantity').val($q);
		});


    // 數量按鈕end
    $(window).scroll(function(){
      var window_scroll = $(window).scrollTop();
      console.log(window_scroll);
      // $('p').text(window_scroll);
      if(window_scroll > 200){
          $('#PageTop').fadeIn();
      }else{
          $('#PageTop').fadeOut();
      }
    });
    // 下面是按PageTop讓他跑到上面
    $('#PageTop>a').click(function(){
  $('body,html').animate({
    scrollTop:0,
  },300);
});
    // PageTop end


	});
// document end js一定要包在裡面


</script>
<body>
  <?php include("template/header.php"); ?>
  <div class="Container">
<?php include("template/leftcontent_category.php"); ?>
<div id="ProductContent">
  <div id="Product_Pic"><img src="../images/b1.jpg" alt=""></div>
  <div id="Product_List">
    <h2><?php echo $product['Name']; ?></h2>
      <form class="" action="add_cart.php" method="post">
        <table id="ProductTable">
          <tr>
            <td width="20%">價格：</td>
            <td class="price">
            <input type="hidden" name="ProductID" value="<?php echo $product['ProductID']; ?>">
            <input type="hidden" name="Name" value="<?php echo $product['Name']; ?>">
            <input type="hidden" name="Price" value="<?php echo $product['Price']; ?>">
            <input type="hidden" name="Picture" value="<?php echo $product['Picture']; ?>">
            <?php echo $product['Price']; ?>
          </td>
        </tr>

        <tr>
          <td>數量：</td>
          <td>
            <div id="minus" class="quantity-button">
              <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
            <input type="text" id="Quantity" name="Quantity" value="1">
            <div id="plus" class="quantity-button">
              <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" class="cart"  value="加入購物車"></td>
        </tr>

      </table>
    </form>
  </div>
  <!--product_list end  -->
  <div id="Product_hr">
  商品說明


  </div>
  <div id="Product_Info">



<div id="PageTop"><a class="DB" href="javascript:void(0)">^<span class="SrOnly">回到最上方</span></a></div>


  </div>


</div>







</div><!--Container end  -->

  <?php include("template/footer.php"); ?>
</body>
</html>
