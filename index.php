<?php
echo "hello";
require 'Task.php';

$tasks = [
    new Task("kill your sister"),
    new Task("go hangout as you did nothing, and feel cool!"),
];

require 'index.view.php';
