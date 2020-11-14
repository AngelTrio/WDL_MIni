   $(function() {

         $("#fname_error_message").hide();
         $("#email_error_message").hide();
         $("#message_error_message").hide();

         var error_fname = false;
         var error_email = false;
         var error_message = false;


         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_message").focusout(function() {
            check_message();
         });


         function check_fname() {
            var pattern = /^[a-z A-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }

         function check_message() {
            var message = $("#form_message").val();
            if (message !== '') {
               $("#message_error_message").hide();
               $("#form_message").css("border-bottom","2px solid #34F458");
            } else {
               $("#message_error_message").html("Please enter your Feedbak");
               $("#message_error_message").show();
               $("#form_message").css("border-bottom","2px solid #F90A0A");
               error_message = true;
            }
         }

         $("#registration_form").submit(function() {
            error_fname = false;
            error_email = false;

            check_fname();
            check_email();

            if (error_fname === false && error_email === false) {
               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }

         });
      });