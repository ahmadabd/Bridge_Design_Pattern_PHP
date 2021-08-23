<?php

namespace App;

interface Formatter {
    public function getFormat($text) : string;
}