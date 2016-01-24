<?php

require_once __DIR__."/../bootstrap.php";

/**
* 
*/
class TodoReducer
{
	static $dm;
	static function validate($source, $validation){
		$errors = [];
		foreach ($validation as $v) {
			if(isset($source->$v)){

			} else {
				$errors[] = $v . " cant be empty";
			}
		}
		return $errors;
	}
	static function setDm(&$dm){
		self::$dm = $dm;
	}
	static function addTodo($data){
		$data = json_decode($data);
		$validator = self::validate($data, ['name']);
		if(count($validator) > 0) return ['error'=> $validator];

		$newTodo = new \Documents\Todo($data);
		self::$dm->persist($newTodo);
		self::$dm->flush();
		return $newTodo->toArray();
	}
	static function listTodo(){
		$todos = self::$dm->getRepository('Documents\Todo')->findAll();
		$found = [];
		foreach ($todos as $todo) {
			$found[] = $todo->toArray();
		}
		return $found;
	}
	static function deleteTodo($data){
		$data = json_decode($data);
		$validator = self::validate($data, ['id']);
		if(count($validator) > 0) return ['error'=> $validator];

		$todo = self::$dm->getRepository('Documents\Todo')->findOneBy(['id'=> $data->id]);
		$newTodo = new \Documents\Todo($data);
		self::$dm->remove($todo);
		self::$dm->flush();
		return ['status'=> 'ok'];
	}
}