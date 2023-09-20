<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skip Multiples of 5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container pt-5">

<div class="row mb-5">
    <div class="col-auto">
        <a class="btn btn-primary" href="even_number.php">Task1</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-success" href="skip_multiple_5.php">Task2</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-primary" href="break_condition.php">Task3</a>
    </div>
    <div class="col-auto">
        <a class="btn btn-primary" href="fibonacci_using_function.php">Task4</a>
    </div>      
</div>

<h1 class="h2 mb-5">Task 2: Skip Multiples of 5</h1>

<?php
    $temp = "";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 5 == 0) {        
            continue;
        }
        $temp .= $i.", ";
    }

    echo rtrim($temp, ", ");
?>



</div>

</body>
</html>