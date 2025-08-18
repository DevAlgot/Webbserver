<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematik-test</h1>
<?php
    $name = $_POST["name"];

    $ans1 = $_POST['q1'];
    $ans2 = $_POST['q2'];

    $points = 0;

    if ($ans1 == 9) {
        $points++;
    }
    if ($ans2 == 15) {
        $points++;
    }
    
    echo("<h3>" . $name . " fick "  . $points . " av 2 möjliga </h3>")
?>


</body>
</html>