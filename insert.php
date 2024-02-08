<?php
include('./connect.php');

if (isset($_POST['send'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
}
else{
    echo 'no';
}

try {
    $stm = $conn->prepare("INSERT INTO user (username, password)
    VALUES (:user , :pass)");
    $stm->execute([
        "user" =>$user,
        "pass"=>$pass
    ]);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
?>