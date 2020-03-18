<?php
    function fizzBuzz($fizzNum, $buzzNum) {
        $i = 1;
        while ($i <= 100) {
            $output = "";
            if ($i % $fizzNum === 0) {
                $output .= "Fizz";
            }
            if ($i % $buzzNum === 0) {
                $output .= "Buzz";
            }
            if (empty($output)) {
                $output = $i;
            }
            echo "$output\n";
            $i++;
        }
    }
    fizzBuzz(3, 5);
?>
