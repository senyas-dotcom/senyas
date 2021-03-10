var socket = io.connect('http://cneas.test:8080');
var hashpw;
var charset;
var recovery_email;

socket.on('connect', function () {
    console.log("connected to socket-acct-recovery");
});


$('#submit').on('click', function(){

  var length = 6,
        charset = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789",
        hashpw = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        hashpw += charset.charAt(Math.random() * n);
        }
  var recovery_email = $('#emailadd').val();
  var username = $('#username').val();

  $('#password').val(hashpw);

  if (recovery_email != "" && username != "") {
    console.log($('#password').val());
    console.log("==================== ===");
    console.log(recovery_email);
    console.log(username);
    var acc = {
         username : username,
         email : recovery_email,
     };

    socket.emit('check_acc', acc);
  }else {
    $("#submit3").trigger("click");
  }

});


socket.on('result_check_acc', function(data){
  console.log(data.length);
  if (data.length > 0) {
    Email.send({
        SecureToken : "c29382b3-2aff-4a7e-8d50-b8a96c236d54",
        To : 'kuro03708@gmail.com',
        From : "famysenyas@gmail.com",
        Subject : "Account Recovery",
        Body : "<p>Your temporary password is</p><br><h1 style='color: green'>"+$('#password').val()+"</h1>"
    });

    swal({
    title: "Please check your email!",
    icon: "success",
    button: 'Ok',
    timer: 1000,
  }).then(function(){
     $("#submit2").trigger("click");
  });
}else {
  swal({
  title: "Username  or email not found!",
  icon: "info",
  button: 'Ok',
  timer: 1000,
  });
}

});
