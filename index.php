<?php

use KodeBlog\Controllers\ItemsController;

require './bootstrap/autoload.php';

$base_url = 'http://localhost:8000/php7sqlsrv/index.php';

if (!isset($_GET['action'])) {
    header("Location: $base_url?action=list");
}

$action = $_GET['action'];

switch ($action) {
case 'list':
    ItemsController::index();
    break;

case 'create':
    ItemsController::create();
    break;

case 'edit':
    $id = $_GET['id'];
    ItemsController::edit($id);
    break;

case 'delete':
    $id = $_GET['id'];
    ItemsController::delete($id);
    break;
}
