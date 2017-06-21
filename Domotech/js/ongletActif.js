currpage = $(location).attr('href');
$('.barre-menu-element').each(function(){
  lien  = $(this).attr('href');
  if (currpage.indexOf(lien) >= 0){
    $(this).addClass('active');
  }
});
