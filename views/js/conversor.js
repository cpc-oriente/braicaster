/** ===========================================
> CONVERSOR
============================================= */
$(document).ready(function(){
	$("#btn-conversor").on("click", function(){
		// Tomar Valor Input
		text = $("#txtarea-conversor").val();
		// Traducir
		text_braille = module_convert.toBraille(text)
		// Insertar Mensaje
		
		$("#box-conversion").empty();	

		$("#box-conversion").append(
			`<p class="text-break"><strong>${text_braille}</strong></p>`
		);		
	})
})