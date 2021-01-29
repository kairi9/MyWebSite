$(function(){
  $('.link').hover(
    function(){
    $(this).parent("td").css({
      'backgroundColor':'rgba(150,150,150,0.9)',
    });
  },function(){
    if($(this).parent().parent("tr").hasClass('light')){
      $(this).parent("td").css({
        'backgroundColor':'rgba(204, 204, 204, 0.9)',
        
      });
    }else{
      $(this).parent("td").css({
        'backgroundColor':'rgba(170, 170, 170, 0.9)'
      });
    }
  })
})