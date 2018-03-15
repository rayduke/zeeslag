<?php

abstract class Ship{
      public $name;
      public $maxhit;
      public $nr;

       
}

class Carrier extends Ship{
    
    public function __construct(){
        $this->maxhit = 5; 
        $this->nr = 5;        
    }    
    
    public function gotHit(){
        echo "the " . $this->name . "got hit!!";
    }

}



class Battleship extends Ship{
    
    public function __construct(){
        $this->maxhit = 4;
        $this->nr = 4;
       
    }
    
    public function gotHit($ship){
        echo "the " . $this->name . "got hit!!";
    }
}


class Cruiser extends Ship{
    
    public function __construct(){
        $this->maxhit = 3;
        $this->nr = 3;
    }
    
    public function gotHit($ship){
        echo "the " . $this->name . "got hit!!";
    }
    
}

class Submarine extends Ship{
    
    public function __construct(){
        $this->maxhit = 3;
        $this->nr = 2;
    }
    
    public function gotHit($ship){
        echo "the " . $this->name . "got hit!!";
    }
}

class Destroyer extends Ship{
    
    public function __construct(){
        $this->maxhit = 2;
        $this->nr = 1;
    }
    
    public function gotHit($ship){
        echo "the " . $this->name . "got hit!!";
    }
    
}