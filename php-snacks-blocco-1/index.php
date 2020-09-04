<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
  // $matches = [
  //   "home" => [
  //     "Olimpia Milano" => "55"
  //   ],
  //   "guest" => [
  //     "Cantù" => "60"
  //   ]
  // ];
  //
?>
<p>
  <?php
    // $home = array_key_first($matches["home"]);
    // echo $home;
    // echo " - ";
    // $guest = array_key_first($matches["guest"]);
    // echo $guest;
    //
    // echo " | ";
    // $homeScore = $matches["home"]["Olimpia Milano"];
    // echo $homeScore;
    // echo "-";
    // $guestScore = $matches["guest"]["Cantù"];
    // echo $guestScore;
  ?>
</p>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->

<?php
  // $name = $_GET["name"];
  // $mail = $_GET["mail"];
  // $age = intval($_GET["age"]);

  // $check1 = strpos($mail, "@");
  // $check2 = strpos($mail, ".");

  // if ((strlen($name) > 3) && (($check1 !== false) && ($check2 !== false)) && (gettype($age) == "integer")) {
    ?>
      <!-- <h1>ACCESSO AUTORIZZATO</h1> -->
    <?php
  // }
  // else {
    ?>
      <!-- <h1>ACCESSO NEGATO</h1> -->
    <?php
  // }
?>

<!-- Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l'array non dovrà contenere
lo stesso numero più di una volta. -->

<?php
  // $randArr = [];
  //
  // while (count($randArr) < 15) {
  //   $randNum = rand(1,100);
  //
  //   if (!in_array($randNum, $randArr)) {
  //     $randArr[] = $randNum;
  //   }
  // }
  //
  // var_dump($randArr);
?>
