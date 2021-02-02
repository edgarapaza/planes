<?php
include "header.php";

?>

<style type="text/css" media="screen">
  .display_box{
    border: 1px solid red;
    padding: 5px;
    height: 200px;
    width: 900px;
  }
  .caja{
    display: block;
  }
  li{
    list-style: none;
  }
  .clasificador{
    color: green;
  }
  .texto{
    color: blue;
  }
</style>

<script type="text/javascript">
  $(document).ready(function(){


    $("#xcodigo").keyup(function(){
      var cod = document.getElementById("xcodigo").value;

      var param = {
        "codigo": cod
      };

      $.ajax({
        method:'post',
        url: '../Controllers/bienes.controller.php',
        data: param,
        beforeSend: function(){

        },
        success: function(res){
          $("#resultado").html(res);
        },
        error: function(){
          console.log("Error");
        }
      })

    });

    $('#xcodigo').blur(function() { 
      $('.display_box').hide();
    });


    $("#bien").keyup(function(){
      var cod = document.getElementById("bien").value;

      var param = {
        "bien": cod
      };

      $.ajax({
        method:'post',
        url: '../Controllers/bienesxNombre.controller.php',
        data: param,
        beforeSend: function(){

        },
        success: function(res){
          $("#resultado").html(res);
        },
        error: function(){
          console.log("Error");
        }
      })

    });

    $("#resultado").on('click', 'a', function () {
      
      var idgasto = $(this).attr('id');
      var especifica = $(this).attr('especifica');
      var mides = $(this).attr('mides');

      var caja = $("#caja_codigo");
      var espe = $("#especifica");
      var descri = $("#descripcion");

      caja.val(idgasto);
      espe.val(especifica);
      descri.val(mides);
    });

   /* $("#lista_gasto > li").on('click', 'a', function () {
        

      });*/
  });
</script>

<div class="container">
  <div class="row">
    <div class="col-md-12">


        <h2>Buscador de bienes</h2>

        <div class="col-sm-12 form-group row">
          <label for="xcodigo">Codigo</label>
          <div class="col-sm-2">
            <input type="text" name="xcodigo" id="xcodigo" class="form-control">
          </div>

          <label for="" class="col-sm-1">Buscador</label>
          <div class="col-sm-6">
            <input type="text" name="bien" id="bien" value="<?php echo $cadena;?>" class="form-control">
          </div>

        </div>

      <div id="resultado"></div>

      


    </div>
  </div>
</div>

