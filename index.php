<?php
echo "hello";
require 'Task.php';
require 'functions.php';
$tasks = fetchAllTasks();
require 'index.view.php';
