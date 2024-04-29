<?php
require_once "classes/allclass.php"
?>

<!DOCTYPE html>
<html>
<head>
<title>magExpress</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>


    
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">ad</th>
        <th scope="col">url</th>
        <th scope="col">sıra</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
    $db=new magexpress\db\Database();
    $myQuery=$db->getRows("SELECT * FROM menuler");
    foreach ($myQuery as $items) {

    ?>
        <tr>
        <th scope="row"><?php echo $items->menu_id?></th>
        <td><?php echo $items->menu_ad?></td>
        <td><?php echo $items->menu_url?></td>
        <td><?php echo $items->menu_sira?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</body>
</html>