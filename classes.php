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

  $destroyer = new Ship('Destroyer', 2, ["00","01"]);

  $submarine = new Ship('Submarine', 3, ["26","36","46"]);
  
  $cruiser = new Ship('Cruiser', 3, ["71", "81", "91"]);
  
  $battleship = new Ship('Battleship', 4, ["96","97","98","99"]);
  
  $carrier = new Ship('Carrier', 5, ["08","18","28","38","48"]);
 
    
    //$ = ["00", "01", "02"];
//var_dump($boot1);
    
