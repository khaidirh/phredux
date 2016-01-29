<?php

header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
header('X-Powered-By: Redux Routing in PHP');
// Bootstrap
require_once './bootstrap.php';
require_once './utils/validate.php';
// Reducers
require_once './reducers/HelloReducer.php';
require_once './reducers/TodoReducer.php';

function Router($action){
	switch ($action['type']) {
		case 'HELLO_WORLD':
			return helloWorld($action['data']);
		case 'ADD_TODO':
			return addTodo($action['data']);
		case 'LIST_TODO':
			return listTodo($action['data']);
		case 'DELETE_TODO':
			return deleteTodo($action['data']);
		case 'COMPLETE_TODO':
			return completeTodo($action['data']);
		default:
			return $action;
	}
}

try {
	echo json_encode(Router($_POST));
} catch (Exception $e) {
	echo json_encode(['message' => $e->getMessage()]);
}
?>