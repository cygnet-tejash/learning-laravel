var server = require('http').Server();

var io = require('socket.io')(server);

var redis = require('redis');
io.on('connection', function(socket){
    console.log('a user connected');

    var redisClient = redis.createClient();
    redisClient.subscribe('message');
    redisClient.on('message', function(channel, message){
       console.log('new message in queue', channel, message);
       socket.emit(channel, message);
    });

    socket.on('disconnect', function(){
        redisClient.quit();
        console.log('user disconnected');
    });
});

server.listen(3003);