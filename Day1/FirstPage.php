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
        for($i = 0; $i < 10; $i++)
        {
            if($i%2 == 0)
            {
                ?>
                    <h1 style="color: green"><?php echo "Tile from server"; ?></h1>
                <?php
            }
            else
            {
                ?>
                    <h2 style="color: red"><?php echo "Tile from server"; ?></h2>
                <?php
            }
        }
    ?>
</body>
</html>