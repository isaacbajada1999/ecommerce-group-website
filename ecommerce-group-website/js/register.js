 
      $(function() {
      //hidden error
      $("#username_error").hide();
      $("#email_error").hide();
      $("#password_error").hide();
      $("#retype_password_error").hide();
 

      var error_username = false;
      var error_email = false;
      var error_password = false;
      var error_retype_password = false;
  
      //errors for inputs
      $("#username").focusout(function() {

        check_username();
    
      });

      $("#email").focusout(function() {

        check_email();
    
      });

      $("#password").focusout(function() {

        check_password();
    
  });

      $("#retype_password_input").focusout(function() {

        check_retype_password();
    
  });

    //checking user inputs
    function check_username() {
  
      var username_length = $("#username").val().length;
    
     if(username_length < 5 || username_length > 20) {
      //error message
      $("#username_error").html("5-20 characters required");
      $("#username_error").show();
     error_username = true;
    } else {
      $("#username_error").hide();
    }
  
  }
    //checking email inputs
    function check_email() {

      var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
  
     if(pattern.test($("#email").val())) {
      $("#email_error").hide();
    } else {
      $("#email_error").html("Invalid email address");
      $("#email_error").show();
      error_email = true;
    }
  
  }
    //checking password inputs
    function check_password() {
  
      var password_length = $("#password").val().length;
    
    if(password_length < 8) {
      $("#password_error").html("8 or more characters required");
      $("#password_error").show();
      error_password = true;
    } else if (password_length > 20){
      $("#password_error").html("less than 20 characters required");
      $("#password_error").show();
      error_password = true;
    } else {
      $("#password_error").hide();
    }
  
  }
     //checking if password are the same
     function check_retype_password() {
  
      var password = $("#password").val();
      var retype_password = $("#retype_password_input").val();
    
    if(password !=  retype_password) {
      $("#retype_password_error").html("Passwords don't match");
      $("#retype_password_error").show();
      error_retype_password = true;
    } else {
      $("#retype_password_error").hide();
    }
  
  }

    $("#register_form").submit(function() {
                      
      error_name = false;
      error_email = false;
      error_password = false;
      error_retype_password = false;
                   
      check_username();
      check_password();
      check_retype_password();
      check_email();
    
     if(error_name == false && error_email == false && error_password == false && error_retype_password == false) {
      return true;
    } else {
      return false; 
    }
 

  });
});
