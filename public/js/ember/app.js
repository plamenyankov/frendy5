App = Ember.Application.create();

App.Router.reopen({
    rootURL: '/home'
});

App.IndexRoute = Ember.Route.extend({
  model: function() {
    return ['red', 'yellow', 'blue'];
  }
});
