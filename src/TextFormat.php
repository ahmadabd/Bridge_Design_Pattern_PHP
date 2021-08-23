<?php

namespace App;

class TextFormat implements Formatter{
    public function getFormat($text) : string
    {
        return $text;
    }
}