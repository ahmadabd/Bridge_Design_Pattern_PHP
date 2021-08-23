<?php

namespace App;

class FormatManager implements Formatter{
    public function __construct(private Formatter $allFormats){}

    public function getFormat($text) : string
    {
        return $this->allFormats->getFormat($text);
    }

}