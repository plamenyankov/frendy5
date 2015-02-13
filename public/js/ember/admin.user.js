App = Ember.Application.create({
    rootElement: '#ember-app'
});

App.Router.reopen({
    rootURL: '/admin/users'
});

App.IndexRoute = Ember.Route.extend({
    model: function() {
        return App.AdminUser.findAll();
    }
});
App.IndexController = Ember.ArrayController.extend({
    sortAscending: false,
    sortProperties: ['id']
});
App.AdminUser = Ember.Object.extend({})
App.AdminUser.reopenClass({
    findAll: function(){
        users=[];
        return $.getJSON('/user')
            .then(function(data){
                data.users.forEach(function(child){
                    console.log(child);
                    users.pushObject(App.AdminUser.create(child))
                })
                return users;
            })
    }
});
var socket = io('http://127.0.0.1:3000');
socket.on('users.registered',function(msg){
    var socketio = JSON.parse(msg);
    users.pushObject(App.AdminUser.create({id:socketio[0],name:socketio[2],email:socketio[1],admin:0}));
});