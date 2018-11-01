$(document).ready(function(){

	$('#guardar').click(function(e){
		e.preventDefault()
		
		updateUser($(this).data('id'));

	});

	$('#guardar-modal').click(function(e){
		e.preventDefault()
		
		updateUser($(this).data('id'));

		$('#modal-update').modal('toggle');

		refreshTabla();

	});




	$(document).on('click', '.edit-user', function(){

		id = $(this).data('id');

		url = '/user/' + id +'/edit';

		$('#modal-update').modal('toggle');

		$.get(url, function(result){
			$.each(result, function(i, v){
				$('#' + i).val(v);
			});

			$('#guardar-modal').attr('data-id', result.id);
		});

	})


	function updateUser(id){
		data = $('#form-update').serialize();

		url = '/user/' + id;

		$.post(url, data, function(result){

			alert(result);

		});
	}

	function refreshTabla(){

		url = document.URL + ' #table';

		$('#content-tabla').load(url);


	}
});
