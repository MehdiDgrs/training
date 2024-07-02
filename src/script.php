<?php

namespace StringFormatter;

class StringFormatter
{
    private $text;
    function __construct ($text) {
        $this->text = $text;
    }
    private function format()
    {
        return $this->text .' ' .'Company';
    }

    public function printFormatedText()
    {
        print_r($this->format());
    }
}

$stringFormatter = new StringFormatter('feedier');
$stringFormatter->printFormatedText();

