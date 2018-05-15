<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<br />========> Exercice 1 et 2 <======== <br /><br />";

    $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novrmbre','décembre');
    echo $mois [2];

      echo "<br /><br />========> Exercice 3 <======== <br /><br />";

      echo $mois [4];

      echo "<br /><br />========> Exercice 4 <======== <br /><br />";

      $mois [7] = "août";
      echo $mois [7];

        echo "<br /><br />========> Exercice 5 et 6 <======== <br /><br />";

      $departements = array(
        "9"=>"Ariège" ,
        "11"=>"Aude",
        "12"=>"Aveyron",
        "30"=>"Gard",
        "31"=>"Haute-Garonne" ,
        "32"=>"Gers",
        "46"=>"Lot",
        "32"=>"Gers" ,
        "34"=>"Hérault",
        "46"=>"Lot",
        "48"=>"Lozère" ,
        "65"=>"Haute-Pyrénées" ,
        "66"=>"Pyrénées-orientales" ,
        "81"=>"Tarn",
        "82"=>"Tarn-et-garonne" ,);

        echo $departements ["30"];

        echo "<br /><br />========> Exercice 7 <======== <br /><br />";

    ?>
  </body>
</html>
