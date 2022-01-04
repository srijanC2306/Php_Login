<?php

$app->post('/login', function ( $request,  $response, $args) {
     

    require_once __DIR__ .'/../bootstrap/dbconnection.php';

    $output = array();
    $requestData=array();


    $requestData['uid'] = $request->getParsedBody()['uid'];
    $requestData['name'] = $request->getParsedBody()['name'];
    $requestData['email'] = $request->getParsedBody()['email'];
    $requestData['profileUrl'] = $request->getParsedBody()['profileUrl'];
    $requestData['coverUrl'] = $request->getParsedBody()['coverUrl'];
    $requestData['userToken'] = $request->getParsedBody()['userToken'];

    
     $response->getBody()->write("$requestData");
//    print_r($requestData);
    return $response;
});

?>