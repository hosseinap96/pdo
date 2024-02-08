<?php
include('./connect.php');

if (isset($_POST['send'])){
    $id=$_POST['id'];

}

try{
$stm=$conn->prepare("DELETE from user where id=:id");
$stm->execute([
    "id"=>$id
]);
if ($stm->rowCount()){
    echo "deleted";
}
else{
    echo "no";
}

}
catch(PDOException $e){
    $e->getMessage();
}
?>