<?php
include('./connect.php');

try {
    
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $data =$stmt->fetchAll(PDO::FETCH_OBJ);
    echo $data[0]->id;
    foreach ($data as $user) {
    
    echo $user->id ;
       echo  $user->username ;
       echo  $user->password ;
        
      }


  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

?>