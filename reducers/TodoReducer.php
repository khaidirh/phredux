<?php

require_once __DIR__."/../bootstrap.php";

/**
* 
*/
class TodoReducer
{
	
	static function addTodo($data){
		$data = json_decode($data);
		$newTodo = new \Documents\Todo($data);
		$dm->persist($newTodo);
		$dm->flush();
		return $newTodo;
	}
}