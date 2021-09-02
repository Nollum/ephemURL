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
    <div class="gradient-custom container-fluid">
        <span class="badge p-3 m-0 shadow-lg bg-bodyrounded" 
        style="background-color: #583996 !important; font-size: 2em !important; margin-bottom: 5vh !important;" 
        id="title">ephemURL</span>
        <form action="./generate.php" method="post" class="d-flex flex-column justify-content-center align-items-center">
            <input type="text" class="form-control mb-3" id="url" name="url" placeholder="eg: https://www.google.com"><br>
            <button class="w-50 btn btn-primary" type="submit" value="generate">generate</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>