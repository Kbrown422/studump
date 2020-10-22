<?php
require_once __DIR__.'/public/inc/Loader.php';
require_once __DIR__.'/libs/bootstrap.php';
// Render our view
// $message = 'hello world!';
$bgColor = 'bg-default';
$footer = true;
echo $view->render('home/admin-dashboard.twig', [
'message' => $message, 
'footer' =>$footer
]);