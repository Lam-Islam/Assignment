<?php

$strings = ["Hello", "World", "PHP", "Programming"];

$vowels = "/[aeiou]/i";

foreach ($strings as $strings) {
    // echo $strings . "\n";

    $vowelsCount = preg_match_all($vowels, $strings);

    // echo $vowelsCount. " /n";

    $revStrings = strrev($strings);

    // echo $revStrings . "/n";

    echo "Original String: {$strings}, Vowel Count: {$vowelsCount}, Reversed String: {$revStrings}\n";
}
