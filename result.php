<?php
    // ini_set('display_errors', 0 );
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./css/styles.css" type="text/css" rel="stylesheet">
    <title>ephemURL</title>
</head>
<body>
    <div class="gradient-custom d-flex h-100 p-0  flex-column justify-content-center align-items-center container-fluid">
    <?php
        try {
            $hostname = 'localhost';
            $uid = $_SESSION['uid'];
            echo "<span class=\"badge rounded-pill bg-primary mb-5\" style=\"font-size: 2em\">Success!</span><span class=\"h3\">"."<a class=\"h1\" href=\"http://$hostname/?$uid\" target=\"_blank\">$hostname/?$uid</a>";
        } catch (PDOException $err) {
            echo '<span class="badge rounded-pill bg-danger mb-5" style="font-size: 2em">Error!</span>
                 <p>An error has occured, please try again.</p>';
            exit();
        }
        
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>