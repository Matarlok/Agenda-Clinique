
$(document).ready(function () {

		/**-- OnClick on id "pop_newUser" toggle modal function to visible ----------------------------------------------**/
		$('#pop_newUser').click(function() {
			$('#newUser').modal('toggle');
		});

        /**-- OnClick on id "pop_newUser" toggle modal function to visible ----------------------------------------------**/
        $('#pop_login').click(function() {
            $('#login').modal('toggle');
        });


//--- FORM CHECK FUNCTION -----------------------------------------------------------------------------------------------**/
	$("#formSubmit").click(function(){

		/**-- if any field is empty show error message ------------------------------------------------------------------**/
		if ( ($("#inputName").val() == "" || $("#inputTitle").val() == "" || $("#inputID").val() == "" || $("#inputTitle").val() == "-- Selection titre --") ){
			$("#errorMessage").removeClass("hidden");
		} else {
			$("#errorMessage").addClass("hidden");
		}


		/**-- if everything is in order show success message ------------------------------------------------------------**/
        if ( ($("#inputName").val() != "" && $("#inputTitle").val() != "" && $("#inputID").val() != "" && $("#inputTitle").val() != "-- Selection titre --") ){
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

        /**-- if title field is empty highlight ID input field -------------------------------------------------------------*/
        if ($("#inputTitle").val() == "-- Selection titre --"){
            $("#titleField").addClass("has-error");
        } else {
            $("#titleField").removeClass("has-error");
        }

	});
});