<?php
    // Create a function that takes in a array so that we can style it using HTML
    function dd($value) {
        echo "<pre>";
        die(var_dump($value));
        echo "</pre>";
    }

    // Age checking function
    // function age($age) {
    //     if($age >= 21) {
    //         echo "You can enter the club.";
    //     }else {
    //         echo "You are NOT old enough to enter the club.";
    //     }
    // }

    function age($age) {
        return $age >= 21 ? "You can enter the club." : "You are NOT old enough to enter the club.";
    }

