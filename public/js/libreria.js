
var tabla = function(){
	$("#myTable").DataTable();
}

$(document).ready(function(){
	tabla();
	var options = {
	  valueNames: [ 'nombre', 'valor' ]
	};
	var userList = new List('users', options);
});
