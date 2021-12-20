<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snacks</title>
</head>

<body>
  <!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60

## Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

## Snack 3

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

  <!-- ## Snack 1 -->
  <p>Snack 1</p>
  <?php
  $games = [
    [
      'homeTeam' => 'Boston Celtics',
      'guestTeam' => 'New York Knicks',
      'homePoints' => '50',
      'guestPoints' => '15',

    ],

    [
      'homeTeam' => 'Indiana Pacers',
      'guestTeam' => 'Orlando Magic',
      'homePoints' => '30',
      'guestPoints' => '45',

    ],

    [
      'homeTeam' => 'Washington Wizards',
      'guestTeam' => 'Memphis Grizzlies',
      'homePoints' => '55',
      'guestPoints' => '60',

    ],

    [
      'homeTeam' => 'Utah Jazz',
      'guestTeam' => 'Phoenix Suns',
      'homePoints' => '32',
      'guestPoints' => '47',

    ],
  ];

 
  for($i=0; $i < 4; $i++) {
    echo $games[$i]["homeTeam"] . " - " .$games[$i]["guestTeam"] . " | " . $games[$i]["homePoints"] . "-" . $games[$i]["guestPoints"] ."<br>";
  }
  ?>

  <p>Snack 2</p>

  <?php
  // name
  $name = $_GET['name'];
  $nameLength = strlen($name);

  // email
  $email = $_GET['mail'];
  $emailAt = strpos($email, "@");
  $emailDot = strpos($email, ".");

  // age
  $age = $_GET['age'];
  $isNumeric = is_numeric($age);

  // email logic
  if($emailAt !== false && $emailDot !== false) {
    $correctEmail = true;
  }else{
    $correctEmail = false;
  };
  
    function getvalues($length, $mail, $years) {
      if ($length > 3 && $mail == true && $years == true) {
        echo "Accesso riuscito";
      } else {
        echo "Accesso negato";
      }
    };
    
    getvalues($nameLength, $correctEmail, $isNumeric); 
  ?>

<p> Snack 3</p>

<?php
    $posts = [

      '10/01/2019' => [
          [
              'title' => 'Post 1',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 1'
          ],
          [
              'title' => 'Post 2',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 2'
          ],
      ],
      '10/02/2019' => [
          [
              'title' => 'Post 3',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 3'
          ]
      ],
      '15/05/2019' => [
          [
              'title' => 'Post 4',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 4'
          ],
          [
              'title' => 'Post 5',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 5'
          ],
          [
              'title' => 'Post 6',
              'author' => 'Michele Papagni',
              'text' => 'Testo post 6'
          ]
      ],
  ];
 
  $keys= array_keys($posts);
  for($i=0; $i<count($posts); $i++) {
    $key=$keys[$i];
    $array=$posts[$key];
    echo "$key" . "<br>";
    
    for($j=0; $j<count($array); $j++) {
        $title=$array[$j]["title"];
        echo "$title" . "<br>";
        $author=$array[$j]["author"];
        echo "$author" . "<br>";
        $text=$array[$j]["text"];
        echo "$text" . "<br>";
        echo"<br>";
    }
  }

?>
</body>

</html>