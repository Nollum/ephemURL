<?php

function getRandUID() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randUID = '';
    $length = 3;
  
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randUID .= $characters[$index];
    }
    return $randUID;
}

try {
    session_start();
    require_once('./connectdb.php');
    if (!isset($_POST['url']) || empty($_POST['url'])) {
        require_once('./url_error.php');
        exit();
    }
    $url = $_POST['url'];
    //generate a random string of length 3 
    $uid = getRandUID();
    $_SESSION['uid'] = $uid;
    //check for UID collision
    $sql = "SELECT * FROM `routes` WHERE UID='$uid'";
    $data = $conn->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo '<p>A UID collision occured, please go back and generate a new URL</p>';
    } else {
        $sql = "INSERT INTO routes (URL, UID) VALUES (:url, :uid)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':url', $url);
        $stmt->bindValue(':uid', $uid);
        $stmt->execute();
    }

    header('Location: result.php');
    
} catch (PDOException $err) {
    echo 'An error has occured ';
    exit();
}

