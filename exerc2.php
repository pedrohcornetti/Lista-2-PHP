<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form action="" method="post">
        <button type="submit" >Ok</button>
        <?php
        for ($i=0; $i < 7; $i++) {
            echo '<input type="number" name="valores[]"> <br>';
        }
        ?>
        <?php
            if (isset($_POST)){
                if (isset($_POST['valores'])) {
                    $vetor = $_POST['valores'];
                    var_dump($vetor);
            }
        }
        ?>

    </form>
</body>
</html>