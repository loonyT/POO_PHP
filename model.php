<?php 

class Model{
//defineproperty
    
    public $table; 
    
       public function read($fields=null) {
//im launching the function to get the name for instance  
//here i am connecting to the database
        if($fields==null){
            $fields = "*"; 
        }  
   $sql = "SELECT $fields FROM".$this->table;
        $req = mysql_query($sql) or die (mysql_error()); 
 //recuperation des données 
        $data = mysql_fetch_assoc($req); 
      //on va donner à l'objet tout ce qui est récupéré de la base de donnée 
      foreach($data){
          $this->$k = $v;
      }   
    }
    
//cette classe définit le comportement des sous classes    
    
    static function load("$name") {
        require($name.php); 
        return new $name();
    }
    
    
    
    
    
}
    
    ?>