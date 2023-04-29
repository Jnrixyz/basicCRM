<?php
include_once("./conn.php");
conn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Basic CRM</title>
</head>
<body>
    <div class="side-menu">
        <header>
            <h1>Basic CRM</h1>
        </header>
        <div class="side-nav">
            <div class="side-nav-item">
                <a href="" class="active">Dashboard</a>
                <a href="">Add task</a>
                <a href="">Tasks to do</a>
                <a href="">Completed tasks</a>
                <a href="">Recycle bin</a>
            </div>
        </div>
    </div>
    <main>
        <div class="content-item">
            <div class="card">
                <h2></h2> 
            </div>
        </div>
    </main>
</body>
</html>