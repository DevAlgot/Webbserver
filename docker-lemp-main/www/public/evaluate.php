<!doctype html>
<html>

<head lang="sv">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        include("header.html")
    ?>
    <main id="result">
        <h1>Matematik-test</h1>

        <?php
        $name = $_POST['name'];

        $questionsAmount = 15; // Antal frågor
        $points = 0;

        $ans = array();
        for ($i = 1; $i <= $questionsAmount; $i++) {
            $ans[] = $_POST['q' . $i];
            $cor = explode(',', $_POST['a' . $i]);
            
            if (($ans[$i - 1] == $cor[0])) {
                echo ("
                <fieldset class='correct'> 
                    <Legend>Fråga " . $i . "</Legend> 
                    <b> " . $cor[1] . "</b> 
                    <br>
                    <p>Ditt svar: "  . $ans[$i - 1] . "</p> 
                </fieldset>");
                $points++;
            } else {
                echo ("
                <fieldset class='wrong'> 
                    <Legend>Fråga " . $i . " </Legend> 
                    <b> " . $cor[1] . "</b> 
                    <br>
                    <p>Ditt svar: "  . $ans[$i - 1] . "</p> 
                    <label>Rätt svar: </label> " .  $cor[0] . "
                </fieldset>");
            }
        }




        echo ("<p>" . $name . " fick " . $points . " poäng!</p>");
        ?>
    </main>
    <?php
        include("footer.html");
    ?>

</body>

</html>