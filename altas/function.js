var x = $(document).ready(Ini);

function Ini(){
	$("#load").load("listados.php");
}

function Llamar(n){
	$.get("modificar.php",{id:n},function(data){
		$("#datos").html(data);	
	});
}

function Operacion(n){
	var btn = $("#op_"+n).val();
	var idi = $("#id").val();
	var nomb = $("#nom").val();
	var canti = $("#cant").val();
	$("#datos").html('<img src="loading.gif">');
	$("#load").fadeTo("slow",0.1);
	$.get("operaciones.php",{op:btn,id:idi,nom:nomb,cant:canti},Mostrar);
}

function Mostrar(data){
	$("#datos").html('');
	$("#load").fadeTo("slow",1);
	$("#load").load("listados.php");
}
