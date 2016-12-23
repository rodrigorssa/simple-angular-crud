var app=angular.module('crud',['ngRoute']);


app.config(function($routeProvider,$locationProvider){

$locationProvider.html5Mode({
    enabled: true,
    requireBase:false
});
	$routeProvider

	.when('/',{
		templateUrl :'angular/views/table.php',
		controller :'indexController'
	})

	.when('/add',{
		templateUrl : 'angular/views/form.php',
		controller : 'dataController'
	})
	.when('/:edit/:id',{
		templateUrl:'../angular/views/form.php',
		controller: 'dataController'
	})
	.when('/delete/:id',{
		controller : 'deleteController'
	})
	.otherwise({redirectTo : '/'});
});