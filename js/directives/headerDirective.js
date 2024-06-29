app.directive('headerDirective', function() {
  return {
    restrict: 'E',
    templateUrl: 'templates/header.html',
    scope: {
      isHomePage: '=?' // Optional two-way binding for the attribute
    },
    controller: function($scope, $attrs) {
      // Check if isHomePage is defined, otherwise default to false
      $scope.isHomePage = angular.isDefined($attrs.isHomePage) ? $scope.isHomePage : false;

      // Use isHomePage in your directive logic
      $scope.showHeader = $scope.isHomePage;
    }
  };
});
