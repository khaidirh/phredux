<?php

function addTodo($data){
	$data = json_decode($data);
	$dm = initDM();
	$validator = validate($data, ['name']);
	if(count($validator) > 0) return ['error'=> $validator];

	$newTodo = new \Documents\Todo($data);
	$dm->persist($newTodo);
	$dm->flush();
	return $newTodo->toArray();
}

function listTodo(){
	$dm = initDM();
	$todos = $dm->getRepository('Documents\Todo')->findAll();
	$found = [];
	foreach ($todos as $todo) {
		$found[] = $todo->toArray();
	}
	return $found;
}

function deleteTodo($data){
	$data = json_decode($data);
	$validator = validate($data, ['id']);
	if(count($validator) > 0) return ['error'=> $validator];

	$dm = initDM();
	$todo = $dm->getRepository('Documents\Todo')->findOneBy(['id'=> $data->id]);
	$newTodo = new \Documents\Todo($data);
	$dm->remove($todo);
	$dm->flush();
	return ['status'=> 'ok'];
}