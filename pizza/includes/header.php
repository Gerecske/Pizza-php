<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Queen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body class="bg-primary">
    <div class="container-fluid bg-dark">
        <nav class="container navbar navbar-expand-sm bg-dark navbar-dark"> 
            <a class="navbar-brand" href="./">Pizza Queen</a>    
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Akciós pizzák</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?p=pizza">Összes pizza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./?p=rnd">Nem tudok választani</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="./?p=edit">Pizza szerkesztés</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="./?p=new">Pizza felvétel</a>
                </li> 
            </ul>
            <form action="./?p=score" method="post" naem="search" class="d-flex ms-auto">
                <input type="text" name="text" placeholder="Itt keress" class="form-controll">
                <button class="btn btn-primary" type="submit" name="submit">KERES!</button>
            </form>
        </nav>
    </div>