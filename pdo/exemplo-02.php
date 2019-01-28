<?php


$conn = new PDO("sqlsrv:DataBase=dbphp7;server=localhost\SQLEX;ConnectionPooling=0", "sa", "root");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");


$stmt->execute();



$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo json_encode($results);

?>