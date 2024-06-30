<?php

namespace Grettings;

class Greetings
{
    public static function sayHello($text)
    {
        return 'Hello ' . $text;
    }


}

print_r(Greetings::sayHello('Feedier'));