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
    
    
    public function save($data){
      if(isset($data["id"]) && !empty($data["id"])) {
    /* on a besoin de recupérer les champs enfonction de ....    */      
          $sql= "UPDATE ".$this->table." SET ";
          //je recupère la clef et sa valeure 
          foreach($data as $k=>$v){
              if($k!="id
              ") {
                  //we dont touch the main functions once they are created 
              }
              $sql .="$k='$v',"; 
          }
          $sql = substr($sql,0,-1); //delete the last character
          $sql .= "WHERE id=".$data["id"];
          echo $sql;
          
      } 
        
       else {
    /* on a besoin de recupérer les champs enfonction de ....    */      
          $sql= "INSERT INTO ".$this->table." (  ";
          //je recupère la clef et sa valeure 
          foreach($data as $k=>$v){
           $sql .="$k";
          }
          $sql = substr($sql,0,-1); //delete the last character 
          $sql .= "Values ("; 
           foreach($data as $v) {
               $sql .="$v,"; 
           }
          $sql = substr($sqm,0,-1);
         $sql .= "WHERE id=".$data["id"];
         
    }
           mysql_query($sql) or die (mysql_error());
          if(isset($data["id"]) && empty($data["id"])) { 
          $this->id=mysql_insert_id;
          }
        
        else {
            $this-> = $data["id"]; 
        }
//cette classe définit le comportement des sous classes    
    
    static function load("$name") {
        require($name.php); 
        return new $name();
    }
 //in this part i will create all the functions that will be used else where in the projecT. 
    
 
    
    
    
    
}
    
    ?>