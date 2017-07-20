//----Habitad----
$.post(baseurl + "Administrador/ComboMascota/getEspecie_a",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboEspecie').append('<option value="'+item.id_especie+'">'
											+item.nombre+'</option>');
		});
	}
);

$('#cboEspecie').change(function(){
	$('#cboEspecie option:selected').each(function(){
		var id = $('#cboEspecie').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboMascota/getRaza_a",
			{
				"id_especie" : id
			},
			function(data){
				$('#cboRaza').html('<option value="">Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboRaza').append('<option value="'+item.id_raza+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change
