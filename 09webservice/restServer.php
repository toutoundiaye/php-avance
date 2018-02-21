<?php
//il faudrait une réécriture d'uri
//afin d'envoyer les requêtes sur le vrai nom de la ressource
header('Content-type:text/json');

$url = $_GET['url'] ?? null;

if(!$url){
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'you must define a resource'
    ]);
    die;
}

function postList()
{
    return ['apple','banane','strawberry'];
}

function postAdd() 
{
    return ['Votre article a bien été ajouté'];
}

function postShow($id) 
{
    return ['Voici votre article '.$id];
}

$availableResources = [
    '/blog/post' => [
        'GET' => 'postList'
    ],
    '/blog/post/([^/]+)' => [
        'GET' => 'postShow',
        'POST' => 'postAdd'
    ],
];

$routeFound = null;
$args = null;

foreach($availableResources as $configRoute => $config ) {
    if (preg_match('#^'.$configRoute.'$#', $url, $matches)){
        //var_dump($matches);
        if (count($matches) > 0) {
          $routeFound = $configRoute; 
          $args = array_slice($matches, 1);
          break;
        } 
    }
}
if(!$routeFound){
    http_response_code(404);
    echo json_encode([
        'status' => 'error',
        'message' => 'defined resource is unknown'
    ]);
    die;
}

if (!key_exists($_SERVER['REQUEST_METHOD'], $availableResources[$routeFound])){
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'this method is not available'
    ]);
    die;
}

$action = $availableResources[$routeFound][$_SERVER['REQUEST_METHOD']];
$data = call_user_func_array($action, $args);
echo json_encode($data);