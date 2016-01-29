<?php

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
