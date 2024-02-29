<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corr exo3</title>
</head>
<body>
    <table border="1">
        <tr bgcolor="orange">
            <td>*</td>
            <?php for($j=2; $j<10; $j++){ ?>
                <td><?php echo $j; ?></td>
            <?php } ?>
        </tr>
        <?php for($i=2; $i<10; $i++){ ?>
        <tr <?php echo $i%2==0 ? "bgcolor='pink'" : "bgcolor='brown'"; ?>>
            <td bgcolor="orange"><?php echo $i; ?></td>
            <?php for($j=2; $j<10; $j++){ ?>
            <td><?php echo $i * $j; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>