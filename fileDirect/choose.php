<?php

    // echo "Hello Php <br>";
    
    // ECHO "Hello Php <br>";  /* Keywords are not case sensitive */

    // $a = 'Hello';
    // $b = 5;
    // $c = 6.75;
    // $d = 0123;
    // $e = 0x1a;

    // var_dump($a);  /* The var_dump function show the datatype that a variable has */
    // echo "<br>";
    // var_dump($b);
    // echo "<br>";
    // var_dump($c);
    // echo "<br>";
    // var_dump($e);



    $selectedOption = $_POST['choose'];
        
        // Check the value of the selected option and redirect accordingly
        if ($selectedOption === 'learner') {
            header('Location: learner.php');
            exit(); // Terminate the script to ensure the redirect takes effect
        } elseif ($selectedOption === 'leader') {
            header('Location: leader.php');
            exit(); // Terminate the script to ensure the redirect takes effect
        }else{
            header('Location: index.php');
        }

?>