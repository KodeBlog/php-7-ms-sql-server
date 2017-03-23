<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'sqlsrv',
    'host'      => 'localhost',
    'database'  => 'PHP7CrudExample',
    'username'  => 'kr',
    'password'  => 'aise',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'pooling'   => false,
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
