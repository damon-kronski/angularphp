<!DOCTYPE html>
<html ng-app="todoList">
  <head>
	<?php 
	include "lib/angularphp.php";
	$AngularPhp = new AngularPhp();
	?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <script type="text/javascript" src="lib/angular.min.js"></script>
    <script type="text/javascript" src="lib/app.js"></script>
	<script>
	<?php
	$array = array(
		array(
			'title' => 'Test 1',
			'text' => 'lorem ipsum',
			'date' => '10.13.2014'
			),
		array(
			'title' => 'Test 2',
			'text' => 'lorem ipsum',
			'date' => '10.23.2014'
			)
	);
	
	echo $AngularPhp->ArrayToJs3D($array,"TmpToDoList");
	?>
	
	createApp(TmpToDoList);
	</script>
  </head>
  <body class="container" ng-controller="TodoController as todo">
	<div class="todo-list">
	
		<div class="todo-item" ng-repeat="todoitem in todo.todos">
			<b>{{todoitem.title}}</b>
			<em class="pull-right">{{todoitem.date}}</em>
			<div class="todo-item-text">
				{{todoitem.text}}
			</div>
		</div>
	
	</div>
	
  </body>
</html>
