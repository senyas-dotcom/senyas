var socket = io.connect('http://cneas.test:8080');



socket.on('connect', function(){
  console.log("connected to socket-login");
  socket.emit('check_accounts');
});
