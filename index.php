 <?php 
  require_once __DIR__ .'/movie/movie.php';

    $films = [
        [
            'titolo' => 'Harry Potter',
            'genere' => 'fantasy',
            'nomeRegista' => 'Chris Columbus',
            'personaggi' => 'Harry',
        ]
    ];


; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <header></header>

    <main>
        <section>
            <?php foreach ($films as $Hfilm){ 
                $film = new Movie ($Hfilm['titolo'],
                $Hfilm['genere']);
            ?>
            <section>
                <h1><?= $film->getTitolo() ?></h1>
                <p><?= $film->genere ?></p>
            </section>

            <?php } ?>
            
        </section>
    </main>

</body>
</html> 
 