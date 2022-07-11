
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

       //create an array that has names Mark, John, Georg and Lisa, print the 3rd player on the screen like this: "the third player in the team is 3rd_player".


        $names = ["Mark", "John", "Georg", "Lisa"];
       echo "<h1>The third player in the team is $names[2] </h1>"; ?>
   </body>
</html>