<?php 

    class = Voiture{
    public $marque; 
    public $nbRoues
    
  function showMarque() {
    echo"marque:".$this->marque;
}
       
}

    $v = new Voiture(); 
    $v->marque = "hyuindai"; 
    $v->showMarque();

//lots of objects are using the same class 

    $v2 = new Voiture(); 
    $v2->marque = "peugeot";
    $v2->showMarque();


//public = accessible from the outside
//private= accessible only from within






?>