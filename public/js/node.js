var express = require('express'),
    http = require('http'),
    server = http.createServer(app);
var app = express();
const redis = require('redis');
const io = require('socket.io');
const client = redis.createClient();

server.listen(3000);
console.log("Listening.....");

io.listen(server).on('connection', function (client) {
    const redisClient = redis.createClient();
    redisClient.subscribe('users.registered');
    redisClient.subscribe('product.post');

    redisClient.on('message', function (ch, message) {
        if (ch == 'users.registered') {
            console.log(message);
            client.emit("users.registered", message);
        } else if (ch == 'product.post') {
            console.log(message);
            client.emit("product.published", message);
        }
    });
    console.log("Redis server running.....");

});

