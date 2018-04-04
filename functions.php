<?php

/**
 * create a db with a table tasks and with 2 fields
 *  ID => primary key.
 *  Task => varchar (255)
 */
function fetchAllTasks()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=todo', 'root', 'Mido--bel055');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    $statment = $pdo->prepare("SELECT * FROM tasks");
    $statment->execute();
    $tasks = $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
    return $tasks;
}