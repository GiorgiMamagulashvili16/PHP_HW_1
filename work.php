<?php

get_numbers();

function get_numbers()
{
    echo "first num: ";
    $number_first = readline();
    echo "second num: ";
    $number_second = readline();
    check_numbers($number_first, $number_second);
}

function check_numbers($number_first, $number_second)
{
    if ($number_first == 0 || $number_second == 0) {
        exit();
    }
    if ($number_first > 100 || $number_first < 0 || $number_second > 100 || $number_second < 0) {
        echo "incorrect numbers, please enter again \n";
    } else {
        $result = $number_first * $number_second;
        echo "result is $result \n";
    }
    get_numbers();
}

?>