<?php
$ary = explode('/', substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?')));
$controllerName = isset($ary[1]) && $ary[1] ? $ary[1] : 'index';
$actionName = isset($ary[2]) && $ary[2] ? $ary[2] : 'index';
$controller = ucfirst($controllerName).'Controller';
if (!class_exists($controller))
{
    echo FrameWorkConstants::FILE_NOT_EXISTS;
    exit;
}
$controller = new $controller();
$controller->runMethod($actionName.'Action');
$controller->getView();
