<?php

function generateStory($singular_noun, $verb, $color) {
    $story = "\nThe ${singular_noun}s are lovely, $color and deep.\nBut I have promises to keep,\nAnd miles to go before I $verb,\nAnd miles to go before I $verb.\n";
    return $story;
}