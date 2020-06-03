<!-- GOAL: Provare a immaginare una classe come quella vista a lezione, definendo le variabili d'ambiente per disegnare un ipotetico prodotto di magazzino;
Definire anche costruttore completo (tutti le variabili che avete creato) + printMe per fare il log, nell'ottica di quanto visto questa mattina a lezione -->

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prodotto Magazino: Tablet</title>
  </head>
  <body>
    <?php
      class Tablet{

        public $width;
        public $height;
        public $cameraMp;
        public $sensoreBiometrico;

        public function __construct($width, $height, $cameraMp, $sensoreBiometrico){
          $this -> width = $width;
          $this -> height = $height;
          $this -> cameraMp = $cameraMp;
          if ($sensoreBiometrico) {
            $this -> sensoreBiometrico = "FaceId";
          } else {
            $this -> sensoreBiometrico = "TouchId";
          }

        }
        // per calcolare i pollici dello schermo tolgo 1.8cm sia in larghezza che in altezza
        //applico il teorema di pitagora per trovare la diagonale e trastormo il valore da cm in pollici
        public function calcInchScreen(){
          $this -> width = ($this -> width - 1.8)*($this -> width - 1.8);
          $this -> height = ($this -> height - 1.8)*($this -> height - 1.8);
          //mi accontento di una precisione di 2 cifre
          return round((0.394 * (sqrt($this -> width + $this -> height))), 2);
        }

        public function printMe(){
          echo "Ciao,<br> Il tablet con <br>width: "
          . $this -> width
          . "cm <br>e <br>height: "
          . $this -> height
          . "cm <br> ha uno schermo di: "
          . $this -> calcInchScreen() . " pollici <br> e una fotocamera da "
          . $this -> cameraMp
          . "Megapixel <br> e il sensore biometrico è: "
          . $this -> sensoreBiometrico
          . "<br><br>";
        }
      }

    $tabletiPadPro = new Tablet(17.85, 24.7,  12, 1);
    $tabletiPadPro -> printMe();
    $tabletiPadMini = new Tablet(13.47, 20, 8, 0);
    $tabletiPadMini -> printMe();
    echo "Funziona!";

    ?>

  </body>
</html>
