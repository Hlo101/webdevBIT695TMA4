<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Player Information</h1>

<?php
    
    $memberId = ($_GET["memberId"]);
    $firstName = ($_GET["firstName"]);
    $game = ($_GET["game"]);

    
    //connect to database
     $db = new mysqli("localhost", "root", "", "boardgameClub") or die("Unable to connect");

    $query = "CREATE TABLE IF NOT EXISTS boardGameOwner(boardGame VARCHAR(50), playerName VARCHAR(50), playerId VARCHAR(50), FOREIGN KEY (playerId) REFERENCES players(id))";

    $queryResult = mysqli_query($db,$query);

    

    $query = "CREATE TABLE IF NOT EXISTS availableBoardGames(boardGame VARCHAR(50), playerName VARCHAR(50), playerId VARCHAR(50), PRIMARY KEY (boardGame), FOREIGN KEY (playerId) REFERENCES players(id))";
    
    $queryResult = mysqli_query($db,$query);


    $query = "INSERT INTO boardGameOwner(boardGame, playerName, playerId) VALUES ('$game', '$firstName', '$memberId')";

    $queryResult = mysqli_query($db,$query);



    $query = "INSERT INTO availableBoardGames(boardGame, playerName, playerId) VALUES ('$game','$firstName', '$memberId')";
    
    mysqli_query($db, $query);

        print"<p>Your board game has been added!<p>";
    ?>
<br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form>
</body>
</html>