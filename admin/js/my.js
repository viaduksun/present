/*----------------------------
jQuery
------------------------------ */
function checkPasswordMatch() {
	var password = $("#txtNewPassword").val();
	var confirmPassword = $("#txtConfirmPassword").val();
	if (password != confirmPassword) {
		$("#divCheckPasswordMatch").html("Пароль не совпадает!");
		$(".col-sm-12.text-center").addClass("text-danger");
		$('#save').prop('disabled',true);
	} else {
		$("#divCheckPasswordMatch").html("Пароль совпадает.");
		$(".col-sm-12.text-center").removeClass("text-danger");
		$(".col-sm-12.text-center").addClass("text-success");
		$('#save').prop('disabled',false);
	}
}

