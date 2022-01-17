<?php

   require_once __DIR__ . "/database.php";
   require_once __DIR__ . "/Movie.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>

    <?php foreach ($movies as $movie):
    $new_movie = new Movie($movie['title']);
    $new_movie->date = $movie['date'];
    $new_movie->author = $movie['author'];
    $new_movie->description = $movie['description'];
    $new_movie->poster = $movie['poster'];
    ?>

    <div class="card">
        <img src="<?php echo $new_movie->poster ?>" alt="">
        <h2> <?php echo $new_movie->title; ?> </h2>
        <h4> <?php echo $new_movie->author; ?> </h4>
        <h5> <?php echo $new_movie->date; ?> </h5>
        <p> <?php echo $new_movie->getDescription(60); ?> </p>
    </div>

    <?php endforeach; ?>

</body>
</html>