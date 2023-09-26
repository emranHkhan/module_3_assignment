<?php

$text = "The quick brown fox jumps over the lazy dog";

$modifyText = fn ($text) => str_replace("brown", "red", strtolower($text));

echo $modifyText($text);
