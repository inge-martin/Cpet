//----Clinicas----
$.post(baseurl + "Administrador/ComboExpediente/getClinicas",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboClinicas').append('<option value="'+item.id_clinica+'">'
				+item.nombre+'</option>');
		});
	}
	);

//----Zootecnicos----
$('#cboClinicas').change(function(){
	$('#cboClinicas option:selected').each(function(){
		var id = $('#cboClinicas').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboExpediente/getZootecnicos",
		{
			"id_clinica" : id
		},
		function(data){
			$('#cboZootecnicos').html('<option value="">Elije un Zootecnico</option>');
			$('#cboClientes').html('<option value="">--------------------------------------------------------</option>');
			$('#cboMascotas').html('<option value="">--------------------------------------------------------</option>');
			var c = JSON.parse(data);
			$.each(c,function(i,item){
				$('#cboZootecnicos').append('<option value="'+item.id_zootecnico+'">'
					+item.nombre+" "+item.ap_paterno+" "+item.ap_materno+'</option>');
				});//each
			});//function

	});//seleected
});//change

//----Clientes----
$('#cboZootecnicos').change(function(){
	$('#cboZootecnicos option:selected').each(function(){
		var id = $('#cboZootecnicos').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboExpediente/getClientes",
		{
			"id_zootecnico" : id
		},
		function(data){
			$('#cboClientes').html('<option value="">Elije un Cliente</option>');
			$('#cboMascotas').html('<option value="">--------------------------------------------------------</option>');
			var c = JSON.parse(data);
			$.each(c,function(i,item){
				$('#cboClientes').append('<option value="'+item.id_cliente+'">'
					+item.nombre+" "+item.ap_paterno+" "+item.ap_materno+'</option>');
				});//each
			});//function

	});//seleected
});//change

//----Mascotas----
$('#cboClientes').change(function(){
	$('#cboClientes option:selected').each(function(){
		var id = $('#cboClientes').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboExpediente/getMascotas",
		{
			"id_cliente" : id
		},
		function(data){
			$('#cboMascotas').html('<option value="">Elije una Mascota</option>');
			var c = JSON.parse(data);
			$.each(c,function(i,item){
				$('#cboMascotas').append('<option value="'+item.id_mascota+'">'
					+"Nombre: "+item.nombre+" / Sexo:"+item.sexo+" / Color:"+item.color+'</option>');
				});//each
			});//function

	});//seleected
});//change
