App = Ember.Application.create({
    rootElement: '#ember-app'
});

App.Router.reopen({
    rootURL: '/admin/products'
});

App.IndexRoute = Ember.Route.extend({
    offset: 0,
    limit: 10,
    queryParams: {
        page: {
            replace: true
        }
    },

    model: function(params) {
        console.log(params);
        return App.AdminProducts.findAll();
    }
});
App.IndexController = Ember.ArrayController.extend({
    queryParams: ['page'],
    page: 1,
    sortAscending: false,
    sortProperties: ['id']
});
App.AdminProducts = Ember.Object.extend({})
App.AdminProducts.reopenClass({
    findAll: function(){
        products=[];
        return $.getJSON('/admin/productsList')
            .then(function(data){
                data.products.forEach(function(child){
                    products.pushObject(App.AdminProducts.create(child))
                })
                return products;
            })
    }
});
var socket = io('http://127.0.0.1:3000');
socket.on('product.published',function(msg){
    var socketio = JSON.parse(msg);
    products.pushObject(App.AdminProducts.create({id:socketio[0],brand:socketio[1],model:socketio[2],price:socketio[3]}));
});