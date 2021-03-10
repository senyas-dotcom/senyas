
var socket = io.connect('http://cneas.test:8080');

$('#save-resp').on('click', function(){
  var fname = document.getElementById('fname').value;
  var mname = document.getElementById('mname').value;
  var lname = document.getElementById('lname').value;
  var imei = document.getElementById('imei').value;
  var department = document.getElementById('slctdept');
  var depVal=department.options[department.selectedIndex].value;
  var type = document.getElementById('slcttype');
  var typeVal=type.options[type.selectedIndex].value;

  var request = {
      mname : mname,
      lname : lname,
      fname : fname,
      imei  : imei,
      department : depVal,
      st_id : typeVal,
      act_center : 'famy'
  };

  socket.emit('resp_reg', request);

  swal({
  title: "Responder successfully created!",
  icon: "success",
  button: "OK",
  });
});
