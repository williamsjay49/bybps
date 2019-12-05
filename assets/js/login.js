$(document).ready(function(){

	var username    = "";
	var password = "";

	// === Username Validations ===
	$("#login-username").focusout(function(){
		var username_store = $.trim($("#login-username").val());
		if(username_store.length == ""){
			$("#login-username").addClass("border-red");
			// $("#login-username").removeClass("border-green");
			// $(".login-username-error").html("username is required!");
			username = "";
		}else{
			// $("#login-username").addClass("border-green");
			$("#login-username").removeClass("border-red");
			// $(".login-username-error").html("");
			username = username_store;
		}
	})//close Username validations

    // === Password Validations ===
	$("#login-password").focusout(function(){
		var password_store = $.trim($("#login-password").val());
		if(password_store.length == ""){
			$("#login-password").addClass("border-red");
			// $("#login-password").removeClass("border-green");
			// $(".login-password-error").html("Password is required!");
			password = "";
		}else{
			// $("#login-password").addClass("border-green");
			$("#login-password").removeClass("border-red");
			// $(".login-password-error").html("");
			password = password_store;
		}
});//Password validation close


	// === Submit the login form ===
	$("#login-submit").click(function(){
		if(username.length == ""){
		    $("#login-username").addClass("border-red");
			// $("#login-username").removeClass("border-green");
			// $(".login-username-error").html("Username is required!");
			username = "";	
		}
		if(password.length == ""){
		    $("#login-password").addClass("border-red");
			// $("#login-password").removeClass("border-green");
			// $(".login-password-error").html("Password is required!");
			password = "";	
		}
		if(password.length != "" && username.length != ""){
			$.ajax({
				type : 'POST',
				url  : 'ajax/login_ajax.php?login_form=true',
				data : $("#login-submit-form").serialize(),
				dataType : "JSON",
				success : function(feedback){
					if(feedback['error'] == 'success'){
						$(".login-error").html("");
						// $("#login-password").addClass("border-green");
						// $("#login-username").addClass("border-green");
						$("#login-password").removeClass("border-red");
						$("#login-username").removeClass("border-red");
						// $(".login-error").addClass("login-progress");
						setTimeout(function(){
                          location = feedback['msg'];
						},2000);
						
					}else if(feedback['error'] == 'no_password'){
						$("#login-password").addClass("border-red");
						// $("#login-password").removeClass("border-green");
						$(".login-error").html(feedback['msg']);
					}else if(feedback['error'] == 'no_username'){
						// $("#login-username").removeClass("border-green");
						$("#login-username").addClass("border-red");
						$(".login-error").html(feedback['msg']);
					}
				}
			})
		}
	})

});