<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Board Games</h1>

<?php
    
    //connect to database
    $db = new mysqli("localhost", "root", "", "boardgameClub") or die("Unable to connect");
    
    $query = "SELECT * FROM schedule";
    $queryResult = mysqli_query($db,$query);
    $row = mysqli_fetch_row($queryResult);
    print "<table width='30%' border='1'>";
    print "<tr><th>Date</th><th>Venue</th><th>Game</th><th>Time</th></tr>";
    
    if(!$row)
    {
        print"<tr><td>No available events</td>
        <td></td>";
    }
    while ($row)
    {
        print"<tr><td>{$row[0]}</td>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>";
        $row = mysqli_fetch_row($queryResult);
    }
    print "</table>";
    ?>
<br><br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form

</body></html>