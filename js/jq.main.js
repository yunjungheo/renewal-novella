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

const slider = function(){
  //Light Slider Function Code
  $(".slider").lightSlider({
     //1.슬라이드 할부분의 전체를 감싸고있는 slider를 선택해준것
     //2.lightSlider안에 객체화 시켜서 넣어줘야해서 {}사용
  
    item: 1,
    controls: true,
    prevHtml: '<i class="fa fa-angle-left"></i>',
    nextHtml: '<i class="fa fa-angle-right"></i>',

    speed:1000,
    auto: true,
    loop: true,
    pause: 9500,  
    easing: 'linear'
  
   }); 
  }
  slider();



  $(".top_nav, .aco_sub").on("mouseenter", function(){
    $(".aco_sub").css({display:"block"});
    $(".aco_sub").stop().animate({height:"135px"}, 300);
  });

  $(".top_nav, .aco_sub").on("mouseleave", function(){
    $(".aco_sub").stop().animate({height:0}, 300, function(){ 
     $(".aco_sub").css({display:"none"});

       
    });
  });


  $(".top_nav li").on("mouseenter", function(){
    const i = $(this).index();
  
    $(".subnav_box").hide();
    $(".subnav_box").eq(i).show();
  });





});
