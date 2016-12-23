<!doctype html>
<html>
<head>
	<title>Crud simples</title>
	<meta charset="utf-8">
	<!--só p estilizar--><script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/angular-route.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body ng-app="crud">
<h1>Crud simples</h1>

<nav>
	<ul>
		<li ng-class="{ active: activetab == '/'}"><a href='/' title="Lorum ipsum dolor sit amet">Home</a></li>
		<li ng-class="{ active: activetab == '/add'}"><a href='/add' title="Aliquam tincidunt mauris eu risus">New</a></li>

	</ul>
</nav>



<div ng-view ></div>

<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="controllers/controllers.js"></script>

<footer>
<p>Created by <a href="https://github.com/rodrigorssa">Me.</a></p>
</footer>
</body>
</html>