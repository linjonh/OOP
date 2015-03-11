 $("#register").click(function() {
     if ($('#name').attr('value') === '') {
         alert('name isEmpty');
         // $('#name').requestFocus();
         return;
     }
     if ($('#email').val() === '') {
         alert('email isEmpty');
         // $('#email').requestFocus();
         return;
     }
     if ($('#pwd').val() === '') {

         // $('#pwd').requestFocus();
         alert('pwd isEmpty');
         return;
     }
     if ($('#confirm_pwd').val() === '') {
         // $('#confirm_pwd').requestFocus();
         alert('confirm_pwd isEmpty');
         return;
     }

     var valid_char_patern = new RegExp("^[!@$%^&*()?/<>\\~`{}\[\]]",g);
     if (valid_char_patern.match($('name').val())) {
         // $('#name').requestFocus();
         alert('User name contain unsupported char!');
         return;
     }

     var email_patern = new RegExp('[0-1a-zA-Z]+[.]*[0-1a-zA-Z]+@[0-1a-zA-Z]+[.0-1a-zA-Z]+');
     if (!email_patern.match($('#email').val())) {
         // $('#email').requestFocus();
         alert('Email is not correct!');
         return;
     }

     if (valid_char_patern.match($('pwd').val())) {
         $('#pwd').requestFocus();
         alert('Password contain unsupported char!');
         return;
     }

     var pwd_val = $('#pwd').val();
     var confirm_pwd_val = $('confirm_pwd').val();

     if (pwd_val === confirm_pwd_val) {
         // location.href = 'register.php';
         $.post('register.php', {name: $('name').val(),pwd:pwd_val,email:$('#email').val()}, function(data, textStatus, xhr) {
             /*optional stuff to do after success */
             console.log("data"+data);
             console.log("textStatus"+textStatus);
             console.log("\nxhr"+xhr);
         });
     } else {
         $('confirm_pwd').requestFocus();
         alert('Confirm password is not the same !');
         return;
     }
 });
