<?php

function helloWorld($action){
	$action['data'] = json_decode($action['data']);
	$name = isset($action['data']->name)? $action['data']->name : "World";
	return ['message' => "Hello ".$name. " !"];
}
?>