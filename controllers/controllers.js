app.controller('indexController',function($scope,$location,$http){
	$scope.activetab=$location.path();

	function getUsers(){
		$http.get('angular/php/retornausers.php').then(function(res){
			$scope.users=res.data.result;
		},function(res){
			console.log(res);
		});
	}

	getUsers();


	$scope.delete=function(id){

		if(!confirm("Tem certeza?")) return;

		$http.post('angular/php/deleteusers.php',{id : id})
		.then(function success(res){
			alert(res.data.msg);
			window.location="/angular";
		} , function err(res){
			console.log(res);
		});

	}


});

app.controller('dataController',function($scope,$location,$routeParams,$http){

	$scope.activetab=$location.path;
	$scope.data={};

	if($routeParams.edit){

		var id=$routeParams.id;
		$http.post('../angular/php/retornaunico.php',{id : id}).then(function(res){
			console.log(res.data);
			$scope.data.name=res.data.name;
			$scope.data.endereco=res.data.endereco;
			$scope.data.email=res.data.email;
			$scope.data.senha=res.data.senha;
			$scope.data.input=true;
			$scope.data.id=res.data.id;
			
		});
	}
	var action= ($routeParams.edit) ? "../angular/php/inserirdados.php?edit" : "angular/php/inserirdados.php";


	$scope.send= function(data){
		$http.post(action,data).then(function(success){
			$scope.class=success.data.class;
			$scope.msg=success.data.msg;
		}, function(error){
			console.log(error);
		});
	}
	
});
