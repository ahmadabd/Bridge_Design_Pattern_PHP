<?php

namespace App;

class HtmlFormat implements Formatter {
    public function getFormat($text) : string
    {
        return sprintf('<p>%s</p>', $text);
    }
}