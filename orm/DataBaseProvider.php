<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataProvider
 *
 * @author Univalle_F
 */
abstract class DataBaseProvider{
    //put your code here
    
    protected $resource;

    public abstract function connect($host, $user, $pass, $dbname, $port);

    public abstract function disconnect();

    public abstract function getErrorNo();

    public abstract function getError();

    public abstract function query($q);

    public abstract function numRows($resource);

    public abstract function fetchArray($resource);

    public abstract function isConnected();

    public abstract function escape($var);

    public abstract function getInsertedID();

    public abstract function changeDB($database);

    public abstract function setCharset($charset);
    
}
