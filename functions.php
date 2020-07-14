<?php
require('variables.php');
function printName($name) {
    global $firstSentence;

    echo "{$firstSentence} {$name}";
};