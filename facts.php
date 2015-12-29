<!--Copyright (c) Monday 28th December 2015 Brawrdon-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Random Facts &bull; Brawrdon</title>
</head>

<body>
    <nav>
        <ul>
            <ul style="float:left;list-style-type:none;margin-left:100px;">
                <li><a class="copy" href="/">&copy; Brawrdon 2016</a></li>
            </ul>
            <li><a class="menu" href="#">The Rest</a></li>
            <li><a class="menu" href="#">Media</a></li>
            <li><a class="menu" href="#">Apps</a></li>
            <li><a class="menu" href="#">About</a></li>
            <li><a class="menu" href="/">Home</a></li>
        </ul>
    </nav>
    <div class="jumbotron">
        <div class="content">
            <h1>Random Facts</h1>
            <p>Here you'll find some facts about me that have been taken from a MySQL database and displayed onto the page with a fancy PHP script. Fancy right? Refresh the page for another one if you fancy! (Who said all these facts are about me huh?)</p>
        </div>
       
    </div>
    <div class="fact">
        <h1>The random fact is:</h1>
        <?php
            require_once("scripts/connection.php");
            $rand_id = rand(1, 11);
            $sql = "SELECT * FROM ### WHERE ### = $rand_id";
            $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) {
                $fact_record = mysqli_fetch_assoc($query);
                $fact_text = $fact_record["###"];  
                echo "<div class=\"fact-text\"><div class=\"fact-wrapper\"><p>" . $fact_text . "</p></div></div>";
            }
            else {
                echo "<p>There was an error</p>";
            }

            mysqli_close($conn);
        ?>
    </div>

</body>

</html>