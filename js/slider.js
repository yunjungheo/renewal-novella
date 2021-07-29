$(function(){


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



  const footerslider = function(){
    //Light Slider Function Code
    $(".footer_info").lightSlider({
       //1.슬라이드 할부분의 전체를 감싸고있는 slider를 선택해준것
       //2.lightSlider안에 객체화 시켜서 넣어줘야해서 {}사용
    
      item: 1,
      controls: true,
   
      speed:1000,
      auto: true,
      loop: true,
      pause: 9500,  
      easing: 'linear'
    
     }); 
    }
    footerslider();
  

});