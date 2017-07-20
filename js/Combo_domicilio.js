//----Estados----
$.post(baseurl + "Administrador/ComboDomicilio/getEstados",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboEstados').append('<option value="'+item.id_estado+'">'
											+item.nombre+'</option>');
		});
	}
);

$('#cboEstados').change(function(){
	$('#cboEstados option:selected').each(function(){
		var id = $('#cboEstados').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboDomicilio/getMunicipios",
			{
				"id_estado" : id
			},
			function(data){
				$('#cboMunicipios').html('<option value="">Elije uno</option>');
				$('#cboLocalidades').html('<option value="">Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboMunicipios').append('<option value="'+item.id_municipio+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change

$('#cboMunicipios').change(function(){
	$('#cboMunicipios option:selected').each(function(){
		var id = $('#cboMunicipios').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboDomicilio/getLocalidades",
			{
				"id_municipio" : id
			},
			function(data){
				$('#cboLocalidades').html('<option value="">Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboLocalidades').append('<option value="'+item.id_localidad+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change
