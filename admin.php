<?php
require_once __DIR__.'/public/inc/Loader.php';
require_once __DIR__.'/libs/bootstrap.php';
// Render our view
// $message = 'hello world!';
$bgColor = 'bg-default';
echo $view->render('home/admin.twig', [
'message' => $message,
'bgColor' => $bgColor
]);