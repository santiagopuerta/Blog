'use strict';


describe('Controller: LoginCtrl', function() {
  beforeEach(module('controllers.accounts'));

  var scope;
  beforeEach(inject(function($controller, $rootScope) {
    scope = $rootScope.$new();
    $controller('LoginCtrl', {$scope: scope});
  }));

  it('Debe poner scope cosas predeterminadas',function(){
    expect(scope.loginInvalido).toBeFalsy();
  });
});
