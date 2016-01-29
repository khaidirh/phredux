<?php

function validate($source, $validation){
	$errors = [];
	foreach ($validation as $v) {
		if(isset($source->$v)){

		} else {
			$errors[] = $v . " cant be empty";
		}
	}
	return $errors;
}