<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Player Information</h1>

<?php
    
    $date = ($_GET["date"]);
    $venue = ($_GET["venue"]);
    $game = ($_GET["game"]);
    $time = ($_GET["time"]);
    
    //connect to database
    $db = new mysqli("localhost", "root", "", "boardgameClub") or die("Unable to connect");
    
   $query = "CREATE TABLE IF NOT EXISTS schedule(date VARCHAR(50), location VARCHAR(50), game VARCHAR(50), time VARCHAR(50))";
    
    $queryResult = mysqli_query($db,$query);
    
    $query = "INSERT INTO schedule(date, location, game, time) VALUES ('$date', '$venue', '$game', '$time')";
    
    $queryResult = mysqli_query($db,$query);
    
    print"<p>Your event has been added!<p>";
    ?>
<br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form>
</body>
</html>