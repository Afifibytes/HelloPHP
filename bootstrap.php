<?php
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';
// refactoring our code by making the dependencies separated then injecting it

$query = new QueryBuilder(
    Connection::make($config['database'])
);