<?php

class Connection
{
    // so we will call it using Connection::make()
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=todo', 'root', 'Mido--bel055');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}