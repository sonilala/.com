<!--Copyright (c) Monday 29th December 2015 Brawrdon-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="../../style.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Random Quotes &bull; Brawrdon</title>
</head>

<body>
    <nav>
        <ul>
            <ul style="float:left;margin-left:90px; margin-right:0;">
                <li><a class="menu" href="/">&copy; Brawrdon 2016</a></li>
            </ul>
            <li><a class="menu" href="#">The Rest</a></li>
            <li><a class="menu" href="#">Media</a></li>
            <li><a class="menu" href="#">Websites / Apps</a></li>
            <li><a class="active" href="../../about/">About</a></li>
            <li><a class="menu" href="/">Home</a></li>
        </ul>
    </nav>
    <div class="page-wrapper">

        <div class="jumbotron">
            <div class="page-content">
                <h1>Random Quotes</h1>
                <p>Sometimes I come up with fancy sentences that I think could be compiled into a MySQL database and displayed on a HTML page with PHP. This is that page.</p>
            </div>
        </div>
        <div class="quote">
            <div class="page-content">
                <h1>The random quote is:</h1>
            </div>
            <div class="quote-text">
                <div class="page-content">
                    <?php
                        require_once("../scripts/connection.php");
                        $rand_id = rand(1, 20);
                        $sql = "SELECT * FROM ### WHERE ### = $rand_id";
                        $query = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($query) > 0) {
                            $quote_record = mysqli_fetch_assoc($query);
                            $quote_text = $quote_record["###"];  
                            echo "<p>\"" . $quote_text . "\"</p>";
                        }
                        else {
                            echo "<p>There was an error. I didn't say that, there's just an error right now.</p>";
                        }

                        mysqli_close($conn);
                    ?>
                </div>
            </div>
           <a href="../../about/quotes/">
                <div class="left-two">
                    <p class="icon"><img src="../../assets/img/buttons/refresh.png"></p>
                    <p class="box-title">Another Quote</p>
                </div>
            </a>
            <a href="../../about/facts/">
                <div class="right-two">
                    <p class="icon"><img src="../../assets/img/buttons/fact.png"></p>
                    <p class="box-title">Random Facts</p>
                </div>
            </a>
        </div>
        
    </div>

</body>

</html>