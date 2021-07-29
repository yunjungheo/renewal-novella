$(function(){

// const tbHeight = $(".top_bar").outerHeight();

//console.log(tbHeight);   
 

const headerStick = function(){
  const hdTop = $("header").offset().top;
    

    $(window).scroll(function(){
      const scroll = $(window).scrollTop();
  
      if(scroll >=hdTop){
        $("header").css({
          position:"fixed",
          top:0,
          width:"100%",
          background: "#fff"
        });
        $("header").addClass("stick");
      }else{
        $("header").css({position:"static"});
        $("header").removeClass("stick");
      }
    });
}

headerStick();



  $(".top_nav, .hiden_sub_box").on("mouseenter", function(){
    $(".subnav_box").css({display:"block"});
    $(".subnav_box").stop().animate({height:"135px"}, 300);
  });

  $(".top_nav, .hiden_sub_box").on("mouseleave", function(){
    $(".subnav_box").stop().animate({height:0}, 300, function(){ 
     $(".subnav_box").css({display:"none"});

       
    });
  });



  $(".top_nav li").on("mouseenter", function(){
    const i = $(this).index();
  
    $(".subnav_box").hide();
    $(".subnav_box").eq(i).show();
  });



// 더보기 버튼 클릭하면 3개씩 화면 더 볼수있음.
 const loadMore = function(){
  $(".product_box").hide();
  $(".product_box").slice(0, 3).show();


  $(".load_more button").click(function(){
    $(".product_box:hidden").slice(0, 3).show();
    if ($(".product_box:hidden").length == 0) {
      $(".load_more").html(`<input type="hidden>`);
      
      
   }
  });
 }
 loadMore();





});
