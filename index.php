<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio prodotto Magazzino</title>
  </head>
  <body>
    <?php

      class Square {
        public $depth;

        public function getVolume(){

          return $this -> width * $this -> height * $this -> depth;
        }
      }

      $ob1 = new Square();
      $ob1 -> width = 10;
      $ob1 -> height = 15;
      $ob1 -> depth = 20;

      $ob2 = new Square();
      $ob2 -> width = 33;
      $ob2 -> height = 17;
      $ob2 -> depth = 23;
      echo "L'oggetto 1 occupa " . $ob1 -> getVolume() . " spazio<br>";
      echo "L'oggetto 2 occupa " . $ob2 -> getVolume() . " spazio<br>";
     ?>

  </body>
</html>
