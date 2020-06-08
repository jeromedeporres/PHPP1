<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHPP1EXO04</title>
</head>
    <body>
        <p>
            <?php
            $strlen = "Hello";
            $int = 36;
            $float = 36.56;
            $boolean = true;
            ?>
            <p><?php echo $strlen?><p>
            <p><?php echo $int?><p>
            <p><?php echo $float?><p>
            <p><?php echo $boolean?><p>
        </p>
    </body>
</html>


<?php
    $strlen = "Hello";
    $int = 36;
    $float = 36.56;
    $boolean = true;
    ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHPP1EXO04</title>
</head>
    <body>
        <p>
            <p><?= $strlen?><p>
            <p><?= $int?><p>
            <p><?= $float?><p>
            <p><?= $boolean?><p>
        </p>
    </body>
</html>