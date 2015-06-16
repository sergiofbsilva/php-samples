var app = angular.module('plunker', []);

app.controller('MainCtrl', function($scope, $http, $rootScope) {
  $rootScope.ordini = [{ id : 1, product: "bananas", quantity: 2}, { id : 2, product: "pizza", quantity: 3}];
  
  $scope.submit = function() {
    var res = $http.post("order.php?customer=Antonio&date=01/08/2015", $rootScope.ordini);
    res.success(function(data, status, headers, config) {
			alert(data);
		});
		res.error(function(data, status, headers, config) {
			alert( "failure message: " + JSON.stringify({data: data}));
		});
  };
});