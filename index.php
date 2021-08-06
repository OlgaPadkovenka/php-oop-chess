<?php
require_once __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP POO - Jeu d'échecs</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <table>
        <!-- <tr>
            <td style="background-color: #FFCE9E">
                Case
            </td>
            <td style="background-color: #D18B47">
                Case
            </td>
            <td style="background-color: #FFCE9E">
                Case
            </td>
            <td style="background-color: #D18B47">
                Case
            </td>
            <td style="background-color: #FFCE9E">
                Case
            </td>
            <td style="background-color: #D18B47">
                Case
            </td>
            <td style="background-color: #FFCE9E">
                Case
            </td>
            <td style="background-color: #D18B47">
                Case
            </td>
        </tr>-->

        <?php for ($x = 0; $x < 8; $x++) : { ?>
                <?php echo "<tr>"; ?>

                <?php for ($y = 0; $y < 8; $y++) : { ?>
                        <?php echo "<td>" ?>
                        <?php echo "</td>"; ?>
                    <?php   } ?>
                <?php endfor ?>

                <?php echo "</tr>"; ?>
            <?php   } ?>
        <?php endfor ?>
    </table>
</body>

</html>