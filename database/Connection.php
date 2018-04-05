<?php

class Connection
{
    /**
     * @param $config : configuration array including the dsn, user, password.
     * @return PDO
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['dsn'],
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}