<?php namespace orm\core\exception;

use Exception;

class CustomBDException extends Exception{
    //put your code here
    
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0) {
        // some code
        // make sure everything is assigned properly
        parent::__construct($message, $code);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction() {
        echo "A custom function for this type of exception\n";
    }

    public function getError() {
        $msg = $this->getMessage();
        Logger::Log($msg);
        return $msg;
    }

    //put your code here
    
}
