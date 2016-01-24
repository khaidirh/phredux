<?php

class HelloReducer {
	static function name($data){
		$data = json_decode($data);
		return [message => "Hello ".$data->name."!"];
	}
}

?>