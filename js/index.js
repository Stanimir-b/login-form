
  $(document).ready(function(){
    $('#password').val('');
    $('#email').val('');
     $('#regPassword').val('');
  });
$('#login').click(function(){
  $('.login').show();
  $('.register').hide();
  $('.sendEmail').hide();

});

/*
  $('#reg').click(function(){
    var password=$('#regPassword').val();
  password=password.replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
  var rePassword=$('#rePassword').val();
  rePassword=rePassword.replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
  if (password !== rePassword) {
    if ($('.incorect').length==0) {
    $(document).ready(function(){
        $('.randompad').append("<div class='incorect'>please check password</div>");
      setTimeout(function(){ $('.incorect').remove(); }, 3000);
    });
  }
  }
});
*/

$('#register').click(function(){
  $('.login').hide();
  $('.register').show();
  $('.sendEmail').hide();

});

$('#forgot').click(function(){
  $('.login').hide();
  $('.sendEmail').show();

});
$('#logOut').click(function(){
 sessionStorage.clear();
 $(location).attr('href', 'index.php');
});
$('#logButton').click(function(){
  var password=$('#password').val();
  password=password.replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
  password=CryptoJS.MD5(password).toString();
  var email=$('#email').val();
  email=email.replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
  var result='';
  var oldPassword='';
  
  
/*
  $.ajax({
  dataType: "GET",
  url: "results.json",
  data: "json",
  success: function (data){
  	oldPassword= data.Records[0].password;
  }
}); 
*/

  $.getJSON('results.json', function(data) {
    result= data
  if (result['email']===email&&result['password']=== password) {
  	sessionStorage['visited']=result['email'];
  	$(location).attr('href', 'user.php');
  } else {
    if ($('.incorect').length==0) {
      $('.randompad').append("<div class='incorect'>Incorect password or email</div>");
      setTimeout(function(){ $('.incorect').remove(); }, 3000);
    };
    
  }
 });
 
});




