<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_portfolio'])){
    print_r("Uspesne pridane");
    $data = [
        'name' => $_POST["name"],
        'image' => $_POST["image"],
    ];
    
    $query = "INSERT INTO portfolio (name, image) VALUES (:name, :image)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
    print_r("Uspesne pridane");
}else{
    print_r("Neuspech");
}
?>