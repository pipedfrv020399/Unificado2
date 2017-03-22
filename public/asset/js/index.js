 $("#login-button").click(function(event){
		 event.preventDefault();

	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});
function error(){
  sweetAlert("Oops...", "Something went wrong!", "error");
}
