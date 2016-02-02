<?php

function Router($action){
	switch ($action['type']) {
		case 'HELLO_WORLD':
			return helloWorld($action);
		case 'ADD_TODO':
			return addTodo($action);
		case 'LIST_TODO':
			return listTodo($action);
		case 'DELETE_TODO':
			return deleteTodo($action);
		case 'COMPLETE_TODO':
			return completeTodo($action);
		default:
			return $action;
	}
}
