<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Advanced</title>
</head>
<body>
    <?php
    $popculture =[
        "Mickey Mouse" => [
            "Producer" => "Disney",
            "Style" => "Western Cartoon",
            "First Appearance"  => "Steamboat Willy"
        ],
        "Super Mario" => [
            "Producer" => "Nintendo",
            "Style" => "Westernized",
            "First Appearance" => "Donkey Kong, as Jump Man"
        ],
        "Son Goku" =>[
            "Producer" => "Akira Toriyama",
            "Style" => "Anime, typical Toriyama style",
            "First Appearance" =>"Dragonball"
        ],
        "Pikachu" => [
            "Producer" => "Nintendo/Gamefreak",
            "Style" => "Anime",
            "First Appearance" => "Videogame Poket Monster, PokeMon"
        ]
        ];
    // echo "Mickey Mouse by " . $popculture['Mickey Mouse']['Producer'];
    echo "
    <div class='containerfluid d-flex'>
       
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>Mickey Mouse</h5>
                <p class='card-text'>
                    <ul>
                        <li>  by {$popculture['Mickey Mouse']['Producer']}</li>
                        <li>  Style {$popculture['Mickey Mouse']['Style']}</li>
                        <li>  First Appearance {$popculture['Mickey Mouse']['First Appearance']}</li>
                    </ul>
                </p>
            </div>
        </div> 
        
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>Super Mario</h5>
                <p class='card-text'>
                <ul>
                    <li>  by {$popculture['Super Mario']['Producer']}</li>
                    <li>  Style {$popculture['Super Mario']['Style']}</li>
                    <li>  First Appearance {$popculture['Super Mario']['First Appearance']}</li>
                </ul>
                </p>
            </div>
        </div>

        <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'>Son Goku</h5>
            <p class='card-text'>
                <ul>
                    <li>  by {$popculture['Son Goku']['Producer']}</li>
                    <li>  Style {$popculture['Son Goku']['Style']}</li>
                    <li>  First Appearance {$popculture['Son Goku']['First Appearance']}</li>
                </ul>
            </p>
        </div>
        </div>
        <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'>Pikachu</h5>
            <p class='card-text'>
                <ul>
                    <li>  by {$popculture['Pikachu']['Producer']}</li>
                    <li>  Style {$popculture['Pikachu']['Style']}</li>
                    <li>  First Appearance {$popculture['Pikachu']['First Appearance']}</li>
                </ul>
            </p>
        </div>
        </div>
    </div>"

    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>