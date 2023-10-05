<?php

    $selectOption = $_POST['choose'];

    // echo $selectOption;
    if($selectOption == 'learner'){
        // echo $selectOption;
        // echo "Hi learner";
        header('location: learner.php');
    }else if($selectOption == 'leader'){
        // echo $selectOption;
        // echo "hi leader";
        header('location: leader.php');
    }else{
        header('location: index.php');
    }

?>