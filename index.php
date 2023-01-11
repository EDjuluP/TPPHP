<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Initiation au PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

        <?php 
            echo '<div class="Exercice"> Exo1 </div>';

            $Nombre = rand(0,100);

            if ($Nombre%2==0){
                echo '<div class="bleu"> Le nombre '.$Nombre.' est pair. </div>';
            }else{
                echo '<div class="rouge"> Le nombre '.$Nombre.' est impair. </div>';
            }
        ?>

        <?php
            echo '<div class="Exercice"> Exo2 </div>';

            $varEmmanuel = "Emmanuel";
            $monTableau = array(2, 3, 5, 7, 11);

            for ($i=0 ; $i < 5 ; $i++) {
                echo $monTableau[$i];

               
            }
        ?>


<table>
    <tr>
        <?php
        echo "<td>".$monTableau[$i]."</td>";

        ?><td><?= $monTableau[$i]?></td>
    </tr>
</table>

</body>

</html>
