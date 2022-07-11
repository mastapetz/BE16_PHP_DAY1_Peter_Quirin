
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

       // create a couple of variables, name, age, and job title, and after that, you print a message on the screen "hi, my name is NAME, and i am AGE, and i work as a JOB_TITLE"


       $name="Quirin Schneider";
       $age = 99;
       $jobTitle = "sleeper";
       echo "<h1>Hi my name is $name and I am $age and I work as a $jobTitle</h1>"; ?>
   </body>
</html>