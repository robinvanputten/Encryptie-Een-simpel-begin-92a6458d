<?php
function caeser($shift, $string) 
{
    $chars = str_split("abcdefghijklmnopqrstuvwxyz");
    $ciphered_string = "";
    foreach (str_split($string) as $chr) {
        if (in_array($chr, $chars)) {
            $pos = array_search($chr, $chars) + $shift;
            if ($pos > sizeof($chars) - 1) {
                $pos = $pos - sizeof($chars);
            }
            $ciphered_string .= $chars[$pos];
        } else {
            $ciphered_string .= $chr;
        }
    }
    return $ciphered_string;
}

echo caeser($argv[1], $argv[2]) . PHP_EOL;
?>