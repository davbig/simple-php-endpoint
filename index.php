<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"));

$answer = '';

if(!empty($data->answer)) {
	$answer = $data->answer;
}


$response = json_encode([
	'success' => true, 
	'data' => $answer
]);

echo $response;


// Frontend Example:
// 
// fetch('http://XXXXXXXX.de', {
//   method: 'POST', 
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify({
//     answer: 2,
//   })
// })
// .then(res => res.json())
// .then(res => console.log(res));
