
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Hello World</title>
       <style>

        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
    </style>
   </head>
   <body>

       <?php 

        /* 
        Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (hint: in order to output nicely (user friendly) your solutions on the browser you will need the HTML tags for it).  
        */

        $array = [
            "Mickey Mouse" => ["name"=>"Mickey Mouse","maker"=>"Disney", "ears"=>"big"],
            "Mario" => ["name"=>"Mario","maker"=>"Nintendo", "ears"=>"hardly"],
            "Golu" => ["name"=>"Goku","maker"=>"Someone", "ears"=>"quite normal"],
            "Pokemon" => ["name"=>"Pokemon","maker"=>"Nintendo", "ears"=>"depends"],
        ];
        echo "<div>";
            foreach($array as $element){
                echo "<h1>".$element['name']."</h1>";
                echo "Maker: ".$element['maker'].", ears: ".$element['ears'];
            }
        echo "</div>";
       
       ?>
   </body>
</html>