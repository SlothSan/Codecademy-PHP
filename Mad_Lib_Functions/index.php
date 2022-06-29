<?php

function generateStory($singular_noun, $verb, $color, $distance_unit) {
    $story = "\nThe ${singular_noun}s are lovely, $color and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd $distance_unit to go before I $verb.\n";
    return $story;
}

echo generateStory("book", "finish", "biege", "pages");
echo "\n";
echo generateStory("city", "see", "grey", "miles");
echo "\n";
echo generateStory("sea", "break", "blue", "fathoms");