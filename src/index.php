<?php
    session_start();

    require "db_connect.php";
    require "header.php";

    if (empty($_SESSION['type'])) {
        // No redirection logic here
    } else if (strcmp($_SESSION['type'], "librarian") == 0) {
        header("Location: librarian/home.php");
        exit(); // Ensure script stops execution after redirection
    } else if (strcmp($_SESSION['type'], "member") == 0) {
        header("Location: member/home.php");
        exit(); // Ensure script stops execution after redirection
    }
?>

<html>
<head>
    <title>Library</title>
    <link rel="stylesheet" type="text/css" href="css/index_style.css" />
</head>
<body>
    <div id="allTheThings">
        <div id="member">
            <a href="member">
                <img src="img/ic_member.svg" width="250px" height="auto"/><br />
                &nbsp;Member
            </a>
        </div>
        <div id="verticalLine">
            <div id="librarian">
                <a id="librarian-link" href="librarian">
                    <img src="img/ic_librarian.svg" width="250px" height="auto" /><br />
                    &nbsp;&nbsp;&nbsp;Librarian
                </a>
            </div>
        </div>
    </div>
</body>
</html>