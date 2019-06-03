<?php
    
    $dsn = "mysql:host=db.mis.kuas.edu.tw;dbname=s1104137208;charset=utf8";
    $pdo = new PDO($dsn, "s1104137208", "S124952301");
    $pdoStr = $pdo->prepare("SELECT * FROM user");
    $pdoStr->execute();
    echo json_encode($pdoStr->fetchAll(PDO::FETCH_ASSOC));
    
?>

