<?php 
include "header.php";
?>

<script type="text/javascript">
	$(document).ready(function() {

		$("#lista_gasto > li").on('click', 'a', function () {
	       var id_categoria = $(this).attr('id');
	       var caja = $("#caja_codigo");

	       caja.val(id_categoria);

	    });
    });
</script>

	<h4>lista</h4>
	<ul id="lista_gasto">
		<li><a id='1' href='#' data-toggle='tab' aria-expandend='false'>uno</a></li>
		<li><a id='2' href='#' data-toggle='tab' aria-expandend='false'>dos</a></li>
		<li><a id='3' href='#' data-toggle='tab' aria-expandend='false'>tres</a></li>
		<li><a id='4' href='#' data-toggle='tab' aria-expandend='false'>cuatro</a></li>

	</ul>

	<input type="text" id="caja_codigo">


