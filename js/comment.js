$(document).on("submit", "#comment_form", function(event){
	event.preventDefault();
	var $form = $(this);
 
	var data_form = {
			comment: $("textarea",$form).val()
	}
	if(data_form.comment.length < 5 ){
			$("#msg_error_comment").text("El comentario es muy corto.").show();
			return false;
	}
	comment(auxId, data_form.comment);
});
