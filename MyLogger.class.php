<?php

class MyLogger
{
    public $standaardtekst = "ipsum";

    function log($message)
    {
        return ($message . $this->standaardtekst);
    }
}

$logger = new MyLogger();
$antwoord = $logger->log("hello  ");
print_r($antwoord);
