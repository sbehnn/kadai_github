$(window).on('',function(){
  console.log('loadイベントが発生しました');
 });
 
 $(function(){
 $(window).on('scroll',function(){
  console.log('scrollイベントが発生しました');
  });
 });