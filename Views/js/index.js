$(document).ready(function(){

	// $('.caja-presu').css('background','#ccc')
 //    $(".caja-presu").prop('disabled', true);

	$('#myfile').change(function(){
		
		var mifiles = input.addEventListener('change', updateImageDisplay);
		console.log("hola aqui");
	})

	$( '.micheckbox' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            //alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
            $('.caja-presu').css('background','#fff')
            $(".caja-presu").prop('disabled', false);
        } else {
            // Hacer algo si el checkbox ha sido deseleccionado
            //alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
            var t = $('#txtEnero').val();
            
            $('.caja-presu').css('background','#ccc')
            $(".caja-presu").prop('disabled', true);
    		
        }
    });

    $('#txtEnero').focusout(function(){
            var enero = $("#txtEnero").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtEnero").val("");
                    Suma();
                }else{
                    var totalEnero = $("#txtEnero").val();
                    
                    Suma();
                }
            
        })

        $('#txtFebrero').focusout(function(){
            var enero = $("#txtFebrero").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtFebrero").val("");
                    Suma();
                }else{
                    var totalFebrero = $("#txtFebrero").val();
                    
                    Suma();
                }
            
        })

        $('#txtMarzo').focusout(function(){
            var enero = $("#txtMarzo").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtMarzo").val("");
                    Suma();
                }else{
                    var totalMarzo = $("#txtMarzo").val();
                    
                    Suma();
                }
            
        })

        $('#txtAbril').focusout(function(){
            var enero = $("#txtAbril").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtAbril").val("");
                    Suma();
                }else{
                    var totalAbril = $("#txtAbril").val();
                    
                    Suma();
                }
            
        })

        $('#txtMayo').focusout(function(){
            var enero = $("#txtMayo").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtMayo").val("");
                    Suma();
                }else{
                    var totalMayo = $("#txtMayo").val();
                    
                    Suma();
                }
            
        })

        $('#txtJunio').focusout(function(){
            var enero = $("#txtJunio").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtJunio").val("");
                    Suma();
                }else{
                    var totalJunio = $("#txtJunio").val();
                    
                    Suma();
                }
            
        })


        $('#txtJulio').focusout(function(){
            var enero = $("#txtJulio").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtJulio").val("");
                    Suma();
                }else{
                    var totalJulio = $("#txtJulio").val();
                    
                    Suma();
                }
            
        })

        $('#txtAgosto').focusout(function(){
            var enero = $("#txtAgosto").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtAgosto").val("");
                    Suma();
                }else{
                    var totalAgosto = $("#txtAgosto").val();
                    
                    Suma();
                }
            
        })

        $('#txtSetiembre').focusout(function(){
            var enero = $("#txtSetiembre").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtSetiembre").val("");
                    Suma();
                }else{
                    var totalSetiembre = $("#txtSetiembre").val();
                    
                    Suma();
                }
            
        })

        $('#txtOctubre').focusout(function(){
            var enero = $("#txtOctubre").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtOctubre").val("");
                    Suma();
                }else{
                    var totalOctubre = $("#txtOctubre").val();
                    
                    Suma();
                }
            
        })

        $('#txtNoviembre').focusout(function(){
            var enero = $("#txtNoviembre").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtNoviembre").val("");
                    Suma();
                }else{
                    var totalNoviembre = $("#txtNoviembre").val();
                    
                    Suma();
                }
            
        })

        $('#txtDiciembre').focusout(function(){
            var enero = $("#txtDiciembre").val();
            
                if(enero == null || enero.length == 0 || isNaN(enero)){
                    $("#txtDiciembre").val("");
                    Suma();
                }else{
                    var totalDiciembre = $("#txtDiciembre").val();
                    
                    Suma();
                }
            
        })

        
        function Suma(){
            var suma = 0;
            
            suma  = Number($("#txtEnero").val());
            suma += Number($("#txtFebrero").val());
            suma += Number($("#txtMarzo").val());
            suma += Number($("#txtAbril").val());
            suma += Number($("#txtMayo").val());
            suma += Number($("#txtJunio").val());
            suma += Number($("#txtJulio").val());
            suma += Number($("#txtAgosto").val());
            suma += Number($("#txtSetiembre").val());
            suma += Number($("#txtOctubre").val());
            suma += Number($("#txtNoviembre").val());
            suma += Number($("#txtDiciembre").val());
                        
            $("#txtTotal").val(suma);

        }
})
