<!DOCTYPE html>
<html>
<head>
    <title>Project1</title>
    </head>
    <body>
    <?php
        include "Lab2functions.php";

        greeting($_POST["myName"]);
        
        echo "Thank you for taking the ITEC student survey.<br><br>";
        echo "Your Email: " . $_POST["email"] . "<br>";
        echo "Your level: " . $_POST["level"] . "<br><br>";

        echo "Your answers for the ITEC knowledge quiz:<br>";
        echo "Q1: ". $_POST["Q1"] . "<br>";
        echo "Q2: ". $_POST["Q2"] . "<br>";
        echo "Q3: ";
        if ($_POST["Q3A"] == "yes")
            echo "A ";
        if ($_POST["Q3B"] == "yes")
            echo "B ";
        if ($_POST["Q3C"] == "yes")
            echo "C ";
        if ($_POST["Q3D"] == "yes")
            echo "D ";
        echo "<br><br>";

        echo "Your quiz score<br>";
        $score = 0;
        if ($_POST["Q1"] == "C")
            $score += 50;
        if ($_POST["Q2"] == "F")
            $score += 50;
        if (($_POST["Q3A"] == "yes") && ($_POST["Q3B"] == "yes") && ($_POST["Q3C"] == "yes") && ($_POST["Q3D"] != "yes"))
            $score += 50;
        echo "<h3 style = 'color:red;'>" . $score . "</h3>";
    ?>
    </body>
</html>

