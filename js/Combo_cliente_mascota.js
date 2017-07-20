//----Habitad----
$.post(baseurl + "Zootecnico/Citas/getCliente",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCliente').append('<option value="'+item.id_cliente+'">'
			+item.nombre+" "+item.ap_paterno+" "+item.ap_materno+'</option>');
		});
	}
);

$('#cboCliente').change(function(){
	$('#cboCliente option:selected').each(function(){
		var id = $('#cboCliente').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Zootecnico/Citas/getMascota",
			{
				"id_cliente" : id
			},
			function(data){
				$('#cboMascota').html('<option value="">Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboMascota').append('<option value="'+item.id_mascota+'">'
					+"Nombre: "+item.nombre+" / Sexo:"+item.sexo+" / Color:"+item.color+'</option>');
				});//each
			});//function

	});//seleected
});//change