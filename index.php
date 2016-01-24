<?php

header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
header('X-Powered-By: Redux Routing in PHP');
// Bootstrap
require_once './bootstrap.php';
// Reducers
require_once './reducers/HelloReducer.php';
require_once './reducers/TodoReducer.php';

TodoReducer::setDm($dm);

function Router($action){
	switch ($action['type']) {
		case 'HELLO':
			return HelloReducer::name($action['data']);
		case 'ADD_TODO':
			return TodoReducer::addTodo($action['data']);
		case 'LIST_TODO':
			return TodoReducer::listTodo($action['data']);
		case 'DELETE_TODO':
			return TodoReducer::deleteTodo($action['data']);
		case 'COMPLETE_TODO':
			return TodoReducer::completeTodo($action['data']);
		default:
			return $_POST;
	}
}

echo json_encode(Router($_POST));

?>