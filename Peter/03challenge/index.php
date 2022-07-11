<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Car Rental Agency</title>
</head>
<body>
<?php
    $cars =[
      ["availability"=>true, "model"=> "Small", "price" => 69, "location" => "Vienna"],  
      ["availability"=>true, "model"=> "Karrot", "price" => 9001, "location" => "Ring Central"],  
      ["availability"=>false, "model"=> "Lunch", "price" => 8008135, "location" => "Far Far away"],  
      ["availability"=>true, "model"=> "Turtle", "price" => 420, "location" => "Kame Hut"],  
      ["availability"=>false, "model"=> "Teacan", "price" => 3537, "location" => "Far Away"],  
      ["availability"=>true, "model"=> "Tiger", "price" => 200, "location" => "Khazan"]  
    ];
    echo "<div class='row row-cols-lg-3 row-cols-md-6 row-cols-xm-12'>";
    
    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[0]['model']} </h1><br>";
    echo "<p>Price: {$cars[0]['price']} </p>";
    echo "<p>Location:{$cars[0]['location']} </p>";
        if($cars[0]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[1]['model']} </h1><br>";
    echo "<p>Price: {$cars[1]['price']} </p>";
    echo "<p>Location:{$cars[1]['location']} </p>";
        if($cars[1]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[2]['model']} </h1><br>";
    echo "<p>Price: {$cars[2]['price']} </p>";
    echo "<p>Location:{$cars[2]['location']} </p>";
        if($cars[2]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[3]['model']} </h1><br>";
    echo "<p>Price: {$cars[3]['price']} </p>";
    echo "<p>Location:{$cars[3]['location']} </p>";
        if($cars[3]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[4]['model']} </h1><br>";
    echo "<p>Price: {$cars[4]['price']} </p>";
    echo "<p>Location:{$cars[4]['location']} </p>";
        if($cars[4]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "<div class='col d-flex flex-column'>";
    echo "<h1>Model: {$cars[5]['model']} </h1><br>";
    echo "<p>Price: {$cars[5]['price']} </p>";
    echo "<p>Location:{$cars[5]['location']} </p>";
        if($cars[5]['availability']) echo "<span class='bg-success'>Available</span>";    
        else echo "<span class='bg-danger'>NOT Available</span>";
    echo "</div>";

    echo "</div>";
    



?>
<div class="row"></div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>