$(function(){
  /*
    $(".infografia").colorbox({
      rel:'infografia'
    });
  */
  $('.curtains').curtain({ 
    scrollSpeed: 600, 
    controls: '.menu', 
    curtainLinks: '.curtain-links', 
    easing:'swing' 
  });

  $("div#menu ul li a").hover(
    function(){
      if( !$(this).hasClass("click")){
        $(this).removeClass("normal"); 
        $(this).addClass("hover");  
      }
    }, 
    function(){
      if( !$(this).hasClass("click")){
        $(this).removeClass("hover");  
        $(this).addClass("normal"); 
      } 
    }
  );

  $(window).scroll(function(){
    setTimeout( function(){ 
      //All links to normal class
      $("div#menu ul li a").removeClass("click");
      $("div#menu ul li a").addClass("normal");

      //Only the link with id == hash...
      section = parent.location.hash.split("#").join("");
      $("div#menu ul li a#_" + section ).removeClass("normal hover"); 
      $("div#menu ul li a#_" + section ).addClass("click");  
    } , 700)
  })
});