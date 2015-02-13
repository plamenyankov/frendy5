var express =   require('express'),
    http =      require('http'),
    server =    http.createServer(app);

var app = express();

const redis =   require('redis');
const io =      require('socket.io');
const client =  redis.createClient();

server.listen(3000);
console.log("Listening.....");

io.listen(server).on('connection', function(client) {
    const redisClient = redis.createClient();

    redisClient.subscribe('users.registered');
    redisClient.on('message', function(ch,message) {
        console.log(message);

//        client.emit(channel, message);
    });

    console.log("Redis server running.....");

    client.on("message", function(message) {
        console.log(client.lrange('users',0,-1));

//        client.emit(channel, message);
    });

    client.on('disconnect', function() {
        redisClient.quit();
    });
});
