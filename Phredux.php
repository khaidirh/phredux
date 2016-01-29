<?php

function Phredux($bearer){
	try {
		echo json_encode(Router($bearer));
	} catch (Exception $e) {
		echo json_encode(['message' => $e->getMessage()]);
	}
}