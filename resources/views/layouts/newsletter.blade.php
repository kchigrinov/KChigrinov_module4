<div id="overlay">
    <div class="popup" id="popup">
        <h2>Подпишитесь на новостную рассылку</h2>
        <form method="get">
            <input type="email" placeholder="Email" action="<?=$_SERVER['PHP_SELF']?>">
            <input type="text" name="" placeholder="Имя">
            <input type="submit" value="Подсписаться">
        </form>        
        <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
    </div>
</div>

<script type="text/javascript">    
$(function() {
  // Проверяем запись в куках о посещении
  // Если запись есть - ничего не происходит
     if (!$.cookie('hideModal')) {
  // если cookie не установлено появится окно
  // с задержкой 15 секунд
    var delay_popup = 15000;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
     }
     $.cookie('hideModal', true, {
   // Время хранения cookie в днях
    expires: 7,
    path: '/'
   });
});
</script>