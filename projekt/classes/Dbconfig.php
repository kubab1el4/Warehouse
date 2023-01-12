<?php

namespace projekt\classes;

class Dbconfig
{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    public function __construct()
    {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = 'Goodgame1805!';
        $this -> dbName = 'productbase';
    }
    public function changeDatabase($server, $user, $pass, $db)
    {
        $this -> serverName = $server;
        $this -> userName = $user;
        $this -> passCode = $pass;
        $this -> dbName = $db;
    }
}