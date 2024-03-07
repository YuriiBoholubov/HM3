<?php
    $text = file_get_contents('text.txt');
    function format_text($text) {
        $text = preg_replace('/[\s[:punct:][:digit:]]+/u', '', $text);
        $text = str_split(strtolower($text));
        foreach ($text as $num => $value) {
            if ($num % 2 == 0) {
                $text[$num] = strtoupper($value);
            }
        }
        return implode("", $text);
    }
    $textclean=format_text($text);
    echo  $textclean;

