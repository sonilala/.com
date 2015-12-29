<?php
    $conn = mysqli_connect("###", "###", "###", "###");
    if (!$conn) {
        echo "<head><meta http-equiv=\"REFRESH\" content=\"5; http://brawrdon.com\" /></head>"; 
        die("Connection failed access denied. Returning to homepage in 5 seconds");
 }
?>