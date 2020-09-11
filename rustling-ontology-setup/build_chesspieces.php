<?php

$template= <<<DEMO
{
    "value": "_FILL_",
    "synonyms": []
},

DEMO;

foreach (['a','b','c','d','e','f','g','h'] as $letter) {
    for ($number=1; $number < 9; $number++) {
        echo str_replace("_FILL_", "$letter$number", $template);
    }
}