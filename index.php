<?php

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

$table = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
$key = array_shift($request)+0;

$folderToLook = __DIR__.'/db/'.$table;

if (!file_exists($folderToLook)) {
    mkdir($folderToLook);
}

if (!$key) {
    $key = mktime();
}
if ($input) {
    $input['id'] = $key;
}


//echo $fileToLook = $folderToLook.'/'.$key.'.json';
 
// create SQL based on HTTP method
switch ($method) {
  case 'GET':
    $result = file_get_contents($fileToLook);
    break;
  case 'PUT':
    file_put_contents($fileToLook, json_encode($input));
    $result = json_encode($input);
    break;
  case 'POST':
    file_put_contents($fileToLook, json_encode($input));
    $result = json_encode($input);
    break;
  case 'DELETE':
    $result = json_encode(array('id' => $key));
    @unlink($fileToLook);
    break;
}
 
if (!$result) {
  http_response_code(404);
  exit;
}

echo $result;
