<?php

function addTodo($action){
	$action['data'] = json_decode($action['data']);
	$dm = DocumentManager();
	$validator = validate($action['data'], ['name']);
	if(count($validator) > 0) return ['error'=> $validator];

	$newTodo = new \Documents\Todo($action['data']);
	$dm->persist($newTodo);
	$dm->flush();
	return $newTodo->toArray();
}

function listTodo(){
	$dm = DocumentManager();
	$todos = $dm->getRepository('Documents\Todo')->findAll();
	$found = [];
	foreach ($todos as $todo) {
		$found[] = $todo->toArray();
	}
	return $found;
}

function deleteTodo($action){
	$action['data'] = json_decode($action['data']);
	$validator = validate($action['data'], ['id']);
	if(count($validator) > 0) return ['error'=> $validator];

	$dm = DocumentManager();
	$todo = $dm->getRepository('Documents\Todo')->findOneBy(['id'=> $action['data']->id]);
	$newTodo = new \Documents\Todo($action['data']);
	$dm->remove($todo);
	$dm->flush();
	return ['status'=> 'ok'];
}