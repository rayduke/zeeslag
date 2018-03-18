<?php

class Ship {
  public $name;
  public $boatLength;
  public $cord;

 
 
  public function __construct($theName, $theBoatLength, $cord){
          $this->name = $theName;
          $this->boatLength = $theBoatLength;
          $this->cord = $cord;
       
          
  }
     
}


//$codestroyer = explode(",", $_GET['codestroyer']);
//$cosubmarine = explode(",", $_GET['cosubmarine']);
//$cocruiser = explode(",", $_GET['cocruiser']);
//$cobattleship = explode(",", $_GET['cobattleship']);
//$cocarrier = explode(",", $_GET['cocarrier']);

$filterdestroyer = filter_input(INPUT_GET, 'codestroyer');
$filtersubmarine = filter_input(INPUT_GET, 'cosubmarine');
$filtercruiser = filter_input(INPUT_GET, 'cocruiser');
$filterbattleship = filter_input(INPUT_GET, 'cobattleship');
$filtercarrier = filter_input(INPUT_GET, 'cocarrier');

$codestroyer = explode(",", $filterdestroyer);
$cosubmarine = explode(",", $filtersubmarine);
$cocruiser = explode(",", $filtercruiser);
$cobattleship = explode(",", $filterbattleship);
$cocarrier = explode(",", $filtercarrier);

//echo $codestroyer[0];
//echo $codestroyer[1];

//echo var_dump($filterdestroyer);
//echo var_dump($codestroyer);
//echo "<br>";

//$var = ["00"];

$destroyer = new Ship('Destroyer', 2, $codestroyer);
//echo "<br><br>" . var_dump($destroyer);

$submarine = new Ship('Submarine', 3, $cosubmarine);
//echo "<br><br>" . var_dump($submarine);

$cruiser = new Ship('Cruiser', 3, $cocruiser);

$battleship = new Ship('Battleship', 4, $cobattleship);

$carrier = new Ship('Carrier', 5, $cocarrier);

$allShips = array_merge($destroyer->cord, $submarine->cord, $cruiser->cord, $battleship->cord, $carrier->cord);

//echo var_dump($allShips);



?>