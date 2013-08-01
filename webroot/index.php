<?php
$action = @$_REQUEST['action'];
$action = $action ? $action : 'list';
$controller = new Controller();
$assginVals = $controller->doAction($action.'Action');
$view = new View($assginVals);
$view->doView($action.'View');

