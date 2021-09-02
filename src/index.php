<?php
try {
    require_once('connectdb.php');
    $uid = $_SERVER['QUERY_STRING'];
    $sql = "SELECT * FROM `routes` WHERE `UID` = '$uid'";
    $query = $conn->query($sql);
    if (!$query) {
        echo 'Invalid URL';
        exit();
    }
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $url = $result['URL'];
    if ($url) {
        $sql = "DELETE FROM `routes` WHERE `UID` = '$uid'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('Location: '. $url);
        exit();
    } else {
        require_once('./url_error.php');
        exit();
    }
} catch (PDOException $err) {
    echo 'An error has occured';
    exit();
}