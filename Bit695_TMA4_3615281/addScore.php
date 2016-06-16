<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Player Information</h1>

<?php
    
    $name = ($_GET["firstname"]);
    $game = ($_GET["game"]);
    $score = ($_GET["score"]);
    
    //connect to database
    $db = new mysqli("localhost", "root", "", "boardgameClub") or die("Unable to connect");
    
    $query = "CREATE TABLE IF NOT EXISTS highestScores(playerName VARCHAR(50), playerId VARCHAR(50), boardGame VARCHAR(50), score INT(6), FOREIGN KEY (playerId) REFERENCES players(id))";
    
    $queryResult = mysqli_query($db,$query);
    
    $query = "INSERT INTO highestScores(playerName, boardGame, score) VALUES ('$name', '$game', '$score')";
    
    $queryResult = mysqli_query($db,$query);
    
    print"<p>Your score has been added!<p>";
    ?>
<br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form>
</body>
</html>