angular.module('myApp')
  .controller('coursesController', function ($scope) {
    // Controller logic here
    $scope.isHomePage = false;

    $scope.courseTemplateName = 'templates/course-content.html'; 
    //$scope.courseTemplateName = 'template.html';
    $scope.getCourseTemplateUrl = function () {
      return $scope.courseTemplateName;
    };


  });
