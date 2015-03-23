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

     var valid_char_patern = /[!#￥@$%&()?<>\"\'\/\\、。，“”:;,.`~\^\*||]+/;
     var email_char_patern = /[!#￥$%&()?<>\"\'\/\\、。，“”:;,`~\^\*||]+/;
     if (valid_char_patern.test($('#name').val())) {
         // $('#name').requestFocus();
         alert('User name contain unsupported char!');
         return;
     }

     var email_patern = new RegExp('([0-9a-zA-Z]+[.]*[0-9a-zA-Z]+)@([0-9a-zA-Z]+[.]+[0-9a-zA-Z]+)');
     if (email_char_patern.test($('#email').val())) {
         // $('#name').requestFocus();
         alert('User email contain unsupported char!');
         return;
     }
     if (!email_patern.test($('#email').val())) {
         // $('#email').requestFocus();
         alert('Email is not correct!');
         return;
     }

     var pwd_char_patern=/[\\]+/;
     if (pwd_char_patern.test($('#pwd').val())) {
         // $('#pwd').requestFocus();
         alert('Password contain unsupported char!');
         return;
     }     
     
     var pwd_val = $('#pwd').val();
     var confirm_pwd_val = $('#confirm_pwd').val();
     var name_val = $('#name').val();
     var email_val = $('#email').val();


     if (pwd_val.trim() === confirm_pwd_val.trim()) {
         email_val = email_val.trim();
         name_val = name_val.trim();
         pwd_val = pwd_val.trim();
         // location.href = 'register.php';
         $.post('register.php', {
             name: name_val,
             pwd: pwd_val,
             email: email_val
         }, function(data, textStatus, xhr) {
             /*optional stuff to do after success */
             console.log("data" + data);
             console.log("textStatus" + textStatus);
             console.log("\nxhr" + xhr);
         });
     } else {
         // $('confirm_pwd').requestFocus();
         alert('Confirm password is not the same !');
         return;
     }
 });
 

 $('#login').click(function() {
	var name_val = $('#name').val();
	var pwd_val = $('#pwd').val();
	if (name_val.trim() === '') {
		alert('please input user name');
		return;
	}
	if (pwd_val.trim() === '') {
		alert('please input user password');
		return;
	}
});
