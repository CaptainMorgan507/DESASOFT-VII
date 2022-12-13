<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" HREF="css/styles.css">
    <title>Caja del Seguro Social</title>
</head>
<body>
    <?php
        require_once('classes\medicineSpec.php');
        $log = new MedicineSpec("search");
        echo $log;
    ?>
</body>
</html>