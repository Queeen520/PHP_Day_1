<?php 
/*

Define an associative array and output array elements on the screen. 
Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

Transform this code into a solution done with multidimensional arrays to track different properties 
of the characters. (hint: in order to output nicely (user friendly) your solutions on the browser 
you will need the HTML tags for it).  

*/

$simpsons = [
    "cartoon_name" => "The Simpsons",
    "creator" => "Matthew „Matt“ Groening",
    "release_year" => 1989,
    "characters" => array(
        "mom" => "Marge Simpson", 
        "dad" => "Homer Simpson", 
        "son" => "Bart Simpson", 
        "daughter" => "Lisa Simpson")
];

$simpsons["official_website"] = "https://TheSimpsons.com"; #adding a new value

$pulp_fiction = [
    "creator" => "Quentin Tarantino",
    "release_year" => 1994,
    "FSK" => 16,
    "characters" => array(
        "Vincent Vega" => "John Travolta", 
        "Jules Winnfield" => "Samuel L. Jackson",
        "Mia Wallace" => "Uma Thurman",
        "Butch" => "Bruce Willis",
        "Marsellus Wallace" => "Ving Rhames"
    )
];

$game_characters = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

echo "<pre>";
print_r($pulp_fiction); 
echo "</pre>";

echo "<pre>";
echo $pulp_fiction["characters"]["Vincent Vega"]; 
echo "</pre>";

?>

</body>
</html>