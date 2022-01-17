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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
    <title>Movie</title>
</head>
<body>

    <header>
    <div class="logo">
        <img src="https://lumiere-a.akamaihd.net/v1/images/en_d-plus_lg_r_2x_dc472873.png?region=0,0,1000,320" alt="">
    </div>
    <div class="navbar">
        <span> <i class="fas fa-home"></i> Home</span>
       <span> <i class="fas fa-search"></i> <input type="text" placeholder="cerca">  </span> 
        <span> <i class="fas fa-download"></i> Download</span>
        <span> <i class="fas fa-user-circle"></i> Profilo</span>
    </div>
    </header>
  

<div class="jumbo">
    <img class="wp" src="wallpapersden.com_marvels-eternals_1920x1080.jpg" alt="">
    <img class="logo-et" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/ddc6axw-4bc28e5f-9c77-406d-8b3a-1a36dfc8b37f.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg0NmE5MDg2LThhNDAtNDNlMC1hYTEwLTJmYzdkNmQ3MzczMFwvZGRjNmF4dy00YmMyOGU1Zi05Yzc3LTQwNmQtOGIzYS0xYTM2ZGZjOGIzN2YucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.HQ6yD24od6x32Z8lR6GA3ZZNGVQsPRx7bznoqcTun9g" alt="">
</div>
    <div class="container">

    
        <?php foreach ($movies as $movie):
        $new_movie = new Movie($movie['title']);
        $new_movie->date = $movie['date'];
        $new_movie->author = $movie['author'];
        $new_movie->description = $movie['description'];
        $new_movie->poster = $movie['poster'];
        ?>

        <div class="card">
            <img class="poster" src="<?php echo $new_movie->poster ?>" alt="">
            <div class="info">

                <h2> Titolo: <?php echo $new_movie->title; ?> </h2>
                <h4> Regista: <?php echo $new_movie->author; ?> </h4>
                <h5> Anno: <?php echo $new_movie->date; ?> </h5>
                <p> Descrizione: <?php echo $new_movie->getDescription(60); ?> </p>
                
            </div>
        </div>

        <?php endforeach; ?>

    </div>

</body>
</html>