var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider, $locationProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'templates/home.html',
      controller: 'MainController'
    })
    .when('/about-us', {
      templateUrl: 'templates/about.html',
      controller: 'AboutController'
    })
    .when('/contact-us', {
      templateUrl: 'templates/contact-us.html',
      controller: 'AboutController'
    })
    .when('/courses', {
      templateUrl: 'templates/all-courses.html',
      controller: 'coursesController'
    })
    .when('/courses/:id', {
      templateUrl: 'templates/course-detail.html',
      controller: 'coursesController'
    })
    .otherwise({
      redirectTo: '/'
    });
    // $locationProvider.html5Mode({
    //     enabled: true,
    //     requireBase: true,
    //     baseHref: '/eduniversity/'
    // });

  // Enable HTML5 mode
  $locationProvider.html5Mode(true);
});


