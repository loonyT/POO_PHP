<?php 
require"core.php";
$Category = Model::load("category");
?>


//check if values are correctly posted : 

<?php 

if(!empty($_POST)){
    $Category->save($_POST); /*like that youre saving all posted categories*/
    $Category->save($_POST); /*like that youre saving all posted categories*/
    //im getting back the id : 
    $_GET[id]$Category->id=2;
   
    
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmins="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
        <link rel="stylesheet" href="../Theme/style.css" type="text/css" media="screen" />
    </head>
    
    <body>
    <div id="conteneur">
       
<h1>POO en PHP</h1> 
        
  <form method="post" action="index.php">
        
        <?php $id= $_GET["id"]; $Category->id=$id; $Category->read(); 
      ?>
        
      <input type="hidden" name="id" value="<?php echo $Category->id; ?>"/>
      <input type="text" name="name" value="<?php echo $Category->name;?>"/>
       <input type="text" name="position" value="<?php echo $Category->position;?>"/>
      <input type="submit" value="envoyer"/>
      
      
              
        </form>
        
        </div>
        

        
    </body>