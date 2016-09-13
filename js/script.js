
// 按menuicon會收合
$(document).ready(function(){
  var viewport = $(window).width();
      $('.SubMenu').hide();
      if(viewport<855){
        //平板以下行為
        //主導覽按鈕MenuIcon
        $('#MenuIcon').click(function(){
          if( $('#PrimaryNavigation').hasClass('down') ){
            $('#PrimaryNavigation').slideDown();
            $('#PrimaryNavigation').removeClass('down');
          }else{
            $('#PrimaryNavigation').slideUp();
            $('#PrimaryNavigation').addClass('down');
          }
        });
        //#MenuIcon end
        //導覽按鈕
        $('#PrimaryNavigation>li').click(function(){
          $('.SubMenu').slideUp();
          $(this).find('.SubMenu').slideDown();
        });
        //#PrimaryNavigation>li end
      }else{
        //電腦版行為
          //電腦版行為
        $('#PrimaryNavigation>li').hover(function(){
          $(this).find('.SubMenu').slideDown();
        },function(){
          $(this).find('.SubMenu').slideUp();
        });
      }
});
// document end
