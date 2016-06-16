<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Player Information</title>
</head>
<body>
<h1>Delete Player</h1>

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
        $query = "DELETE FROM players WHERE id = '$memberId'";
        $queryResult = mysqli_query($db,$query);
        print"<p>Your player information has been deleted!<p>";
    }
    elseif(!empty($firstName))
    {
        $query = "DELETE FROM players WHERE first_name = '$firstName'";
        $queryResult = mysqli_query($db,$query);
        print"<p>Your player information has been deleted!<p>";
    }
    elseif(!empty($lastName))
    {
        $query = "DELETE FROM players WHERE last_name = '$lastName'";
        $queryResult = mysqli_query($db,$query);
        print"<p>Your player information has been deleted!<p>";
    }
    elseif(!empty($email))
    {
        $query = "DELETE FROM players WHERE email = '$email'";
        $queryResult = mysqli_query($db,$query);
        print"<p>Your player information has been deleted!<p>";
    }
    elseif(!empty($phone))
    {
        $query = "DELETE FROM players WHERE phone = '$phone'";
        $queryResult = mysqli_query($db,$query);
        print"<p>Your player information has been deleted!<p>";
    }
    else
    {
        print"<p>Player information could not be deleted</p>";
    }
    ?>
<br>
<form>
<input class="homeButton" type="button" value="Home" onclick="window.location.href='index.html'" />
</form>
</body>
</html>