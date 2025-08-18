<!doctype html>
<html>
<head lang="sv"></head>
<body>
<h1>Matematik-test</h1>
<?php
    $ans = $_POST['q1'];
    $quest = $_POST['b1'];
    $points = 0;
    echo("<p>" . $quest . "</p>");

    if ($ans == $_POST['b1']) {
        $points++;
    }
    echo("<p> Du fick " . $points . " poäng!</p>");
?>


</body>
</html>