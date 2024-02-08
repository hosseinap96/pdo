<?php
include('./connect.php');

if(isset($_POST['send'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $id = $_POST['id'];
}
else{
    echo 'no';
}
try{
$stm = $conn->prepare("UPDATE user set username=:user , password=:pass where id=:id");
$stm->execute([
    "user"=>$user,
    "pass"=>$pass,
    "id"=>$id
]);

if($stm->rowCount()){
    echo 'updated';
}
else{
    echo 'no update';
}
}
catch(PDOException $e){
    echo $e->getMessage();

}
?>