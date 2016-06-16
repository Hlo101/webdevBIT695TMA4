<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Matching Player/s</h1>

<?php
   
    $memberId = ($_GET["memberId"]);
    $firstName = ($_GET["firstName"]);
    $lastName = ($_GET["lastName"]);
    $email = ($_GET["email"]);
    $phone = ($_GET["phone"]);

            //connect to database
            $db = new mysqli("localhost", "root", "", "playerinfo") or die("Unable to connect");
    
    if (!empty($memberId))
    {
        $query = "SELECT * FROM players WHERE id LIKE '$memberId'";
        $queryResult = mysqli_query($db,$query);
        $row = mysqli_fetch_row($queryResult);
        print "<table width='30%' border='1'>";
        print "<tr><th>Member ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th></tr>";
    
            if(!$row)
            {
                print"<tr><td>No matching player found</td></tr>";
            }
            while ($row)
            {
                print"<tr><td>{$row[0]}</td>
                <td>{$row[1]}</td>
                <td>{$row[2]}</td>
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>";
                $row = mysqli_fetch_row($queryResult);
            }
            print "</table>";
        
    }
    else
    {
        print "<p>Please enter a valid input</p>";
    }
    
    ?>
<br><br>
<form>
<input class="searchButton" type="button" value="Search another player" onclick="window.location.href='searchplayerform.html'" />
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form

</body></html>