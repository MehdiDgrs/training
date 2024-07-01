<?php

namespace StringFormatter;

class StringFormatter
{
    public static function format($text)
    {
        return $text .' ' .'Company';
    }


}

print_r(StringFormatter::format('Feedier'));