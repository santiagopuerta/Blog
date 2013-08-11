'use strict';


describe('Controller: LoginCtrl', function() {
  beforeEach(module('controllers.account'));

  var scope;
  beforeEach(inject(function($controller, $rootScope) {
    scope = $rootScope.$new();
    $controller('LoginCtrl', {$scope: scope});
  }));
});
