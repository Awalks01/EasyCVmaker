<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1>

    <h3>My Todo List</h3>

    <p> firstName : </p>
    <?php
        // foreach ($work_function as $key => $value) {
        //echo "$key :  $value  <br>";
        //} 
    ;
    ?>

    <?php
    //foreach ($work_function as list($function, $city, $employer, $startMonth, $startYear, $endMonth, $endYear)) {
    ?>

    <?php
    //}
    ?>

    <?php
    //foreach ($education_name as list($name, $city, $institution, $startMonth, $startYear, $endMonth, $endYear)) {
    // echo "$name, $city, $institution, $startMonth, $startYear, $endMonth, $endYear <br>";
    // }
    ?>

    <?php
    // foreach ($hobby_name as $hoby) {
    //  echo "$hoby <br>";
    //}
    ?>

    <?php
    // foreach ($skill_name as list($name, $level)) {
    // echo "$name, $level <br>";
    // }
    ?>

    <?php
    //$array = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
    foreach ($work_function as list($function, $city, $employer, $startMonth, $startYear, $endMonth, $endYear)) {
        if ($startMonth == '0') {
            if ($endMonth == 'tersembunyi') {
                echo ' - ' .  $endYear . '<br>';
            } elseif ($endMonth == 'now') {
                echo  $startYear . ' - ' .  date('M ') . $endYear . '<br>';
            } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
            }
        } elseif ($startMonth == 'tersembunyi') {
            if ($endMonth == '0') {
                echo $startYear . ' - ';
            } elseif ($endMonth == 'tersembunyi') {
                echo $startYear . ' - ' .  $endYear;
            } elseif ($endMonth == 'now') {
                echo  $startYear . ' - ' .  date('M') . $endYear . '<br>';
            } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                echo  ' - ' . date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
            }
        } elseif ($startMonth ==  '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
            if ($endMonth == '0') {
                echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' . '<br>';
            } elseif ($endMonth == 'tersembunyi') {
                echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  $endYear . '<br>';
            } elseif ($endMonth == 'now') {
                echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M') . $endYear . '<br>';
            } elseif ($endMonth == '1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9' || '10' || '11' || '12') {
                echo date('M Y', mktime(0, 0, 0, (int)$startMonth, 1, $startYear)) . ' - ' .  date('M Y', mktime(0, 0, 0, (int)$endMonth, 1, $endYear)) . '<br>';
            }
        }
    }
    ?>

</body>

</html>