
/*---------------------------------------- Onload execute all functions ----------------------------------------*/
$(document).ready(function () {

	/*---------------------------------------- Inscription window ----------------------------------------*/
		/*OnClick on id "pop_inscription" toggle modal function (visible)*/
		$('#pop_inscription').click(function() {
			$('#inscription').modal('toggle');
		});


/*-------------------------------------------------- Form check function --------------------------------------------------*/
	$("#formSubmit").click(function(){


/*------------------------------------------------------------ POPUP MESSAGES ------------------------------------------------------------*/
	/*-------------------- if any field is empty show error message --------------------*/
		if ($("#inputName").val() == "" || $("#inputTitle").val() == ""){
			$("#errorMessage").removeClass("hidden");
		} else {
			$("#errorMessage").addClass("hidden");
		}

	/*-------------------- if password dont match show password error message --------------------*/
        if ($("#inputPassword").val() != $("#inputConfirmPassword").val()){
            $("#errorMessagePassword").removeClass("hidden");
        } else {
            $("#errorMessagePassword").addClass("hidden");
        }

	/*-------------------- if checkBox is not true show checkBox error message --------------------*/
		if ($('#srap').is(":checked") == true){
			$("#scrapSucess").removeClass("hidden");
		} else {
			$("#scrapSucess").addClass("hidden");
		}

	/*-------------------- if everything is in order show success message--------------------*/
        if ( ($("#inputName").val() != "" && $("#inputLastName").val() != "" && $("#inputTitle").val() != "" && $("#inputPassword").val() != "" && $("#inputConfirmPassword").val() != "") && ($("#inputPassword").val() == $("#inputConfirmPassword").val() ) ){
            $("#success").removeClass("hidden");
        } else {
            $("#success").addClass("hidden");
        }


/*------------------------------------------------------------ HIGHLIGHTS ------------------------------------------------------------*/
	/*-------------------- if name is empty highlight name input field --------------------*/
		if ($("#inputName").val() == ""){
			$("#nameField").addClass("has-error");
		} else {
			$("#nameField").removeClass("has-error");
		}

	/*-------------------- if last name is empty highlight name input field --------------------*/
		if ($("#inputLastName").val() == ""){
			$("#lastNameField").addClass("has-error");
		} else {
			$("#lastNameField").removeClass("has-error");
		}

	/*-------------------- if email is empty highlight name input field --------------------*/
		if ($("#inputTitle").val() == ""){
			$("#emailField").addClass("has-error");
		} else {
			$("#emailField").removeClass("has-error");
		}

	/*-------------------- if password is empty highlight name input field --------------------*/
		if ($("#inputPassword").val() == ""){
			$("#passwordField").addClass("has-error");
		} else {
			$("#passwordField").removeClass("has-error");
		}

	/*-------------------- if confirm password is empty highlight name input field --------------------*/
		if ($("#inputConfirmPassword").val() == ""){
			$("#confirmPasswordField").addClass("has-error");
		} else {
			$("#confirmPasswordField").removeClass("has-error");
		}
		console.log();
	});
});