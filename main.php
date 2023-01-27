<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ExerciceXP 1 afficher sans variable   </h1>
<h3>
    <?php echo 'Hello, World!'; ?>
</h3>
<hr>
<h1>ExercieXP 2 afficher avec une variable </h1>

    <?php
        $title = 'Hello PHP!';
    ?>
    <h3>
        <?php echo $title;?>
   </h3>
   <hr>

   <h1>ExercieXP 3  Concatener deux variables </h1>

    <?php
        $bonjour = 'Bonjour';
        $journee = 'Bonne journée';
    ?>
    <h3>
        <?php echo $bonjour .' ' .$journee;?>
   </h3>
   <hr>

   <h1>ExercieXP 4  Inverser une chaine </h1>

    <?php
        $invers_chaine = 'ATOS ACADEMY';
    ?>
    <h3>
        <?php echo strrev($invers_chaine) ?>
   </h3>
   <hr>

</body>
</html>