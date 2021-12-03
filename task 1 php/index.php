<?php
    require_once "autoDatas.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto</title>
</head>
<body>
        <form action="" method="POST">
            <select id="makes" name="makes" class="form-select">
                <?php
                    foreach ($autos as $make => $model) {
                        if ($make == "Any") echo "<option selected value=".$make.">$make</option>";
                        else echo "<option value=".$make.">$make</option>";
                    }
                ?>
            </select>
            <select id="models" name="models" class="form-select" disabled>
                <?php
                    echo "<option selected disabled>Any</option>";
                ?>
            </select>
            <input type="submit" name="submit" value="Print" />
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $make = $_POST['makes'];
                $model = $_POST['models'] ?? 'Any';
                echo "<h1>Make: $make, Model: $model</h1>";
            }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="index.js"></script>
</body>
</html>