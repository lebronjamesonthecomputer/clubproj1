<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>GGC Fashion Club</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="main.js"></script>
	<script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>Project1</title>
    </head>
    <body>
    
    <?php
        
        echo "<video autoplay muted loop id=\"myVideo\">";
        echo "<source src=\"main.mp4\" type=\"video/mp4\">";
        
        echo "</video>";
        echo "<div class = \"center-screen\">";
        echo "<h1>Thank you for completing the registration.</h1>";
       
        echo "<div class = \"wrp\">";
        echo "<p>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Phone: " . $_POST["phone"] . "<br>";
        echo "Birthday: " . $_POST["luckyDay"] . "<br><br>";
        echo "Gender: " . $_POST["gender"] . "<br>";
        echo "level: " . $_POST["level"] . "<br><br>";
    
        echo "Your answers for the ITEC knowledge quiz:<br>";
        echo "Q1: ". $_POST["Q1"] . "<br>";
        echo "Q2: ". $_POST["Q2"] . "<br>";
        echo "Q3:";
        if ($_POST["Q3A"] == "yes")
            echo "A ";
        if ($_POST["Q3B"] == "yes")
            echo "B ";
        if ($_POST["Q3C"] == "yes")
            echo "C ";
        if ($_POST["Q3D"] == "yes")
            echo "D ";
        echo "<br>";
        echo "Q4: ". $_POST["Q4"] . "<br>";
        echo "<br>";

        $score = 0;
        if ($_POST["Q1"] == "D")
            $score += 50;
        if ($_POST["Q2"] == "A")
            $score += 50;
        if (($_POST["Q3A"] == "yes") && ($_POST["Q3B"] == "yes") && ($_POST["Q3C"] != "yes") && ($_POST["Q3D"] == "yes"))
            $score += 50;
         if ($_POST["Q4"] == "B")
            $score += 50;
        echo "Your quiz score: ";

        echo "<br><span style = 'color:red;'><b>" . $score . "</b></span></p>";

        echo "</div>";
        echo "</div>";

    ?>
    </body>
</html>
