<?php
function priceTable(){
        echo "<table border = 1; style='margin-left:auto;margin-right:auto;'>";
        
        //global $now;
        echo "<tr>";
        
        for ($i = 1;$i <= 4; $i++){
            if ($i == 1)
                echo "<td>" . "Amount" . "</td>";
            else if ($i == 2)
                echo "<td>" . "Checking" .  "</td>";
            else if ($i == 3)
                echo "<td>" . "Savings" .  "</td>";
            else
                echo "<td>" . "High Risk" .  "</td>";
        }
        echo "</tr>";

        echo "<tr>";
        for ($i = 1;$i <= 4; $i++){
            if ($i == 1)
                echo "<td>" . "< $10,000" . "</td>";
            else if ($i == 2)
                echo "<td>" . "0.1%" .  "</td>";
            else if ($i == 3)
                echo "<td>" . "1%" .  "</td>";
            else
                echo "<td>" . "2%" .  "</td>";
        }
        echo "</tr>";

        echo "<tr>";
        for ($i = 1;$i <= 4; $i++){
            if ($i == 1)
                echo "<td>" . ">= $10,000" . "</td>";
            else if ($i == 2)
                echo "<td>" . "0.2%" .  "</td>";
            else if ($i == 3)
                echo "<td>" . "1.5%" .  "</td>";
            else
                echo "<td>" . "2.5%" .  "</td>";
        }
        echo "</tr>";
        
        echo "</table>";
    }

    function accountType($n){
        switch ($n) {
        case 1:
            echo "<span style = 'color: red'>Checking</span>";
            break;
        case 2:
            echo "<span style = 'color: red'>Savings</span>";
            break;
        default:
            echo "<span style = 'color: red'>High Risk</span>";
            break;
        }
    }
    function calc($d, $a, $y){
        global $deposit;
        global $account;
        global $yrs;
        $intrest = 1;
        if ($deposit < 10000){
            switch($a){
                  case 1:
                    $intrest = 0.001;
                    break;
                  case 2:
                    $intrest = .01;
                    break;
                  default:
                    $intrest = .02;
                    break;  
            }
        }else{
            switch($a){
                  case 1:
                    $intrest = 0.002;
                    break;
                  case 2:
                    $intrest = .015;
                    break;
                  default:
                    $intrest = .025;
                    break;  
            }
        }

        $total = (($deposit)* pow((1+$intrest),$y));
        return $total;
    }
        function greeting($name){
        $hour = date("H");
        //echo $hour;
        echo "<h3>";
        if ($hour < "12"){
            echo "Good morning, $name! <br>";
        } elseif ($hour < "18"){
            echo "Good afternoon, $name!<br>";
        } else {
            echo "Good night, $name!<br>";
        }
         echo "</h3>";

    }
        function calendar($day){
        echo "<h3>Calendar for ".date("F Y", $day). ".</h3><br>";
        $firstDay = date("m", $day)."/01/".date("Y",$day);
        $day1 = strtotime($firstDay);
        echo "<table border = 1 style = \"width:300px;\">";
        echo "<tr>";
        echo "<th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>";
        echo "</tr>";
        $startDay = date("w",$day1);
        echo "<tr>";
        for ($i = 0; $i < $startDay; $i++)
            echo "<td>&nbsp;</td>";
        $sd = date("d",$day);
        do{
            if (date("d", $day1) == $sd)
                echo "<td style = \"color: red; font-weight: bold;\">".date("d",$day1)."</td>";
            else       
                echo "<td>".date("d", $day1)."</td>";
            if (date("w",$day1)==6){
                echo "</tr>";
                echo "<tr>";
            }
            $day1 = strtotime("+1 day",$day1);
        }while (date("d", $day1) > 1);
        echo "</tr>";
        echo "</table>";
    }
    ?>
