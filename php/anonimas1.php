<?php

// Código anterior a PHP 7
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// Código de PHP 7+
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});