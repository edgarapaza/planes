$(document).ready(function(){

	recargarLista();

			$('#d_gerencia').change(function(){
				var g = document.getElementById("gerencia").value;
				
				$.ajax({
					type: 'post',
					url : '../Controllers/ajax_subgerencias.php',
					data: {"idsubgerencia": g},
					success: function(res){
						$('#d_subgerencia').html(res)
					},
					error: function(er){
						$('#d_subgerencia').html(er)
					}
				})
			});

			$('#d_subgerencia').change(function(){
				var sg = document.getElementById("subgerencia").value;
				

				$.ajax({
					type: 'post',
					url : '../Controllers/ajax_subsubgerencias.php',
					data: {"centrocosto": sg},
					success: function(res){
						$('#d_centrocosto').html(res)
					},
					error: function(er){
						$('#d_centrocosto').html(er)
					}
				})
			});

			$('#d_objetivo_estrategico').change(function(){
				var oe = document.getElementById("objetivo_estrategico").value;
				
				$.ajax({
					type: 'post',
					url : '../Controllers/ajax_accionesestrategicas.php',
					data: {"oe": oe},
					success: function(res){
						$('#d_accion_estrategica').html(res)
					},
					error: function(er){
						$('#d_accion_estrategica').html(er)
					}
				});
			});
	});

function recargarLista()
{
	$.ajax({
		type: 'post',
		url : '../Controllers/ajax_gerencia.php',
		
		success: function(res){
			$('#d_gerencia').html(res)
		},
		error: function(er){
			$('#d_gerencia').html(er)
		}
	});

	$.ajax({
		type: 'post',
		url : '../Controllers/ajax_objetivoestrategico.php',
		
		success: function(res){
			$('#d_objetivo_estrategico').html(res)
		},
		error: function(er){
			$('#d_objetivo_estrategico').html(er)
		}
	});
}