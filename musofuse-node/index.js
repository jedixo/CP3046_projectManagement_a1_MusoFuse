var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

//variables
var port = 3001;

// connection listener
io.on('connection', function(socket){
	log("client connected");
	
	
	//Disconnect event
	socket.on('disconnect', function(){
		log("client closed");
	});
});

//port listener
http.listen(port, function(){
	console.log('listening on *:' + port);
});

//writes log to log.txt on filesystem and to console
function log(msg) {
	console.log(msg);
}