<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <link rel="stylesheet" href="index.css">
       <title>Hello World</title>
   </head>
   <body>
        <div class="container test flex-column">

            <?php 
                $name = 'Peter';
                $age = 41;
                $job_title = 'Fullstack Developer';
                echo "<h1>$name</h1>\n";
                echo "<br>";
                echo "hi, my is $name, and I am $age, and I work as a $job_title <br>";
            
                $name_array=["Mark", "John", "Georg", "Lisa"];
                echo "the third player in the team is $name_array[2]";
            
            ?>
        </div>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

   </body>
</html>