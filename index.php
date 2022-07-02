<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <h1>Calendario</h1>
</header>

<body>
    
        <table border="2" >
            <tr>
                <th> Dom </th>
                <th> Seg </th>
                <th> Ter </th>
                <th> Qua </th>
                <th> Qui </th>
                <th> Sex </th>
                <th> Sab </th>
            </tr>
        
        <?php calendario(); ?>
        
        </table>
    
    
</body>
</html>

<?php
    function linha($semana)
    {
        echo "<tr>";

        for($i = 0; $i <=6; $i++){
            if(isset($semana[$i])){
                echo "<td>{$semana[$i]}</td>";
            } else {
                echo"<td></td>";
            }
        }
        
    
    }
    ?>

<?php

    function calendario() {

        $dia = 1;
        $semana = array();

        while ($dia <=31){

            array_push($semana, $dia);

            if (count($semana) == 7) {
                linha($semana);
                $semana = array();
            }

            $dia++;
        }
        linha($semana);

    }

    ?>


