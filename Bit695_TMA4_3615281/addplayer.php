<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Player Information</h1>

<?php
    
        $memberId = ($_POST["memberId"]);
        $firstName = ($_POST["firstName"]);
        $lastName = ($_POST["lastName"]);
        $email = ($_POST["email"]);
        $phone = ($_POST["phone"]);
  
        //connect to database
        $db = new mysqli("localhost", "root", "", "boardgameClub") or die("Unable to connect");
    
        $query = "CREATE TABLE IF NOT EXISTS players(id VARCHAR(50), first_name VARCHAR(50), last_name VARCHAR(50), email VARCHAR(100), phone VARCHAR(20), PRIMARY KEY (id))";
    
        $queryResult = mysqli_query($db,$query);
    
        //validate that it's not duplicate ID
        $query = "SELECT * FROM players WHERE id LIKE '$memberId'";
    
        $queryResult = mysqli_query($db,$query);
        $row = mysqli_fetch_row($queryResult);
        if($row)
        {
            print"<p>$memberId already in use, please select another member Id</p>";
        }
        else
        {
            $query = "INSERT INTO players(id, first_name, last_name, email, phone) VALUES ('$memberId', '$firstName', '$lastName', '$email', '$phone')";
            
            $queryResult = mysqli_query($db,$query);
        
            print"<p>Your player information has been added!<p>";
        }
    ?>
<br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form>
</body>
</html>