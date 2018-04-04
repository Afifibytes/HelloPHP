<?php
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
// refactoring our code by making the dependencies separated then injecting it
$pdo = Connection::make();
// this is called dependency injection
$query = new QueryBuilder($pdo);

// or
$query = new QueryBuilder(
    Connection::make()
);