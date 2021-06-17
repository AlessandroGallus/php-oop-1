
<?php

  require_once __DIR__ ."/Movie.php";

  $film_1 = new Movie("Shrek", "210", "Comico");
  $film_2 = new Movie("Shrek 2", "180", "Comico");


  $film_1 ->setPrice("13");
  $film_2 ->setPrice("15");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Films</title>
</head>
<body>
    <h1><?php echo $film_1->getInfoMovies(); ?></h1>
    <h2><?php echo $film_1->getGenre(); ?></h2>
    <br>
    <h1><?php echo $film_2->getInfoMovies(); ?></h1>
    <h2><?php echo $film_2->getGenre(); ?></h2>
</body>
</html>