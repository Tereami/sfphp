<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name . ' в городе ' . $city ?></title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="flex-container">
        <header>
            <?php include '_logo.php' ?>
            <?php include '_menu.php' ?>
        </header>
        <div class="card">
            <h1> <?php echo $name . ', ' . $year . ' года, за ' . $price . ' руб.' ?></h1>
            <p>В кредит всего за 
                <?php
                $years = 3;
                $rate = 0.15;
                $result = ($years * $rate * $price + $price) / ($years * 12);
                 echo round($result); 
                ?> 
                руб. в месяц!
            </p>
            <div class="mainInfo">
                <div class="photo">
                    <?php echo '<img src="/img/300zx.jpg">' ?>
                </div>
                <div class="table">
                    <ul>
                        <li>Год выпуска: <?php echo $year ?> </li>
                        <li>Пробег: <?php echo $kilometers ?> км.</li>
                        <li>Тип кузова: <?php echo $type ?> </li>
                        <li>Мощность двигателя: <?php echo $power ?> л.с. </li>
                        <li>Расход топлива: <?php echo $consumption ?> л./100 км</li>
                        <li>Объем бензобака: <?php echo $fuelVolume ?> </li>
                        <li>Пробег на 1 баке:
                            <?php
                            $lpk = round(100 * $fuelVolume / $consumption);
                            echo $lpk;
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="description">
                <?php echo $desc ?>
            </div>
        </div>
        <footer>
            <?php include '_footer.php' ?>
        </footer>
    </div>
</body>

</html>