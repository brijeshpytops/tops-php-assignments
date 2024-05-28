<!-- Get random values from array -->

<?php
$movies = array(
    "The Shawshank Redemption",
    "The Godfather",
    "The Dark Knight",
    "Pulp Fiction",
    "Schindler's List",
    "The Lord of the Rings: The Return of the King",
    "Fight Club",
    "Forrest Gump",
    "Inception",
    "The Matrix",
    "Goodfellas",
    "The Silence of the Lambs",
    "The Lord of the Rings: The Fellowship of the Ring",
    "The Godfather: Part II",
    "The Green Mile",
    "The Lord of the Rings: The Two Towers",
    "Se7en",
    "Gladiator",
    "The Usual Suspects",
    "The Prestige"
);

$randomMovie = $movies[array_rand($movies)];

$numberOfRandomMoves = 3;
$randomKeys = array_rand($movies, $numberOfRandomMoves);
echo "Random values: \n";

foreach ($randomKeys as $key) {
    echo '- '. $movies[$key] . "\n";
}


?>