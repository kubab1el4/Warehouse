<?php

class Dbconfig
{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    public function __construct()
    {
        $this -> serverName = 'sql112.epizy.com';
        $this -> userName = 'epiz_32693982';
        $this -> passCode = 'CUAUEkX1j8b5z';
        $this -> dbName = 'epiz_32693982_productbase';
    }
    public function changeDatabase($server, $user, $pass, $db)
    {
        $this -> serverName = $server;
        $this -> userName = $user;
        $this -> passCode = $pass;
        $this -> dbName = $db;
    }
}
