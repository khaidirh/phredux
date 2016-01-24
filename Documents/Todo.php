<?php

namespace Documents;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Todo {
	/** @ODM\Id */
	private $id;
	/** @ODM\Field(type="string") */
	private $name;
	/** @ODM\Field(type="boolean") */
	private $completed;
	function __construct($data){
		$this->name = $data->name;
		$this->completed = false;
	}
}

