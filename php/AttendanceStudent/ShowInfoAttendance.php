<?php
    session_start();
    $userName = $_SESSION['username']; 
    $userPass = $_SESSION['password'];

    // Connect to database
    try {
        $conn = new PDO("mysql:host=localhost;dbname=bt2", 'root', '');
       
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    //query
    //id_sv
    $stmt_idSV = $conn->prepare('SELECT id_sv from students where id_user in (SELECT id_user from users where username = :username)');
    $stmt_idSV -> bindValue(':username',$userName,PDO::PARAM_STR);
    $stmt_idSV->execute();
    $id_sv = $stmt_idSV->fetchAll();
   
    $stmt_date = $conn->prepare('SELECT id_class,day, status from attendance where(status = "attend" AND id_sv = :id_sv)');
    $stmt_date->bindValue(':id_sv',$id_sv[0][0],PDO::PARAM_STR);
    $stmt_date->execute();
    // Lấy danh sách kết quả
    $dates = $stmt_date->fetchAll();


    $stmt = $conn->prepare('SELECT id_class,classname from classes');
   // $stmt->bindValue(':id_sv',$id_sv[0][0],PDO::PARAM_STR);
    $stmt->execute();
    // Lấy danh sách kết quả
    $classes = $stmt->fetchAll();


    $stmt_nameSV = $conn->prepare('SELECT name from students where id_sv = :id_sv');
    $stmt_nameSV->bindValue(':id_sv',$id_sv[0][0],PDO::PARAM_STR);
    $stmt_nameSV->execute();
    // Lấy danh sách kết quả
    $names = $stmt_nameSV->fetchAll();

    
?>
