<?php namespace orm\core\database;

abstract class DataBaseProvider {
    //put your code here
    
    protected $resource;

    public abstract function connect($host, $user, $pass, $dbname, $port);

    public abstract function disconnect();

    public abstract function getErrorNo();

    public abstract function getError($result);

    public abstract function query($q);

    public abstract function numRows($resource);

    public abstract function fetchArray($resource);

    public abstract function isConnected();

    public abstract function escape($var);

    public abstract function getInsertedID($result);

    public abstract function changeDB($database);

    public abstract function setCharset($charset);
    
}
