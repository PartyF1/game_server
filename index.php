<?php

header("Access-Control-Allow-Origin: *");
error_reporting(-1);

require('application/Application.php');



function router($params) {
    $method = $params["method"];
    if ($method) {
        $app = new Application();
        return $app->login($params);
    } 
    return NULL;
}

function answer($data) {
    if ($data) {
        return array(
            'data' => $data,
            "result" => "ok"
        );
    }
    return array('result' => 'error');
}

echo json_encode(answer(router($_GET)));