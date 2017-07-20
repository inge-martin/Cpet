//----Habitad----
$.post(baseurl + "Administrador/ComboMascota/getHabitad",
	function(data){
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboHabitad').append('<option value="'+item.id_habitad+'">'
											+item.nombre+'</option>');
		});
	}
);

$('#cboHabitad').change(function(){
	$('#cboHabitad option:selected').each(function(){
		var id = $('#cboHabitad').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboMascota/getEspecie",
			{
				"id_habitad" : id
			},
			function(data){
				$('#cboEspecie').html('<option value="">Elije uno</option>');
				$('#cboRaza').html('<option value="">Elije uno</option>');
				var c = JSON.parse(data);
				$.each(c,function(i,item){
					$('#cboEspecie').append('<option value="'+item.id_especie+'">'
												+item.nombre+'</option>');
				});//each
			});//function

	});//seleected
});//change

$('#cboEspecie').change(function(){
	$('#cboEspecie option:selected').each(function(){
		var id = $('#cboEspecie').val();
		//atrapar el id y pasarlo como parametro al combo
		$.post(baseurl + "Administrador/ComboMascota/getRaza",
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
