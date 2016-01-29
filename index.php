<?php

header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
header('X-Powered-By: Redux Routing in PHP');
// Router
require_once './Router.php';
// Phredux
require_once './Phredux.php';
// Doctrine
require_once './DocumentManager.php';

// Utility
require_once './utils/validate.php';
// Reducers
require_once './reducers/HelloReducer.php';
require_once './reducers/TodoReducer.php';

Phredux($_POST);
?>