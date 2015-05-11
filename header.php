<?php
    $DBH = new PDO("mysql:host=localhost;dbname=vps_info","root","");
    $STH = $DBH->query("SELECT id,menu_title FROM info");
    //$STH->setFetchMode(PDO::FETCH_ASSOC);
    if(isset($_GET['id']))
    {
        $page_id = $_GET['id'];
    }
    else
    {
        $page_id = -1;
    }
    

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="page">
        <header>
            <h1>Virtual Private Server Hosting</h1>
            <nav>
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <?php
                    while($row = $STH->fetch())
                    {
                        $title = $row['menu_title'];
                        $url = "page.php?id=" . $row['id'];
                        $current = "";
                        if($row['id'] == $page_id)
                             {
                                $current = 'class="current"';
                             }
                        echo "<li $current><a href=\"$url\">$title</a></li>";
                    }

                    ?>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>