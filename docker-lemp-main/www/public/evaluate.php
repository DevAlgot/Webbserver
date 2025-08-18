<!doctype html>
<html>

<head lang="sv">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Matematik-test</h1>

        <?php
        $name = $_POST['name'];

        $questionsAmount = 15; // Antal frågor


        $ans = array();
        for ($i = 1; $i <= $questionsAmount; $i++) {
            $ans[] = $_POST['q' . $i];
            $cor = explode(',', $_POST['a' . $i]);
            
            if (($ans[$i - 1] == $cor[0])) {
                echo ("
                <fieldset> 
                    <Legend>Fråga " . $i . "</Legend> 
                    <b> " . $cor[1] . "</b> 
                    <br>
                    <p>Ditt svar: "  . $ans[$i - 1] . "</p> 
                </fieldset>");
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


        $points = 0;
        for ($i = 1; $i <= $questionsAmount; $i++) {
            if ($ans[$i - 1] == $cor[0]) {
                $points++;
            }
        }


        echo ("<p>" . $name . " fick " . $points . " poäng!</p>");
        ?>
    </main>

</body>

</html>