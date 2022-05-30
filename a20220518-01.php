<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<div>$i</div>";
    }

    ?>

    <table border="1">
        <?php for ($i = 1; $i < 11; $i++) { ?>
            <tr>
                <?php for ($k = 1; $k < 11; $k++) { ?>
                    <td><?= $i * $k ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table><br>


    <table border="1">
        <?php for ($i = 1; $i < 11; $i++) { ?>
            <tr>
                <?php for ($k = 1; $k < 11; $k++) { ?>
                    <td><?= sprintf(' %s * %s = %s', $i, $k, $i * $k) ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table><br>


    <table border="1">
        <?php for ($i = 1; $i < 11; $i++) { ?>
            <tr>
                <?php for ($k = 1; $k < 11; $k++) { ?>
                    <td>
                        <?= $i * $k ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table><br>

</body>

</html>