$(document).ready(function() {
	$('#tabeldata').DataTable( {
		retrieve : true,
		"lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]

	} );
} );