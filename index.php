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


        <!-- start x line-->
        <?php for ($line = 0; $line < 8; $line++) : { ?>
                <?php echo "<tr>"; ?>

                <!-- start y case-->
                <?php for ($case = 0; $case < 8; $case++) : { ?>

                        <!-- start if y case-->
                        <?php if ($case % 2 == 0) : { ?>

                                <!-- start if x line-->
                                <?php if ($line % 2 == 0) : { ?>

                                        <?php echo '<td style="background-color: #FFCE9E">' ?>
                                        <?php echo 'Case' ?>
                                        <?php echo '</td>'; ?>

                                    <?php }
                                else : { ?>

                                        <?php echo '<td style="background-color: #D18B47">' ?>
                                        <?php echo 'Case' ?>
                                        <?php echo '</td>'; ?>

                                    <?php } ?>
                                <?php endif ?>

                                <!-- start else case -->
                            <?php }
                        else : { ?>
                                <!-- end else case -->

                                <?php if ($line % 2 == 0) : { ?>
                                        <?php echo '<td style="background-color: #D18B47">' ?>
                                        <?php echo 'Case' ?>
                                        <?php echo '</td>'; ?>

                                    <?php }
                                else : { ?>
                                        <?php echo '<td style="background-color: #FFCE9E">' ?>
                                        <?php echo 'Case' ?>
                                        <?php echo '</td>'; ?>
                                    <?php   } ?>
                                <?php endif ?>

                            <?php   } ?>
                        <?php endif ?>
                        <!-- end if y case-->

                    <?php   } ?>
                <?php endfor ?>
                <!-- end y case -->

                <?php echo "</tr>"; ?>
            <?php   } ?>
        <?php endfor ?>
        <!-- end x line -->
    </table>
</body>

</html>