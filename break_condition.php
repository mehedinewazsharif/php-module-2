<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Break on Condition</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container pt-5">

<div class="row mb-5">
    <div class="col-auto">
        <a class="btn btn-primary" href="even_number.php">Task1</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-primary" href="skip_multiple_5.php">Task2</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-success" href="break_condition.php">Task3</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-primary" href="fibonacci_using_function.php">Task4</a>
    </div>      
</div>

<h1 class="h2">Task 3: Break on Condition</h1>
<p class="fs-4 mb-5">(Fibonacci number is greater than 100, break out of the loop)</p>
<?php
    function fibonacci($n) {
        if ($n <= 0) return 0;
        if ($n == 1) return 1;
        return fibonacci($n - 1) + fibonacci($n - 2);
    }

    $count = 0;
    $limit = 10;
    $temp  = "";
    for ($i = 0; $count < $limit; $i++) {
        $fib = fibonacci($i);
        
        if ($fib > 100) {
            break; 
        }        
        $temp .= $fib.", ";
        $count++;
    }

    echo rtrim($temp,", ");
?>


</div>

</body>
</html>