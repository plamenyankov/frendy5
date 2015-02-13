App = Ember.Application.create();

App.Router.reopen({
    rootURL: '/admin/users'
});

App.IndexRoute = Ember.Route.extend({
  model: function() {
    return ['red', 'yellow', 'blue'];
  }
});
