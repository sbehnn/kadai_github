$(function () {
   // id属性がfadeOutの要素がクリックされたら
 $('#change-color').on('click', function() {
  // カラーを赤くする
  $('#target').css('color','red');

}); // id属性がfadeOutの要素がクリックされたら
$('#change-text').on('click', function() {
 // 文字内容が変化する
    $('#target').text('Hello!');
});
// id属性がfadeOutの要素がクリックされたら
 $('#fade-out').on('click', function() {
   // フェードアウトする
   $('#target').fadeOut();
 });
 // id属性がfadeOutの要素がクリックされたら
 $('#fade-in').on('click', function() {
  // フェードインする
  $('#target').fadeIn();
});
});