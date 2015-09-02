
$(document).ready(function () {

		/**-- OnClick on id "pop_newUser" toggle modal function to visible ----------------------------------------------**/
		$('#pop_newUser').click(function() {
			$('#newUser').modal('toggle');
		});


//--- FORM CHECK FUNCTION -----------------------------------------------------------------------------------------------**/
	$("#formSubmit").click(function(){

		/**-- if any field is empty show error message ------------------------------------------------------------------**/
		if ( ($("#inputName").val() == "" || $("#inputTitle").val() == "" || $("#inputID").val() == "") ){
			$("#errorMessage").removeClass("hidden");
		} else {
			$("#errorMessage").addClass("hidden");
		}

		/**-- if checkBox is not true show checkBox error message -------------------------------------------------------**/
		if ($('#srap').is(":checked") == true) {
			$("#scrapSucess").removeClass("hidden");
		} else {
			$("#scrapSucess").addClass("hidden");
		}

		/**-- if everything is in order show success message ------------------------------------------------------------**/
        if ( ($("#inputName").val() != "" && $("#inputTitle").val() != "" && $("#inputID").val() != "") ){
            $("#success").removeClass("hidden");
        } else {
            $("#success").addClass("hidden");
        }


//--- HIGHLIGHTS --------------------------------------------------------------------------------------------------------**/
		/**-- if name field is empty highlight name input field ---------------------------------------------------------**/
		if ($("#inputName").val() == ""){
			$("#nameField").addClass("has-error");
		} else {
			$("#nameField").removeClass("has-error");
		}

		/**-- if ID field is empty highlight ID input field -------------------------------------------------------------*/
		if ($("#inputID").val() == ""){
			$("#idField").addClass("has-error");
		} else {
			$("#idField").removeClass("has-error");
		}

	});
});