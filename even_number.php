<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Even numbers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container pt-5">

<div class="row mb-5">
	<div class="col-auto">
		<a class="btn btn-success" href="even_number.php">Task1</a>
	</div>
	<div class="col-auto">
		<a class="btn btn-primary" href="skip_multiple_5.php">Task2</a>
	</div>
	<div class="col-auto">
		<a class="btn btn-primary" href="break_condition.php">Task3</a>
	</div>
	<div class="col-auto">
		<a class="btn btn-primary" href="fibonacci_using_function.php">Task4</a>
	</div>		
</div>


<h1 class="h2 mb-5">Task 1: Looping with Increment using a Function (even numbers)</h1>


<?php
    // Function to print even numbers using a for loop

    function printEvenNumbersFor($start, $end, $step) {

      
    /*	// Always start with an even number otherwise you will not get results.

    	for ($i = $start; $i <= $end; $i += $step) {
            if ($i % 2 == 0) {
                echo $i.", ";
            }
        }*/


    // It doesn't matter if the start is even or odd but always get an even number result.
        
        $temp="";
        for ($i = $start; $i <= $end; $i += $step) {
           if($i%2==TRUE){
              $temp .= ($i+1).", ";
           }else{
    	    	$temp .= $i.", ";
    	    }
    	}

    	echo rtrim($temp,', ');

    }



    // Function to print even numbers using a while loop

    function printEvenNumbersWhile($start, $end, $step) {
        $i = $start;
        $temp="";
        while ($i <= $end) {
            if ($i % 2 == TRUE) {
                $temp .= ($i+1).", ";
            }else{
            	$temp .= $i.", ";
            }
            $i += $step;
        }

    	echo rtrim($temp,', ');

    }



    // Function to print even numbers using a do-while loop

    function printEvenNumbersDoWhile($start, $end, $step) {
        $i = $start;
        $temp="";
        do {
            if ($i % 2 == TRUE) {
               $temp .= ($i+1).", ";
            }else{
            	$temp .= $i.", ";
            }
            $i += $step;
        } while ($i <= $end);

        echo rtrim($temp,', ');
    }


    $start = 1;
    $end = 20;
    $step = 2;


    echo "Using for loop: ";
    printEvenNumbersFor($start,$end,$step);

    echo "<br>";

    echo "Using while loop: ";
    printEvenNumbersWhile($start,$end,$step);

    echo "<br>";

    echo "Using do-while loop: ";
    printEvenNumbersDoWhile($start,$end,$step);
?>

</div>

</body>
</html>