$(document).ready(function(){

  $(".search").keyup(function()
  {

    var box = $(this).val();
    var dataString = 'query='+ box;

    if(box!='')
    {

      $.ajax({
        type : "POST",
        url  : "finder.php",
        data : dataString,
        cache: false,

        success: function(contenido)
        {
          $("#display").html(contenido).show();
        }
      });
    }

      return false;
  });
});
