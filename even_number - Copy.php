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


<h1 class="mb-5">Task 1: Looping with Increment using a Function</h1>


<?php

// Function to print even numbers using a for loop

function printEvenNumbersFor($start, $end, $step) {

  
/*	// start always even number  
	for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i." ";
        }
    }*/


/*    for ($i = $start; $i <= $end; $i += $step) {
        if (($i+1) % 2 == 0) {
            echo ($i+1)." ";
        }
    }*/


/*    for ($i = $start; $i <= $end; $i += $step) {
        if (($i-1) % 2 == 0) {
            echo ($i+1)." ";
        }
    }*/

    for ($i = $start; $i <= $end; $i += $step) {
       if($i%2==TRUE){
            echo ($i+1)." ";
       }else{
	    	echo $i." ";
	    }
	}
}



// Function to print even numbers using a while loop

function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}



// Function to print even numbers using a do-while loop

function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using for loop: ";
printEvenNumbersFor(1,20,2);

echo "<br>";

echo "Using while loop: ";
printEvenNumbersWhile(2,20,2);

echo "<br>";

echo "Using do-while loop: ";
printEvenNumbersDoWhile(2,20,2);
?>

</div>

</body>
</html>