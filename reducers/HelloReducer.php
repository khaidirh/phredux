<?php

function helloWorld($data){
	$data = json_decode($data);
	$name = isset($data->name)? $data->name : "World";
	return ['message' => "Hello ".$name. " !"];
}
?>