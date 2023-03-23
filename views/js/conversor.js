
/** ===========================================
> CONVERSOR CONTROLLER
============================================= */
const ctr_conv = {
	start:(btn)=>{
		// Arranque inicial
		$("#"+btn).click();
	},
	tabs:(obj) => {
		// INDENTIFICACIÓN
		id_obj = obj.target.getAttribute("id")
		// Tabs
		tabs = "." + $("#"+id_obj).attr("tg-tabsg");
		// Tab
		tab ="#" + $("#"+id_obj).attr("tg-tab");
		// SET
		// Apagar tabs
		$(tabs).hide()
		// Enceder tab
		$(tab).show();
	},
	convert_to_braille:()=>{
		// Tomar Valor Input
		text = $("#txtarea-conversor-txabr").val();
		// Traducir
		text_braille = module_convert.toBraille(text)
		split_text = text_braille.split("")
		// console.log("text_braille", split_text);
		// Insertar Mensaje
		$("#box-conv-txabr").empty();	
		$("#box-conv-txabr").append(
			`<p class="text-break"> 
				<strong>${text_braille}</strong>
				<span class="txt_effect"></span> 
			</p>`
		);
	},
	convert_to_text:()=>{
		// Tomar Valor Input
		text = $("#txtarea-conversor-bratx").val();
		// Traducir
		text_braille = module_convert.toText(text)
		split_text = text_braille.split("")
		// console.log("text_braille", split_text);
		// Insertar Mensaje
		$("#box-conv-bratx").empty();	
		$("#box-conv-bratx").append(
			`<p class="text-break"> 
				<strong>${text_braille}</strong>
				<span class="txt_effect"></span> 
			</p>`
		);
	}
}
/** =================================================
 * 	JQUERY START >
 *  ================================================= */
$(document).ready(function(){
	// AGREGAR EVENTOS TABS
	$(".btn-check").on("click", (event)=>ctr_conv.tabs(event));
	// BTN TEXTO A BRAILE
	$("#txtarea-conversor-txabr").on("keyup", (event)=>ctr_conv.convert_to_braille(event))
	// BTN BRAILE A TEXTO
	$("#btn-conversor-bratx").on("click", (event)=>ctr_conv.convert_to_text(event))
	// OBJETO CONTROLADOR >
	ctr_conv.start("btnradio1");
})