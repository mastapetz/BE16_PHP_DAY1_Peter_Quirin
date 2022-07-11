
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Car Rental</title>
       <style>
            span{
                width:fit-content;
            }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
   </head>
   <body>
        <div class="container">
        <h1 class="mb-5">Car Rental </h1>

        <h2 class="mb-3"> Available cars: </h2>

       <?php 
            $cars = [
                ["availability"=>true, "model"=>"Supercar", "price"=>99, "location"=>"West"],
                ["availability"=>false, "model"=>"Hypercar", "price"=>129, "location"=>"East"],
                ["availability"=>false, "model"=>"Megacar", "price"=>12, "location"=>"East-East"],
                ["availability"=>true, "model"=>"Carcar", "price"=>201, "location"=>"North-West"],
                ["availability"=>true, "model"=>"Starcar", "price"=>499, "location"=>"South"]
            ];
            
            echo "<div class='row row-cols-3 g-5'>";

            foreach($cars as $car){
                echo "<div class='col'> <div class='d-flex flex-column'>";
                
                echo "<h3>".$car["model"]."</h3>";
                echo "<div>Price: ".$car["price"]."</div>";
                echo "<div>Location: ".$car["location"]."</div>";

                if($car["availability"]) echo "<span class='bg-success p-1 text-light'>Available!</span>";
                else echo "<span class='bg-danger p-1 text-light'>Not available!</span>";

                echo "</div></div>";
            }

            echo "</div>";

       ?>
       </div>
   </body>
</html>