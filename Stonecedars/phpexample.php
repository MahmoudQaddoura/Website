<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php example</title>
</head>
<body>

    <?php

    $grades = array("Sameer"=>80, "Saif"=>100, "Rana=>98", "Malek"=>99);
    echo "</br>"
    echo "</br>"
    echo "<table border=1 style='border-collapese:collapse'>";
    echo "<tr> <th> Name </th> <th> grade </th> </tr>";

    foreach($grades sas $student=> $grade){
        echo "<tr> <td> $Student </td> <td> $grade </td></tr>";
    }
    echo "</table>";
    ?>

</body>
</html>